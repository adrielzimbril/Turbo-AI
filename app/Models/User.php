<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Laravel\Cashier\Billable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
  use HasApiTokens, HasFactory, Notifiable, Billable;

  protected $fillable = [
    'name',
    'surname',
    'email',
    'password',
    'affiliate_id',
    'affiliate_code',
    'remaining_words',
    'remaining_images',
    'email_confirmation_code',
    'email_confirmed',
    'password_reset_code',
  ];

  protected $hidden = [
    'password',
    'remember_token',
  ];

  protected $casts = [
    'email_verified_at' => 'datetime',
  ];

  public function fullName()
  {
    return $this->name . ' ' . $this->surname;
  }

  public function usage()
  {
    return $this->hasMany(PromptUsage::class);
  }

  public function orders()
  {
    return $this->hasMany(SubscriptionHistory::class);
  }

  public function plan()
  {
    return $this->hasMany(SubscriptionHistory::class)->where('type', 'subscription')->orderBy('created_at', 'desc')->first();
  }

  public function activePlan()
  {
    $subscription = Subscriptions::where('stripe_status', 'active')->orWhere('stripe_status', 'on_trial')->Where('user_id', Auth::user()->id)->first();
    if ($subscription != null) {
      $plan = PaymentPlans::where('id', $subscription->plan_id)->first();
      if ($plan == null) {
        return null;
      }
      $difference = $subscription->updated_at->diffInDays(Carbon::now());
      if ($plan->frequency == 'monthly') {
        if ($difference < 31) {
          return $plan;
        }
      } elseif ($plan->frequency == 'yearly') {
        if ($difference < 365) {
          return $plan;
        }
      }
    } else {
      return null;
    }
  }

  public function favoriteAI()
  {
    return $this->belongsToMany(Prompts::class, 'prompt_favorites', 'user_id', 'prompt_id');
  }

  public function affiliates()
  {
    return $this->hasMany(User::class, 'affiliate_id', 'id');
  }

  public function affiliateOf()
  {
    return $this->belongsTo(User::class, 'affiliate_id', 'id');
  }

  public function withdrawals()
  {
    return $this->hasMany(UserAffiliate::class);
  }

  public function openaiChat()
  {
    return $this->hasMany(Chat::class);
  }

  public function getAvatar()
  {
    if ($this->avatar == null) {
      return '<span class="avatar">' . Str::upper(substr($this->name, 0, 1)) . Str::upper(substr($this->surname, 0, 1)) . '</span>';
    } else {
      $avatar = $this->avatar;
      if (!str_contains($avatar, 'http') || !str_contains($avatar, 'https')) {
        $avatar = '/' . $avatar;
      }
      return '$avatar';
    }
  }
}
