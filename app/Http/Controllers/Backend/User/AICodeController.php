<?php

namespace App\Http\Controllers\Backend\User;

use App\Http\Controllers\Controller;
use App\Models\PromptUsage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use OpenAI;

class AICodeController extends Controller
{
  public function index()
  {
    return view('backend.user.ai.code');
  }

  public function process(Request $request)
  {
    $description = $request->description;
    $code_language = $request->code_language;
    $prompt = "Write a code about $description, in $code_language";

    return $this->result($prompt);
  }

  public function result($prompt)
  {
    $user = Auth::user();

    if (getSetting('openai_default_model') == 'gpt-3.5-turbo' or getSetting('openai_default_model') == 'gpt-4') {
      $response = OpenAI::client(getRandSetting('openai_api_secret'))->chat()->create([
        'model' => 'gpt-3.5-turbo',
        'messages' => [
          ['role' => 'user', 'content' => $prompt],
        ],
      ]);
    } else {
      $response = OpenAI::client(getRandSetting('openai_api_secret'))->completions()->create([
        'model' => getSetting('openai_default_model'),
        'prompt' => $prompt,
        'max_tokens' => (int)getSetting('openai_max_output_length'),
      ]);
    }

    $total_used_tokens = $response->usage->totalTokens;

    $usage = new PromptUsage();
    $usage->title = 'Untitled code - ' . date("Y-m-d");
    $usage->slug = 'codex-' . strtolower(Str::random(8)) . '-' . Str::slug($usage->title);
    $usage->user_id = Auth::id();
    $usage->model = getSetting('openai_default_model') ?? 'gpt-3.5-turbo';
    $usage->prompt = $prompt;
    $usage->content_type = 'code';
    $usage->response = json_encode($response->toArray());
    if (getSetting('openai_default_model') == 'gpt-3.5-turbo') {
      $usage->output = $response->choices[0]->message->content;
      $total_used_tokens = countWords($usage->output);
    } else {
      $usage->output = $response['choices'][0]['text'];
      $total_used_tokens = countWords($usage->output);
    }
    $usage->hash = Str::random(256);
    $usage->credits = $total_used_tokens;
    $usage->words = 0;
    $usage->save();

    $user = Auth::user();
    if ($user->remaining_words != -1) {
      $user->remaining_words -= $total_used_tokens;
    }

    if ($user->remaining_words < -1) {
      $user->remaining_words = 0;
    }
    $user->save();

    $data = [
      'status' => 200,
      'success' => true,
      'output' => trim($usage->output),
      'title' => $usage->title,
      'slug' => $usage->slug ?? '',
      'lang' => substr($usage->prompt, strrpos($usage->prompt, 'in') + 3) ?? ''
    ];

    return $data;
  }
}
