<?php

namespace App\Http\Controllers\Backend\Admin\Frontend;

use App\Http\Controllers\Controller;
use App\Models\FrontendPartners;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PartnersController extends Controller
{
  public function index()
  {
    $partners = FrontendPartners::all();
    return view('backend.admin.frontend.partners.index', compact('partners'));
  }

  public function createEdit($id = null)
  {
    if ($id == null) {
      $partner = null;
    } else {
      $partner = FrontendPartners::where('id', $id)->first();
    }

    return view('backend.admin.frontend.partners.createEdit', compact('partner'));
  }

  public function store(Request $request)
  {
    if ($request->id != 'undefined') {
      $partner = FrontendPartners::where('id', $request->id)->firstOrFail();
    } else {
      $partner = new FrontendPartners();
    }

    if ($request->file('image')) {
      $path = 'upload/images/partners/';
      $image = $request->file('image');
      $image_name = Str::random(4) . '-' . Str::slug($request->name) . '-image.' . $image->getClientOriginalExtension();

      $imageTypes = ['jpg', 'jpeg', 'png', 'svg', 'webp'];
      if (!in_array(Str::lower($image->getClientOriginalExtension()), $imageTypes)) {
        $data = array(
          'errors' => ['The file extension must be jpg, jpeg, png, webp or svg.'],
        );
        return response()->json($data, 419);
      }

      $image->move($path, $image_name);

      $partner->image = $image_name;
    }

    $partner->name = $request->name;
    $partner->save();
  }

  public function delete($id)
  {
    $partner = FrontendPartners::where('id', $id)->first();
    $partner->delete();
    return back()->with(['message' => 'Client deleted.', 'type' => 'success']);
  }
}
