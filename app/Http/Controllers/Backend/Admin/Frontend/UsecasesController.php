<?php

namespace App\Http\Controllers\Backend\Admin\Frontend;

use App\Http\Controllers\Controller;
use App\Models\FrontendUsecases;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UsecasesController extends Controller
{
  public function index()
  {
    $usecases = FrontendUsecases::orderBy('created_at', 'desc')->get();
    return view('backend..admin.frontend.usecases.index', compact('usecases'));
  }

  public function createEdit($id = null)
  {
    if ($id == null) {
      $usecase = null;
    } else {
      $usecase = FrontendUsecases::where('id', $id)->firstOrFail();
    }
    return view('backend..admin.frontend.usecases.createEdit', compact('usecase'));
  }

  public function store(Request $request)
  {
    if ($request->id != 'undefined') {
      $usecase = FrontendUsecases::where('id', $request->id)->firstOrFail();
    } else {
      $usecase = new FrontendUsecases();
    }

    if ($request->hasFile('image')) {
      $path = 'upload/images/usecases/';
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

      $usecase->image = $path . $image_name;
    }


    $usecase->tab_title = $request->tab_title;
    $usecase->title = $request->title;
    $usecase->content = $request->content;
    $usecase->content_sub = $request->content_sub;
    $usecase->save();
  }

  public function delete($id)
  {
    $usecase = FrontendUsecases::where('id', $id)->firstOrFail();
    $usecase->delete();
    return back()->with(['message' => 'Usecase deleted successfully', 'type' => 'success']);
  }
}
