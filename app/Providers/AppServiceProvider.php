<?php

namespace App\Providers;

use App\Models\PromptCategory;
use App\Models\Prompts;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Throwable;

class AppServiceProvider extends ServiceProvider
{
  /**
   * Register any application services.
   */
  public function register(): void
  {
  }

  /**
   * Bootstrap any application services.
   */
  public function boot(): void
  {
    try {
      DB::connection()->getPdo();
      $db_set = 1;
    } catch (Throwable $e) {
      $db_set = 2;
    }

    if ($db_set == 1) {
      //Force SSL HTTPS on all AJAX Requests
      if ($this->app->environment('production')) {
        URL::forceScheme('https');
      }

      app()->useLangPath(base_path('lang'));
      if (Schema::hasTable('migrations')) {
        $prompts = Prompts::orderBy('name', 'asc')->where('active', 1)->get();
        View::share('aiWriters', $prompts);
        view()->composer('*', function ($view) {
          if (Auth::check()) {
            $ai = Prompts::all();
            View::share('ai', $ai);
            $filters = PromptCategory::get();
            View::share('filters', $filters);
          }
        });

        Config::set(['mail.mailers' => ['smtp' =>
          [
            'transport' => 'smtp',
            'host' => getSetting('smtp_host') ?? env('MAIL_HOST'),
            'port' => (int)getSetting('smtp_port') ?? (int)env('MAIL_PORT'),
            'encryption' => getSetting('smtp_encryption') ?? env('MAIL_ENCRYPTION'),
            'username' => getSetting('smtp_username') ?? env('MAIL_USERNAME'),
            'password' => getSetting('smtp_password') ?? env('MAIL_PASSWORD')],
          'timeout' => null,
          'local_domain' => env('MAIL_EHLO_DOMAIN'),
          'auth_mode' => null,
          'verify_peer' => false,
          'verify_peer_name' => false,
        ]]);

        Config::set(
          ['mail.from' => ['address' => getSetting('smtp_email') ?? env('MAIL_FROM_ADDRESS'), 'name' => getSetting('smtp_sender_name') ?? env('MAIL_FROM_NAME')]]
        );

        $jobs = DB::table('jobs')->where('id', '>', 0)->get();
        if (count($jobs) > 0) {
          Artisan::call("queue:work --once");
        }
      }
    }
  }
}
