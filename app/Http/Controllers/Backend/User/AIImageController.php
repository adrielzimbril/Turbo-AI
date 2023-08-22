<?php

namespace App\Http\Controllers\Backend\User;

use App\Http\Controllers\Controller;
use App\Models\PromptUsage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use OpenAI;

class AIImageController extends Controller
{
  public function index()
  {
    $promptUsage = PromptUsage::where('user_id', Auth::id())->where('content_type', 'image')->latest();
    $promptUsage = $promptUsage->paginate(30);
    return view('backend.user.ai.image', compact('promptUsage'));
  }

  public function process(Request $request)
  {
    $prompt = $request->prompt;
    $size = $request->size;
    $style = $request->style;
    $lighting = $request->lighting;
    $mood = $request->mood;
    $number_of_images = (int)$request->number_of_images;

    return $this->result($prompt, $size, $style, $lighting, $mood, $number_of_images);
  }

  public function result($prompt, $size, $style, $lighting, $mood, $number_of_images)
  {
    $user = Auth::user();

    if (Auth::user()->remaining_images == 0) {
      $data = array(
        'errors' => ['You have no credits left. Please consider upgrading your plan.'],
      );
      return response()->json($data, 419);
    }

    if ($style != null)
      $prompt .= ' ' . $style . ' style.';
    if ($lighting != null)
      $prompt .= ' ' . $lighting . ' lighting.';
    if ($mood != null)
      $prompt .= ' ' . $mood . ' mood.';

    $usages = [];

    for ($i = 0; $i < $number_of_images; $i++) {
      if (getSetting('image_processor') == 'dall-e') {
        $response = OpenAI::client(getRandSetting('openai_api_secret'))->images()->create([
          'model' => 'image-alpha-001',
          'prompt' => $prompt,
          'size' => $size,
          'response_format' => 'b64_json',
        ]);

        $image_url = $response['data'][0]['b64_json'];
      } elseif (getSetting('image_processor') == 'stable-diffusion') {
        $url = 'https://api.stability.ai/v1/generation/' . getSetting('stable_diffusion_engine') . '/text-to-image';

        $stable_diffusion = getSetting('stable-diffusion_key');

        $headers = [
          'Authorization:' . $stable_diffusion,
          'Content-Type: application/json',
        ];

        $resolutions = explode('x', $size);
        $width = $resolutions[0];
        $height = $resolutions[1];

        $data['text_prompts'][0]['text'] = $prompt;
        $data['text_prompts'][0]['weight'] = 1;
        $data['clip_guidance_preset'] = '';
        $data['height'] = (int)$height;
        $data['width'] = (int)$width;

        $diffusion_samples = 'none';
        if ($diffusion_samples != 'none') {
          $data['sampler'] = $diffusion_samples;
        }
        $data['samples'] = 1;
        if ($style != 'none') {
          $data['style_preset'] = $style;
        }

        $postdata = json_encode($data);

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        $result = curl_exec($ch);
        curl_close($ch);

        $response = json_decode($result, true);

        if (isset($response['artifacts'])) {
          foreach ($response['artifacts'] as $key => $value) {

            $image_url = base64_decode($value['base64']);
          }
        } else {
          $data['status'] = 'error';
          $data['message'] = __('There was an issue generating your Image, please try again or contact support team');
          return $data;
        }
      }

      $contents = base64_decode($image_url);
      $name = 'image' . '-' . strtolower(Str::slug($prompt)) . '-' . strtolower(Str::random(8)) . '-' . '.png';
      Storage::disk('public')->put('/uploads/image/' . $name, $contents);

      $usage = new PromptUsage();
      $usage->title = 'Image - ' . date("Y-m-d");
      $usage->slug = strtolower(Str::random(8)) . '-' . strtolower(Str::slug($user->fullName())) . '-' . Str::slug($usage->title);
      $usage->user_id = Auth::id();
      $usage->model = getSetting('image_processor');
      $usage->prompt = $prompt;
      $usage->content_type = 'image';
      $usage->response = json_encode($response->toArray());
      $usage->output = '/uploads/image/' . $name;
      $usage->hash = Str::random(256);
      $usage->credits = 1;
      $usage->words = 0;
      $usage->save();

      if ($user->remaining_images - 1 == -1) {
        return [
          'error' => 400,
          'success' => false,
          'message' => 'You have not enough tokens to generate this image'
        ];
      }

      if ($user->remaining_images == 1) {
        $user->remaining_images = 0;
      }

      if ($user->remaining_images != -1 or $user->remaining_images != 1 or $user->remaining_images != 0) {
        $user->remaining_images -= 1;
      }

      if ($user->remaining_images < -1) {
        $user->remaining_images = 0;
      }

      $user->save();
      $usages[] = view('backend.user.ai._partials.image', compact('usage'))->render();
    }

    return [
      'status' => 200,
      'success' => true,
      'image' => $usages
    ];
  }

  public function delete($slug)
  {
    $prompt = PromptUsage::where('slug', $slug)->first();
    $prompt->delete();
    return back()->with(['message' => 'Deleted successfully', 'type' => 'success']);
  }
}
