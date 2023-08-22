<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use App\Models\PromptCategory;
use App\Models\Prompts;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AICustomController extends Controller
{
  public function index()
  {
    $list = Prompts::orderBy('name', 'asc')->where('is_custom', 1)->get();
    return view('backend.admin.openai.custom.list', compact('list'));
  }

  public function createEdit($id = null)
  {
    if ($id == null) {
      $prompt = null;
    } else {
      $prompt = Prompts::where('id', $id)->firstOrFail();
    }
    $categories = PromptCategory::orderBy('name', 'desc')->get();
    return view('backend.admin.openai.custom.form', compact('prompt', 'categories'));
  }

  public function store(Request $request)
  {
    if ($request->id != null) {
      $prompt = Prompts::where('id', $request->id)->firstOrFail();
    } else {
      $prompt = new Prompts();
    }

    $prompt->name = $request->name;
    $prompt->description = $request->description;
    $prompt->icon = $request->icon;
    $prompt->prompt = $request->prompt;

    $inputNames = explode(',', $request->input_name);
    $inputDescriptions = explode(',', $request->input_description);
    $inputTypes = explode(',', $request->input_type);

    $i = 0;
    $array = [];
    foreach ($inputNames as $inputName) {
      $array[$i]['name'] = Str::slug($inputName);
      $array[$i]['type'] = $inputTypes[$i];
      $array[$i]['question'] = $inputName;
      $array[$i]['description'] = $inputDescriptions[$i];
      $i++;
    }

    $fields = json_encode($array, JSON_UNESCAPED_SLASHES);
    $prompt->active = 1;
    $prompt->slug = strtolower(Str::random(4) . Str::slug($request->name) . '-' . Str::random(4));
    $prompt->fields = $fields;
    $prompt->is_custom = 1;
    $category = PromptCategory::where('name', $request->category)->first();
    $category_id = $category->id;

    if ($category == null) {
      $new = new PromptCategory();
      $new->name = $request->category;
      $new->save();
      $category_id = $new->id;
    }

    $prompt->category_id = $category_id;
    $prompt->save();
  }

  public function delete($id = null)
  {
    $prompt = Prompts::where('id', $id)->firstOrFail();
    $prompt->delete();
    return back()->with(['message' => 'Deleted Successfully', 'type' => 'success']);
  }
}
