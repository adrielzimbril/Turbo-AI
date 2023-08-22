<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FrontendController extends Controller
{
  public function index()
  {
    return view('backend.admin.frontend.settings');
  }

  public function store(Request $request)
  {
    $fields = ['frontend_template' => $request->frontend_template, 'redirect_url' => $request->redirect_url, 'custom_css' => $request->custom_css, 'custom_js' => $request->custom_js, 'footer_facebook' => $request->footer_facebook, 'footer_twitter' => $request->footer_twitter, 'footer_instagram' => $request->footer_instagram];

    foreach ($fields as $key => $value) {
      updateFrontSection($key, $value);
    }
  }

  public function sections()
  {
    return view('backend.admin.frontend.sections');
  }

  public function sectionStore(Request $request)
  {
    $fields = ['banner_active' => $request->banner_active, 'banner_title' => $request->banner_title, 'banner_content' => $request->banner_content, 'hero_active' => $request->hero_active, 'hero_tag' => $request->hero_tag, 'hero_title' => $request->hero_title, 'hero_subtitle' => $request->hero_subtitle, 'hero_description' => $request->hero_description, 'hero_button' => $request->hero_button, 'hero_link' => $request->hero_link, 'chats_slider_active' => $request->chats_slider_active, 'features_active' => $request->features_active, 'features_heading' => $request->features_heading, 'features_button' => $request->features_button, 'features_link' => $request->features_link, 'usecases_active' => $request->usecases_active, 'usecases_heading' => $request->usecases_heading, 'prompts_active' => $request->prompts_active, 'prompts_heading' => $request->prompts_heading, 'prompts_description' => $request->prompts_description, 'how_it_works_active' => $request->how_it_works_active, 'how_it_works_heading' => $request->how_it_works_heading, 'how_it_works_description' => $request->how_it_works_description, 'image_slider_active' => $request->image_slider_active, 'image_slider_heading' => $request->image_slider_heading, 'testimonials_active' => $request->testimonials_active, 'testimonials_title' => $request->testimonials_title, 'testimonials_heading' => $request->testimonials_heading, 'partners_active' => $request->partners_active, 'pricing_active' => $request->pricing_active, 'pricing_save_percent' => $request->pricing_save_percent, 'pricing_heading' => $request->pricing_heading, 'pricing_title' => $request->pricing_title, 'pricing_description' => $request->pricing_description, 'pricing_monthly_text' => $request->pricing_monthly_text, 'pricing_onetime_text' => $request->pricing_onetime_text, 'faq_active' => $request->faq_active, 'faq_heading' => $request->faq_heading, 'faq_title' => $request->faq_title, 'faq_description' => $request->faq_description, 'try_it_active' => $request->try_it_active, 'try_it_title' => $request->try_it_title, 'try_it_description' => $request->try_it_description, 'try_it_button' => $request->try_it_button, 'try_it_link' => $request->try_it_link, 'footer_button_text' => $request->footer_button_text, 'footer_link' => $request->footer_link];

    foreach ($fields as $key => $value) {
      updateFrontSection($key, $value);
    }

    if ($request->hasFile('hero_illustration')) {
      $path = 'upload/images/illustrations/';
      $image = $request->file('hero_illustration');
      $name = Str::random(4) . '-' . Str::slug(getSetting('site_name')) . '-hero_illustration.' . $image->getClientOriginalExtension();

      $types = ['jpg', 'jpeg', 'png', 'svg', 'webp'];
      if (!in_array(Str::lower($image->getClientOriginalExtension()), $types)) {
        $data = array(
          'errors' => ['The file extension must be jpg, jpeg, png, webp or svg.'],
        );
        return response()->json($data, 419);
      }

      $image->move($path, $name);

      updateSetting('hero_illustration', $path . $name);
    }
  }
}
