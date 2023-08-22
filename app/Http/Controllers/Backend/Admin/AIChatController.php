<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use App\Models\ChatCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AIChatController extends Controller
{
  public function index()
  {
    $list = ChatCategory::orderBy('name', 'asc')->get();
    return view('backend.admin.openai.chat.list', compact('list'));
  }

  public function createEdit($id = null)
  {
    if ($id == null) {
      $prompt = null;
    } else {
      $prompt = ChatCategory::where('id', $id)->firstOrFail();
    }

    return view('backend.admin.openai.chat.form', compact('prompt'));
  }

  public function store(Request $request)
  {
    if ($request->id != null) {
      $prompt = ChatCategory::where('id', $request->id)->firstOrFail();
    } else {
      $prompt = new ChatCategory();
    }

    if ($request->hasFile('avatar')) {
      $path = 'upload/images/chatbot/';
      $image = $request->file('avatar');
      $image_name = Str::random(8) . '-' . Str::slug($request->name) . '-avatar.' . Str::random(8) . $image->getClientOriginalExtension();

      $image->move($path, $image_name);

      $prompt->image = $path . $image_name;
    }

    $prompt->name = $request->name;
    $prompt->slug = strtolower(Str::random(4) . Str::slug($request->name) . '-' . Str::random(4));
    $prompt->short_name = $request->short_name;
    $prompt->description = $request->description;
    $prompt->role = $request->role;
    $prompt->perso_name = $request->perso_name;
    $prompt->prompt_with = $request->prompt_with;
    $prompt->prompt_prefix = "As a " . $request->role . ", ";
    $prompt->chat_completions = $request->chat_completions;
    $prompt->save();
  }

  public function delete($id = null)
  {
    $prompt = ChatCategory::where('id', $id)->firstOrFail();
    $prompt->delete();
    return back()->with(['message' => 'Deleted Successfully', 'type' => 'success']);
  }
}
