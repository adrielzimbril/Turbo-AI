<?php

namespace App\Http\Controllers\Backend\User;

use App\Http\Controllers\Controller;
use App\Models\PromptUsage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AIDocumentController extends Controller
{
  public function index()
  {
    $items = Auth::user()->usage()->whereNot('content_type', 'image')->orderBy('created_at', 'desc')->paginate(50);
    return view('backend.user.ai.documents', compact('items'));
  }

  public function store(Request $request)
  {
    $document = PromptUsage::where('slug', $request->doc_slug)->firstOrFail();
    $document->output = $request->doc_text;
    $document->title = $request->doc_title;
    $document->save();
    return response()->json([], 200);
  }

  public function view($slug)
  {
    $usage = PromptUsage::where('slug', $slug)->first();
    $prompt = $usage->content;
    return view('backend.user.ai.documents_edit', compact('usage', 'prompt'));
  }

  public function delete($slug)
  {
    $document = PromptUsage::where('slug', $slug)->first();
    $document->delete();
    return redirect()->route('dashboard.user.ai.documents.index')->with(['message' => 'Document deleted successfuly', 'type' => 'success']);
  }
}
