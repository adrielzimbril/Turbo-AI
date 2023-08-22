<?php

namespace App\Jobs;

use App\Mail\ConfirmationEmail;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendConfirmationEmail implements ShouldQueue
{
  use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

  protected $user;

  /**
   * Create a new job instance.
   */
  public function __construct(User $user)
  {
    $this->user = $user;
  }

  /**
   * Execute the job.
   */
  public function handle()
  {
    Mail::to($this->user->email)->send(new ConfirmationEmail($this->user));
  }
}
