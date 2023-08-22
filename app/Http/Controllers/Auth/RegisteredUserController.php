<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules;
use Illuminate\Validation\ValidationException;

class RegisteredUserController extends Controller
{
  /**
   * Handle an incoming registration request.
   *
   * @throws ValidationException
   */
  public function store(Request $request): JsonResponse
  {
    $request->validate([
      'name' => ['required', 'string', 'max:255'],
      'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
      'password' => ['required', 'confirmed', Rules\Password::defaults()],
    ]);

    $user = User::create([
      'name' => $request->name,
      'email' => $request->email,
      'remaining_words' => 5000,
      'remaining_images' => 200,
      'password' => Hash::make($request->password),
      'email_verification_code' => Str::random(67),
      'affiliate_code' => Str::upper(Str::random(19)),
    ]);

    if (getSetting('login_without_confirmation ') == 1) {
      Auth::login($user);
    }

    return response()->json('OK');
  }

  /**
   * Display the registration view.
   */
  public function create(): \Illuminate\Contracts\Foundation\Application|Factory|View|Application
  {
    return view('backend.auth.register');
  }
}
