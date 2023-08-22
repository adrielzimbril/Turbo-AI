<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Jobs\SendConfirmationEmail;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules\Password;
use Laravel\Socialite\Facades\Socialite;

class AuthenticationController extends Controller
{
  public function githubCallback()
  {
    $githubUser = Socialite::driver('github')->user();
    $checkUser = User::where('email', $githubUser->getEmail())->exists();
    if ($checkUser) {
      $user = User::where('email', $githubUser->getEmail())->first();
      $user->github_token = $githubUser->token;
      $user->github_refresh_token = $githubUser->refreshToken;
      $user->avatar = $githubUser->getAvatar();
      $user->save();
    } else {
      $user = User::updateOrCreate([
        'github_id' => $githubUser->id,
      ], [
        'name' => $githubUser->getName() ?? $githubUser->getNickname(),
        'surname' => '',
        'email' => $githubUser->getEmail(),
        'github_token' => $githubUser->token,
        'github_refresh_token' => $githubUser->refreshToken,
        'avatar' => $githubUser->getAvatar(),
        'password' => Hash::make(Str::random(12)),
      ]);
    }

    Auth::login($user);

    return redirect(route('dashboard.user.index'));
  }

  public function login(LoginRequest $request)
  {
    $request->authenticate();

    $request->session()->regenerate();

    return redirect()->intended(RouteServiceProvider::HOME);
  }

  public function googleCallback()
  {
    $googleUser = Socialite::driver('google')->user();
    $checkUser = User::where('email', $googleUser->getEmail())->exists();

    $nameParts = explode(' ', $googleUser->getName());
    $name = $nameParts[0] ?? '';
    $surname = $nameParts[1] ?? '';

    if ($checkUser) {
      $user = User::where('email', $googleUser->getEmail())->first();
      $user->google_token = $googleUser->token;
      $user->google_refresh_token = $googleUser->refreshToken;
      $user->avatar = $googleUser->getAvatar();
      $user->save();
    } else {
      $user = User::updateOrCreate([
        'google_id' => $googleUser->id,
      ], [
        'name' => $name,
        'surname' => $surname,
        'email' => $googleUser->getEmail(),
        'google_token' => $googleUser->token,
        'google_refresh_token' => $googleUser->refreshToken,
        'avatar' => $googleUser->getAvatar(),
        'password' => Hash::make(Str::random(12)),
      ]);
    }

    Auth::login($user);

    return redirect(route('dashboard.user.index'));
  }

  public function facebookCallback()
  {
    $facebookUser = Socialite::driver('facebook')->user();
    $checkUser = User::where('email', $facebookUser->getEmail())->exists();

    $nameParts = explode(' ', $facebookUser->getName());
    $name = $nameParts[0] ?? '';
    $surname = $nameParts[1] ?? '';

    if ($checkUser) {
      $user = User::where('email', $facebookUser->getEmail())->first();
      $user->facebook_token = $facebookUser->token;
      $user->avatar = $facebookUser->getAvatar();
      $user->save();
    } else {
      $user = User::updateOrCreate([
        'facebook_id' => $facebookUser->id,
      ], [
        'name' => $name,
        'surname' => $surname,
        'email' => $facebookUser->getEmail(),
        'facebook_token' => $facebookUser->token,
        'avatar' => $facebookUser->getAvatar(),
        'password' => Hash::make(Str::random(12)),
      ]);
    }

    Auth::login($user);

    return redirect(route('dashboard.user.index'));
  }

  public function registerCreate()
  {
    return view('backend.auth.register');
  }

  public function registerStore(Request $request)
  {
    $request->validate([
      'name' => ['required', 'string', 'max:255'],
      'surname' => ['required', 'string', 'max:255'],
      'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
      'password' => ['required', 'confirmed', Password::defaults()],
    ]);

    $affiliate = null;
    if ($request->affiliate_code != null) {
      $affUser = User::where('affiliate_code', $request->affiliate_code)->first();
      if ($affUser != null) {
        $affiliate = $affUser->id;
      }
    }

    if (env('APP_STATUS') == 'Demo') {
      $user = User::create([
        'name' => $request->name,
        'surname' => $request->surname,
        'email' => $request->email,
        'remaining_words' => 4000,
        'remaining_images' => 100,
        'password' => Hash::make($request->password),
        'email_confirmation_code' => Str::random(67),
        'email_verification_code' => Str::random(67),
        'affiliate_id' => $affiliate,
        'affiliate_code' => Str::upper(Str::random(12)),
      ]);
    } else {
      $user = User::create([
        'name' => $request->name,
        'surname' => $request->surname,
        'email' => $request->email,
        'remaining_words' => getSetting('free_plan_words'),
        'remaining_images' => getSetting('free_plan_images'),
        'password' => Hash::make($request->password),
        'email_confirmation_code' => Str::random(67),
        'email_verification_code' => Str::random(67),
        'affiliate_id' => $affiliate,
        'affiliate_code' => Str::upper(Str::random(12)),
      ]);
    }

    dispatch(new SendConfirmationEmail($user));

    if (getSetting('login_without_confirmation') == 1) {
      Auth::login($user);
    } else {
      $data = array(
        'errors' => [__('We have sent you an email for account confirmation. Please confirm your account to continue.')],
        'type' => 'confirmation',
      );
      return response()->json($data, 401);
    }

    return response()->json('OK', 200);
  }

  public function PasswordResetCreate()
  {
    return view('backend.auth.password_reset');
  }
}
