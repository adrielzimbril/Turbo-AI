<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Throwable;

class SettingsController extends Controller
{
  public function index()
  {
    return view('backend.admin.settings.general');
  }

  public function store(Request $request)
  {
    $fields = [
      'site_name' => $request->site_name,
      'site_url' => $request->site_url,
      'site_email' => $request->site_email,
      'default_country' => $request->default_country,
      'default_currency' => $request->default_currency,
      'register_active' => $request->register_active,
      'google_analytics_code' => $request->google_analytics_code,
      'meta_title' => $request->meta_title,
      'meta_description' => $request->meta_description,
      'meta_keywords' => $request->meta_keywords,
      'feature_ai_writer' => $request->feature_ai_writer,
      'feature_ai_image' => $request->feature_ai_image,
      'feature_ai_chat' => $request->feature_ai_chat,
      'feature_ai_code' => $request->feature_ai_code,
      'feature_ai_speech_to_text' => $request->feature_ai_speech_to_text,
      'login_without_confirmation' => $request->login_without_confirmation,
      'facebook_active' => $request->facebook_active ?? 0,
      'google_active' => $request->google_active ?? 0,
      'github_active' => $request->github_active ?? 0,
      'twitter_active' => $request->twitter_active ?? 0,
      'free_plan_words' => $request->free_plan_words ?? 0,
      'free_plan_images' => $request->free_plan_images ?? 0
    ];

    foreach ($fields as $key => $value) {
      updateSetting($key, $value);
    }

    $logo_types = [
      'logo' => '',
      'logo_dark' => 'dark',
    ];

    $types = ['jpg', 'jpeg', 'png', 'svg', 'webp'];
    foreach ($logo_types as $logo => $prefix) {

      if ($request->hasFile($logo)) {
        $path = 'upload/images/logo/';
        $image = $request->file($logo);
        $name = Str::random(4) . '-' . $prefix . '-' . Str::slug(getSetting('site_name')) . '-logo.' . $image->getClientOriginalExtension();

        if (!in_array(Str::lower($image->getClientOriginalExtension()), $types)) {
          $data = array(
            'errors' => ['The file extension must be jpg, jpeg, png, webp or svg.'],
          );
          return response()->json($data, 419);
        }

        $image->move($path, $name);

        updateSetting($logo, $path . $name);
      }
    }

    if ($request->hasFile('favicon')) {
      $path = 'upload/images/favicon/';
      $image = $request->file('favicon');
      $name = Str::random(4) . '-' . Str::slug(getSetting('site_name')) . '-favicon.' . $image->getClientOriginalExtension();

      if (!in_array(Str::lower($image->getClientOriginalExtension()), $types)) {
        $data = array(
          'errors' => ['The file extension must be jpg, jpeg, png, webp or svg.'],
        );
        return response()->json($data, 419);
      }

      $image->move($path, $name);

      updateSetting('favicon', $path . $name);
    }
  }

  public function mail()
  {
    return view('backend.admin.settings.smtp');
  }

  public function mailStore(Request $request)
  {
    $fields = [
      'smtp_host',
      'smtp_port',
      'smtp_username',
      'smtp_password',
      'smtp_email',
      'smtp_sender_name',
      'smtp_encryption'
    ];

    foreach ($fields as $field) {
      updateSetting($field, $request->$field);
    }

    return response()->json([], 200);
  }

  public function mailTest(Request $request)
  {
    $toEmail = $request->test_email;
    $toName = 'Test Email';

    try {
      Mail::raw('Test email content', function ($message) use ($toEmail, $toName) {
        $message->to($toEmail, $toName)
          ->subject('Test Email');
      });
      return 'Test email sent!';

    } catch (Throwable $e) {
      return $e->getMessage();
    }
  }
}
