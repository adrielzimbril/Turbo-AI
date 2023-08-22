<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller
{
  /**
   * Display the login view.
   */
  public function create()
  {
    return view('backend.auth.login');
  }

  /**
   * Handle an incoming authentication request.
   */
  public function store(LoginRequest $request)
  {
    if (getSetting('login_without_confirmation') == 0) {
      $user = User::where('email', $request->email)->first();
      if(!$user) return response()->json(['type' => 'error', 'errors' => 'These credentials do not match our records.'], 401);
      if ($user->email_confirmed != 1 and $user->type != 'admin') {
        $data = array(
          'errors' => [__('We have sent you an email for account confirmation. Please confirm your account to continue. Please also check your spam folder')],
          'type' => 'confirmation',
        );
        return response()->json($data, 401);
      }
    }

    $request->authenticate();

    $request->session()->regenerate();

    return redirect()->intended(RouteServiceProvider::HOME);
  }

  /**
   * Destroy an authenticated session.
   */
  public function destroy(Request $request): RedirectResponse
  {
    Auth::guard('web')->logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect('/');
  }
}
