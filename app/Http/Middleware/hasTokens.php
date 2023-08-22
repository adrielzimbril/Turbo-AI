<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class hasTokens
{
  /**
   * Handle an incoming request.
   *
   * @param Closure(Request): (Response) $next
   */
  public function handle(Request $request, Closure $next): Response
  {
    if ($request->route('slug') == 'ai_image_generator') {
      if (Auth::user()->remaining_images == -1 or Auth::user()->remaining_images > 0) {
        return $next($request);
      }
    } else {
      if (Auth::user()->remaining_words == -1 or Auth::user()->remaining_words > 0) {
        return $next($request);
      }
    }

    return back()->with(['message' => 'Insufficient credits to create.', 'type' => 'error']);
  }
}
