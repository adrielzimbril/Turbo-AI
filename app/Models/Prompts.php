<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prompts extends Model
{
  use HasFactory;

  public function category()
  {
    return $this->belongsTo(PromptCategory::class);
  }
}
