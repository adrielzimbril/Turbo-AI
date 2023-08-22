<?php

namespace App\Http\Controllers\Backend\Admin\Frontend;

use App\Http\Controllers\Controller;
use App\Models\FrontendHowItWorks;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HowItWorksController extends Controller
{
  public function index()
  {
    $howItWorks = FrontendHowItWorks::orderBy('order')->get();
    return view('backend..admin.frontend.howitworks.index', compact('howItWorks'));
  }

  public function createEdit($id = null)
  {
    if ($id == null) {
      $work = null;
    } else {
      $work = FrontendHowItWorks::where('id', $id)->first();
    }

    return view('backend..admin.frontend.howitworks.createEdit', compact('work'));
  }

  public function store(Request $request)
  {
    if ($request->id != 'undefined') {
      $howitWorks = FrontendHowItWorks::where('id', $request->id)->firstOrFail();
    } else {
      $howitWorks = new FrontendHowItWorks();
    }

    if ($request->file('image')) {
      $path = 'upload/images/howitworks/';
      $image = $request->file('image');
      $image_name = Str::random(4) . '-' . Str::slug($request->title) . '-image.' . $image->getClientOriginalExtension();

      $imageTypes = ['jpg', 'jpeg', 'png', 'svg', 'webp'];
      if (!in_array(Str::lower($image->getClientOriginalExtension()), $imageTypes)) {
        $data = array(
          'errors' => ['The file extension must be jpg, jpeg, png, webp or svg.'],
        );
        return response()->json($data, 419);
      }

      $image->move($path, $image_name);

      $howitWorks->image = $image_name;
    }

    $howitWorks->order = (int)$request->order;
    $howitWorks->title = $request->title;
    $howitWorks->content = $request->content;
    $howitWorks->save();
  }

  public function delete($id)
  {
    $howitWorks = FrontendHowItWorks::where('id', $id)->first();
    $howitWorks->delete();
    return back()->with(['message' => 'How it Works Step is deleted.', 'type' => 'success']);
  }
}
