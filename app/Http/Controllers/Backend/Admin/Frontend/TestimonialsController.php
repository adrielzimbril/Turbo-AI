<?php

namespace App\Http\Controllers\Backend\Admin\Frontend;

use App\Http\Controllers\Controller;
use App\Models\FrontendTestimonials;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TestimonialsController extends Controller
{
  public function index()
  {
    $testimonials = FrontendTestimonials::all();
    return view('backend..admin.frontend.testimonials.index', compact('testimonials'));
  }

  public function createEdit($id = null)
  {
    if ($id == null) {
      $testimonial = null;
    } else {
      $testimonial = FrontendTestimonials::where('id', $id)->first();
    }

    return view('backend..admin.frontend.testimonials.createEdit', compact('testimonial'));
  }

  public function store(Request $request)
  {
    if ($request->id != 'undefined') {
      $testimonial = FrontendTestimonials::where('id', $request->id)->firstOrFail();
    } else {
      $testimonial = new FrontendTestimonials();
    }

    if ($request->file('avatar')) {
      $path = 'upload/images/testimonials/';
      $image = $request->file('avatar');
      $image_name = Str::random(4) . '-' . Str::slug($request->name) . '-image.' . $image->getClientOriginalExtension();

      $imageTypes = ['jpg', 'jpeg', 'png', 'svg', 'webp'];
      if (!in_array(Str::lower($image->getClientOriginalExtension()), $imageTypes)) {
        $data = array(
          'errors' => ['The file extension must be jpg, jpeg, png, webp or svg.'],
        );
        return response()->json($data, 419);
      }

      $image->move($path, $image_name);

      $testimonial->avatar = $image_name;
    }

    $testimonial->name = $request->name;
    $testimonial->work = $request->work;
    $testimonial->content = $request->content;
    $testimonial->save();
  }

  public function delete($id)
  {
    $testimonial = FrontendTestimonials::where('id', $id)->first();
    $testimonial->delete();
    return back()->with(['message' => 'Testimonial is deleted.', 'type' => 'success']);
  }
}
