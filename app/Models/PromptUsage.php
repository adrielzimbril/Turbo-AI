<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PromptUsage extends Model
{
  use HasFactory;

  public function content()
  {
    return $this->belongsTo(Prompts::class, 'prompt_id', 'id');
  }
}
