<?php

namespace App\Http\Controllers\Backend\Admin\Frontend;

use App\Http\Controllers\Controller;
use App\Models\FrontendFeatures;
use Illuminate\Http\Request;

class FeaturesController extends Controller
{
  public function index()
  {
    $features = FrontendFeatures::orderBy('created_at', 'desc')->get();
    return view('backend..admin.frontend.feature.index', compact('features'));
  }

  public function createEdit($id = null)
  {
    if ($id == null) {
      $feature = null;
    } else {
      $feature = FrontendFeatures::where('id', $id)->firstOrFail();
    }
    return view('backend..admin.frontend.feature.createEdit', compact('feature'));
  }

  public function store(Request $request)
  {
    if ($request->id != 'undefined') {
      $feature = FrontendFeatures::where('id', $request->id)->firstOrFail();
    } else {
      $feature = new FrontendFeatures();
    }

    $feature->title = $request->title;
    $feature->description = $request->description;
    $feature->icon = $request->icon;
    $feature->save();
  }

  public function delete($id)
  {
    $feature = FrontendFeatures::where('id', $id)->firstOrFail();
    $feature->delete();
    return back()->with(['message' => 'feature deleted successfully', 'type' => 'success']);
  }
}
