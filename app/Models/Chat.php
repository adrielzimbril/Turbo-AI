<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
  use HasFactory;

  public function user()
  {
    return $this->belongsTo(User::class);
  }

  public function category()
  {
    return $this->belongsTo(ChatCategory::class, 'chat_category_id', 'id');
  }
  
  public function messages()
  {
    return $this->hasMany(ChatMessage::class);
  }
}
