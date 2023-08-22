<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'affiliate_id' => NULL,
                'affiliate_code' => 'MCHIAAGFJZHG',
                'affiliate_earnings' => NULL,
                'name' => 'John',
                'surname' => 'Doe',
                'email' => 'turboai@oricodes.com',
                'phone' => '12345678',
                'type' => 'admin',
                'password' => '$2y$10$jHvM6MkWeDk6BJvDXGlr7ecN0r5hDH6pE2KTA1tVwHuuwEdCSZ.GK',
                'remember_token' => NULL,
                'avatar' => 'media/img/defaults/avatar.png',
                'company_name' => NULL,
                'company_website' => NULL,
                'country' => NULL,
                'address' => NULL,
                'postal' => NULL,
                'status' => 1,
                'remaining_words' => 200000,
                'remaining_images' => 200000,
                'last_seen' => NULL,
                'github_id' => NULL,
                'github_token' => NULL,
                'github_refresh_token' => NULL,
                'google_id' => NULL,
                'google_token' => NULL,
                'google_refresh_token' => NULL,
                'facebook_id' => NULL,
                'facebook_token' => NULL,
                'twitter_id' => NULL,
                'twitter_token' => NULL,
                'subscription_id' => NULL,
                'stripe_id' => NULL,
                'pm_type' => NULL,
                'pm_last_four' => NULL,
                'trial_ends_at' => NULL,
                'password_reset_code' => NULL,
                'email_confirmation_code' => NULL,
                'email_confirmed' => 0,
            ),
        ));
    }
}