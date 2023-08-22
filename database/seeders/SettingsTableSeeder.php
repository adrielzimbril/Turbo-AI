<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{

  /**
   * Auto generated seed file
   *
   * @return void
   */
  public function run()
  {
    DB::table('settings')->delete();

    DB::table('settings')->insert(array(
      0 =>
        array(
          'name' => 'site_name',
          'value' => 'Turbo AI',
        ),
      1 =>
        array(
          'name' => 'site_url',
          'value' => 'https://turboai.oricodes.com',
        ),
      2 =>
        array(
          'name' => 'site_email',
          'value' => 'turboai@oricodes.com',
        ),
      3 =>
        array(
          'name' => 'google_analytics_active',
          'value' => '0',
        ),
      4 =>
        array(
          'name' => 'google_analytics_code',
          'value' => NULL,
        ),
      5 =>
        array(
          'name' => 'script_version',
          'value' => '1.1',
        ),
      6 =>
        array(
          'name' => 'free_plan_images',
          'value' => '2000',
        ),
      7 =>
        array(
          'name' => 'meta_title',
          'value' => 'Turbo AI',
        ),
      8 =>
        array(
          'name' => 'meta_description',
          'value' => NULL,
        ),
      9 =>
        array(
          'name' => 'meta_keywords',
          'value' => NULL,
        ),
      10 =>
        array(
          'name' => 'facebook_active',
          'value' => '1',
        ),
      11 =>
        array(
          'name' => 'facebook_api_key',
          'value' => NULL,
        ),
      12 =>
        array(
          'name' => 'facebook_api_secret',
          'value' => NULL,
        ),
      13 =>
        array(
          'name' => 'facebook_redirect_url',
          'value' => NULL,
        ),
      14 =>
        array(
          'name' => 'github_active',
          'value' => '1',
        ),
      15 =>
        array(
          'name' => 'github_api_key',
          'value' => NULL,
        ),
      16 =>
        array(
          'name' => 'github_api_secret',
          'value' => NULL,
        ),
      17 =>
        array(
          'name' => 'github_redirect_url',
          'value' => NULL,
        ),
      18 =>
        array(
          'name' => 'google_active',
          'value' => '1',
        ),
      19 =>
        array(
          'name' => 'google_api_key',
          'value' => NULL,
        ),
      20 =>
        array(
          'name' => 'google_api_secret',
          'value' => NULL,
        ),
      21 =>
        array(
          'name' => 'google_redirect_url',
          'value' => NULL,
        ),
      22 =>
        array(
          'name' => 'twitter_active',
          'value' => '1',
        ),
      23 =>
        array(
          'name' => 'twitter_api_key',
          'value' => NULL,
        ),
      24 =>
        array(
          'name' => 'twitter_api_secret',
          'value' => NULL,
        ),
      25 =>
        array(
          'name' => 'twitter_redirect_url',
          'value' => NULL,
        ),
      26 =>
        array(
          'name' => 'register_active',
          'value' => '1',
        ),
      27 =>
        array(
          'name' => 'default_country',
          'value' => 'United States',
        ),
      28 =>
        array(
          'name' => 'invoice_currency',
          'value' => NULL,
        ),
      29 =>
        array(
          'name' => 'invoice_name',
          'value' => NULL,
        ),
      30 =>
        array(
          'name' => 'invoice_website',
          'value' => NULL,
        ),
      31 =>
        array(
          'name' => 'invoice_address',
          'value' => NULL,
        ),
      32 =>
        array(
          'name' => 'invoice_city',
          'value' => NULL,
        ),
      33 =>
        array(
          'name' => 'invoice_state',
          'value' => NULL,
        ),
      34 =>
        array(
          'name' => 'invoice_postal',
          'value' => NULL,
        ),
      35 =>
        array(
          'name' => 'invoice_country',
          'value' => NULL,
        ),
      36 =>
        array(
          'name' => 'invoice_phone',
          'value' => NULL,
        ),
      37 =>
        array(
          'name' => 'invoice_vat',
          'value' => NULL,
        ),
      38 =>
        array(
          'name' => 'default_currency',
          'value' => '2',
        ),
      39 =>
        array(
          'name' => 'tax_rate',
          'value' => NULL,
        ),
      40 =>
        array(
          'name' => 'bank_transfer_active',
          'value' => '0',
        ),
      41 =>
        array(
          'name' => 'bank_transfer_instructions',
          'value' => NULL,
        ),
      42 =>
        array(
          'name' => 'bank_transfer_informations',
          'value' => NULL,
        ),
      43 =>
        array(
          'name' => 'smtp_host',
          'value' => NULL,
        ),
      44 =>
        array(
          'name' => 'smtp_port',
          'value' => NULL,
        ),
      45 =>
        array(
          'name' => 'smtp_username',
          'value' => NULL,
        ),
      46 =>
        array(
          'name' => 'smtp_password',
          'value' => NULL,
        ),
      47 =>
        array(
          'name' => 'smtp_email',
          'value' => NULL,
        ),
      48 =>
        array(
          'name' => 'smtp_sender_name',
          'value' => NULL,
        ),
      49 =>
        array(
          'name' => 'smtp_encryption',
          'value' => 'TLS',
        ),
      50 =>
        array(
          'name' => 'openai_api_secret',
          'value' => '',
        ),
      51 =>
        array(
          'name' => 'openai_default_model',
          'value' => 'gpt-3.5-turbo',
        ),
      52 =>
        array(
          'name' => 'openai_default_language',
          'value' => 'en-US',
        ),
      53 =>
        array(
          'name' => 'openai_default_tone_of_voice',
          'value' => 'Sarcastic',
        ),
      54 =>
        array(
          'name' => 'openai_default_creativity',
          'value' => '0.5',
        ),
      55 =>
        array(
          'name' => 'openai_max_input_length',
          'value' => '400',
        ),
      56 =>
        array(
          'name' => 'openai_max_output_length',
          'value' => '2000',
        ),
      57 =>
        array(
          'name' => 'affiliate_minimum_withdrawal',
          'value' => '10',
        ),
      58 =>
        array(
          'name' => 'affiliate_commission_percentage',
          'value' => '10',
        ),
      59 =>
        array(
          'name' => 'logo_dark',
          'value' => 'media/img/logo/Turbo AI - 40H.png',
        ),
      60 =>
        array(
          'name' => 'logo',
          'value' => 'media/img/logo/Logo - 40H.png',
        ),
      61 =>
        array(
          'name' => 'favicon',
          'value' => 'media/img/favicon/favicon.ico',
        ),
      62 =>
        array(
          'name' => 'feature_ai_writer',
          'value' => '1',
        ),
      63 =>
        array(
          'name' => 'feature_ai_image',
          'value' => '1',
        ),
      64 =>
        array(
          'name' => 'feature_ai_chat',
          'value' => '1',
        ),
      65 =>
        array(
          'name' => 'feature_ai_code',
          'value' => '1',
        ),
      66 =>
        array(
          'name' => 'feature_ai_speech_to_text',
          'value' => '1',
        ),
      68 =>
        array(
          'name' => 'login_without_confirmation',
          'value' => NULL,
        ),
      69 =>
        array(
          'name' => 'enable_paypal',
          'value' => '1',
        ),
      70 =>
        array(
          'name' => 'enable_stripe',
          'value' => '1',
        ),
      71 =>
        array(
          'name' => 'enable_razorpay',
          'value' => '0',
        ),
      72 =>
        array(
          'name' => 'enable_iyzyco',
          'value' => '0',
        ),
      73 =>
        array(
          'name' => 'enable_flutterwave',
          'value' => '0',
        ),
      74 =>
        array(
          'name' => 'enable_paystack',
          'value' => '0',
        ),
      75 =>
        array(
          'name' => 'enable_paytm',
          'value' => '0',
        ),
      76 =>
        array(
          'name' => 'free_plan_words',
          'value' => '2000',
        ),
      77 =>
        array(
          'name' => 'image_processor',
          'value' => 'dall-e',
        ),
      78 =>
        array(
          'name' => 'stable_diffusion_key',
          'value' => NULL,
        ),
      79 =>
        array(
          'name' => 'stable_diffusion_engine',
          'value' => '',
        ),
    ));
  }
}
