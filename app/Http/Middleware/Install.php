<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Install
{
  /**
   * Handle an incoming request.
   *
   * @param Request $request
   * @param Closure $next
   * @return mixed
   */
  public function handle(Request $request, Closure $next)
  {
    if (file_exists(storage_path('installed'))) {
      return $next($request);
    } else {
      return redirect()->route('LaravelInstaller::welcome');
    }
  }
}
