<?php

use App\Http\Controllers\Gateways\PaymentController;
use App\Models\Activity;
use App\Models\Currency;
use App\Models\FrontendSection;
use App\Models\PaymentPlans;
use App\Models\PromptFavorite;
use App\Models\Setting;
use App\Models\Subscriptions;
use Carbon\Carbon;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Route;

function activeRoute($route_name, $headroute = null)
{
  $activeClass = null;
  $currentRouteName = Route::currentRouteName();

  if (Route::currentRouteName() == $route_name) {
    $activeClass = 'active';
  }
  return $activeClass;
}

function setEnv($key, $value)
{
  $path = base_path('.env');
  if (file_exists($path)) {
    $value = '"' . trim($value) . '"';
    if (is_numeric(strpos(file_get_contents($path), $key)) && strpos(file_get_contents($path), $key) >= 0) {
      file_put_contents($path, str_replace(
        $key . '="' . env($key) . '"',
        $key . '=' . $value,
        file_get_contents($path)
      ));
    } else {
      file_put_contents($path, file_get_contents($path) . "\r\n" . $key . '=' . $value);
    }
  }
}

function setSetting($key, $value)
{
  if (!Setting::where('name', $key)->first()) {
    Setting::create([
      'name' => $key,
      'value' => $value
    ]);
    return true;
  }
  return false;
}

function getSetting($key, $default = null)
{
  global $name;
  $name = $key;
  $value = Cache::remember($name, 6400, function () {
    global $name;
    return Setting::where('name', $name)->first();
  });

  return $value->value ?? $default;
}

function updateSetting($key, $value)
{
  $setting = null;
  if ($setting === null) {
    $setting = Setting::query();
  }
  $setting->updateOrCreate(['name' => $key], [
    'name' => $key,
    'value' => $value
  ]);
  Cache::forget($key);
  return true;
}

function deleteSetting($key)
{
  return Setting::where('name', $key)->delete();
}

function setFrontSection($key, $value)
{
  if (!FrontendSection::where('name', $key)->first()) {
    FrontendSection::create([
      'name' => $key,
      'value' => $value
    ]);
    return true;
  }
  return false;
}

function getFrontSection($key, $default = null)
{
  return FrontendSection::where('name', $key)->first()->value;
}

function updateFrontSection($key, $value)
{
  $setting = null;
  if ($setting === null) {
    $setting = FrontendSection::query();
  }
  $setting->updateOrCreate(['name' => $key], [
    'name' => $key,
    'value' => $value
  ]);
  Cache::forget($key);
  return true;
}

function deleteFrontSection($key)
{
  return FrontendSection::where('name', $key)->delete();
}

function activeRouteBulk($route_names)
{
  $current_route = Route::currentRouteName();
  if (in_array($current_route, $route_names)) {
    return 'active open';
  }
}

function activeRouteBulkShow($route_names)
{
  $current_route = Route::currentRouteName();
  if (in_array($current_route, $route_names)) {
    return 'show';
  }
}

function createActivity($user_id, $activity_type, $activity_title, $url)
{
  $activityEntry = new Activity();
  $activityEntry->user_id = $user_id;
  $activityEntry->activity_type = $activity_type;
  $activityEntry->activity_title = $activity_title;
  $activityEntry->url = $url;
  $activityEntry->save();
}

function percentageChange($old, $new, int $precision = 1, $nb = false)
{
  if ($old == 0) {
    $old++;
    $new++;
  }

  $change = min(round((($new - $old) / $old) * 100, $precision), 100);

  if ($nb) {
    return $change;
  }

  if ($change < 0) {
    return '<span class="badge bg-label-danger rounded-pill">' . $change . '%</span>';
  } else {
    return '<span class="badge bg-label-success rounded-pill">+' . $change . '%</span>';
  }
}

function getGatewayArray()
{
  return array(
    "stripe",
    "paypal",
    "flutterwave",
    "paytm",
    "paystack",
    "mollie",
    "razorpay",
    "iyzyco",
  );
}

function currency()
{
  return Currency::where('id', getSetting('default_currency'))->first();
}

function getSubscription()
{
  return Subscriptions::where('stripe_status', 'active')->orWhere('stripe_status', 'on_trial')->where('user_id', Auth::user()->id)->first();
}

function getSubscriptionStatus()
{
  return PaymentController::getSubscriptionStatus();
}

function getSubscriptionName()
{
  return PaymentPlans::where('id', getSubscription()->name)->first()->name;
}

function getSubscriptionDaysLeft()
{
  $activeSub = getSubscription();

  if ($activeSub != null) {
    $activeSub->ends_at = Carbon::now();
    return Carbon::now()->diffInDays(Carbon::parse($activeSub->ends_at));
  }
}

function isFavorited($ai_id)
{
  $state = PromptFavorite::where('user_id', Auth::id())->where('prompt_id', $ai_id)->exists();
  return $state;
}

function emojiFlag(string $countryCode): ?string
{
  if (!preg_match('/^[a-zA-Z]{2}$/', $countryCode)) {
    return null;
  }
  $emojiFlag = (string)preg_replace_callback(
    '/./',
    static fn(array $letter) => mb_chr(ord($letter[0]) % 32 + 0x1F1E5),
    strtoupper($countryCode)
  );

  return $emojiFlag;
}

function countWords($text)
{
  $encoding = mb_detect_encoding($text);

  if ($encoding === 'UTF-8') {
    $words = preg_match_all('/\p{Han}|\p{L}+|\p{N}+/u', $text);
  } else {
    $words = str_word_count($text, 0, $encoding);
  }

  return (int)$words;
}

function getRand($arr = '')
{
  if (empty($arr)) {
    return '';
  }

  $words = explode(",", $arr);

  $word = Arr::random($words);

  return $word;
}

function getRandSetting(string $arr = '')
{
  if (empty($arr)) {
    return '';
  }
  $array = getSetting($arr);
  $words = explode(",", $array);

  $word = Arr::random($words);

  return $word;
}
