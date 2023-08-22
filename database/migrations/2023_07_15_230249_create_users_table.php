<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('surname');
            $table->string('email')->unique('users_email_unique');
            $table->string('phone')->nullable();
            $table->string('type')->default('user');
            $table->string('password');
            $table->rememberToken();
            $table->string('avatar')->default('media/img/defaults/avatar.png');
            $table->string('company_name')->nullable();
            $table->string('company_website')->nullable();
            $table->string('country')->nullable();
            $table->text('address')->nullable();
            $table->string('postal')->nullable();
            $table->boolean('status')->default(1);
            $table->integer('remaining_words')->default(0);
            $table->integer('remaining_images')->default(0);
            $table->date('last_seen')->nullable();
            $table->string('github_id')->nullable();
            $table->string('github_token')->nullable();
            $table->string('github_refresh_token')->nullable();
            $table->string('google_id')->nullable();
            $table->string('google_token')->nullable();
            $table->string('google_refresh_token')->nullable();
            $table->string('facebook_id')->nullable();
            $table->string('facebook_token')->nullable();
            $table->string('twitter_id')->nullable();
            $table->string('twitter_token')->nullable();
            $table->string('affiliate_id')->nullable();
            $table->string('affiliate_code')->nullable();
            $table->string('affiliate_earnings')->nullable();
            $table->string('subscription_id')->nullable()->index('users_stripe_id_index');
            $table->string('stripe_id')->nullable();
            $table->string('pm_type')->nullable();
            $table->string('pm_last_four', 4)->nullable();
            $table->timestamp('trial_ends_at')->nullable();
            $table->text('password_reset_code')->nullable();
            $table->text('email_confirmation_code')->nullable();
            $table->boolean('email_confirmed')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
