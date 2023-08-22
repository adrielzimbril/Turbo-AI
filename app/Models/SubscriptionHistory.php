<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubscriptionHistory extends Model
{
  use HasFactory;

  public function plan()
  {
    return $this->belongsTo(PaymentPlans::class);
  }

  public function user()
  {
    return $this->belongsTo(User::class);
  }
}
