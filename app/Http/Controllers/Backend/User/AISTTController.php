<?php

namespace App\Http\Controllers\Backend\User;

use App\Http\Controllers\Controller;
use App\Models\PromptUsage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use OpenAI;

class AISTTController extends Controller
{
  public function index()
  {
    return view('backend.user.ai.speech_to_text');
  }

  public function process(Request $request)
  {
    $file = $request->file('file');

    $user = Auth::user();
    $path = 'uploads/audio/';

    $name = 'speech-to-text-' . strtolower(Str::random(10)) . '-' . Str::slug($user->fullName()) . '-new.' . $file->getClientOriginalExtension();

    //Audio Extension Control
    $types = ['mp3', 'mp4', 'mpeg', 'mpga', 'm4a', 'wav', 'webm'];
    if (!in_array(Str::lower($file->getClientOriginalExtension()), $types)) {
      $data = array(
        'errors' => ['Invalid extension, accepted extensions are mp3, mp4, mpeg, mpga, m4a, wav, and webm.'],
      );
      return response()->json($data, 419);
    }

    $file->move($path, $name);

    $response = OpenAI::client(getRandSetting('openai_api_secret'))->audio()->transcribe([
      'file' => fopen($path . $name, 'r'),
      'model' => 'whisper-1',
      'response_format' => 'verbose_json',
    ]);

    $text = $response->text;

    $usage = new PromptUsage();
    $usage->title = 'New Speech To Text Document - ' . date("Y-m-d");
    $usage->slug = 'speech-to-text-' . strtolower(Str::random(10)) . strtolower(Str::slug($user->fullName())) . '-new';
    $usage->user_id = Auth::id();
    $usage->model = 'whisper-1';
    $usage->content_type = 'stt';
    $usage->prompt = $path . $name;
    $usage->response = json_encode($response->toArray());
    $usage->output = $text;
    $usage->hash = Str::random(256);
    $usage->credits = countWords($text);
    $usage->words = countWords($text);
    $usage->save();

    if ($user->remaining_words != -1 and $user->remaining_words - $usage->credits < -1) {
      $user->remaining_words = 0;
    }
    if ($user->remaining_words != -1 and $user->remaining_words - $usage->credits > 0) {
      $user->remaining_words -= $usage->credits;
    }
    if ($user->remaining_words < -1) {
      $user->remaining_words = 0;
    }
    $user->save();

    return [
      'status' => 200,
      'success' => true,
      'output' => trim($usage->output),
      'title' => $usage->title,
      'slug' => $usage->slug ?? ''
    ];
  }

}
