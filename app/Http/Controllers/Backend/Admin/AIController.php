<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use App\Models\PromptCategory;
use App\Models\Prompts;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Throwable;

class AIController extends Controller
{
  public function index()
  {
    $prompts = Prompts::orderBy('name', 'asc')->get();
    return view('backend.admin.openai.list', compact('prompts'));
  }

  public function settings()
  {
    return view('backend.admin.settings.openai');
  }

  public function test($slug)
  {
    if ($slug == 'openai') {
      $client = new Client();
      $apiKeys = explode(',', getSetting('openai_api_secret'));
      foreach ($apiKeys as $apiKey) {
        $client = new Client([
          'base_uri' => 'https://api.openai.com/v1/',
          'headers' => [
            'Authorization' => 'Bearer ' . $apiKey,
            'Content-Type' => 'application/json',
          ],
        ]);
        $prompt = 'Just testing. Just say test.';

        try {
          $response = $client->post('engines/davinci/completions', [
            'json' => [
              'prompt' => $prompt,
              'max_tokens' => 50,
              'temperature' => 0.7,
              'top_p' => 1.0,
              'n' => 1,
              'stop' => null,
            ],
          ]);
          echo ' <br>' . $apiKey . ' - SUCCESS <br>';
        } catch (Throwable $e) {
          echo ' <br>' . $apiKey . ' ' . $e->getMessage() . ' - ERROR <br>';
        }
      }
    }
  }

  public function store(Request $request)
  {
    $fields = [
      'openai_api_secret',
      'openai_default_model',
      'openai_default_language',
      'openai_default_tone_of_voice',
      'openai_default_creativity',
      'openai_max_input_length',
      'openai_max_output_length',
      'image_processor',
      'stable_diffusion_key',
      'stable_diffusion_engine'
    ];

    foreach ($fields as $field) {
      updateSetting($field, $request->$field);
    }

    return response()->json([], 200);
  }

  public function state(Request $request)
  {
    $prompt = Prompts::whereId($request->id)->first();
    $state = $prompt->active;
    if ($state == 1) {
      $prompt->active = 0;
    } elseif ($state == 0) {
      $prompt->active = 1;
    } else {
      return response()->json([], 403);
    }
    $prompt->save();
  }

  public function indexCategory()
  {
    $list = PromptCategory::orderBy('name', 'asc')->get();
    return view('backend.admin.openai.categories.list', compact('list'));
  }

  public function createEditCategory($id = null)
  {
    if ($id == null) {
      $category = null;
    } else {
      $category = PromptCategory::where('id', $id)->firstOrFail();
    }
    return view('backend.admin.openai.categories.form', compact('category'));
  }

  public function storeCategory(Request $request)
  {
    if ($request->id != null) {
      $category = PromptCategory::where('id', $request->id)->firstOrFail();
    } else {
      $category = new PromptCategory();
    }
    $category->name = $request->name;
    $category->save();
  }

  public function deleteCategory($id = null)
  {
    $category = PromptCategory::where('id', $id)->firstOrFail();
    $category->delete();
    return back()->with(['message' => 'Deleted Successfully', 'type' => 'success']);
  }
}
