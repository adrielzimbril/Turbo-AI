<?php

namespace App\Http\Controllers\Backend\Admin\Frontend;

use App\Http\Controllers\Controller;
use App\Models\FrontendFaq;
use Illuminate\Http\Request;

class FAQController extends Controller
{
  public function index()
  {
    $faqs = FrontendFaq::orderBy('created_at', 'desc')->get();
    return view('backend..admin.frontend.faq.index', compact('faqs'));
  }

  public function createEdit($id = null)
  {
    if ($id == null) {
      $faq = null;
    } else {
      $faq = FrontendFaq::where('id', $id)->firstOrFail();
    }
    return view('backend..admin.frontend.faq.createEdit', compact('faq'));
  }

  public function store(Request $request)
  {
    if ($request->id != 'undefined') {
      $faq = FrontendFaq::where('id', $request->id)->firstOrFail();
    } else {
      $faq = new FrontendFaq();
    }

    $faq->question = $request->question;
    $faq->answer = $request->answer;
    $faq->save();
  }

  public function delete($id)
  {
    $faq = FrontendFaq::where('id', $id)->firstOrFail();
    $faq->delete();

    return back()->with(['message' => 'Faq deleted successfully', 'type' => 'success']);
  }
}
