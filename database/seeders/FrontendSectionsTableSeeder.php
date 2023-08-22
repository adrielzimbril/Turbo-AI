<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FrontendSectionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('frontend_sections')->delete();
        
        \DB::table('frontend_sections')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'features_active',
                'value' => '1',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'features_heading',
                'value' => 'The Best Features',
            ),
            2 => 
            array (
                'id' => 4,
                'name' => 'usecases_active',
                'value' => '1',
            ),
            3 => 
            array (
                'id' => 5,
                'name' => 'who_is_for_active',
                'value' => '1',
            ),
            4 => 
            array (
                'id' => 6,
                'name' => 'prompts_active',
                'value' => '1',
            ),
            5 => 
            array (
                'id' => 8,
                'name' => 'prompts_heading',
                'value' => 'Powerfull AI Writer',
            ),
            6 => 
            array (
                'id' => 9,
                'name' => 'prompts_description',
                'value' => 'Our AI is trained on top-performing copy from renowned brands.',
            ),
            7 => 
            array (
                'id' => 11,
                'name' => 'tools_active',
                'value' => '1',
            ),
            8 => 
            array (
                'id' => 12,
                'name' => 'tools_title',
                'value' => 'Magic Tools.',
            ),
            9 => 
            array (
                'id' => 13,
                'name' => 'tools_description',
                'value' => NULL,
            ),
            10 => 
            array (
                'id' => 14,
                'name' => 'how_it_works_active',
                'value' => '1',
            ),
            11 => 
            array (
                'id' => 15,
                'name' => 'how_it_works_title',
                'value' => 'So, how it works?',
            ),
            12 => 
            array (
                'id' => 16,
                'name' => 'testimonials_active',
                'value' => '1',
            ),
            13 => 
            array (
                'id' => 17,
                'name' => 'testimonials_title',
                'value' => '100% Satisfied Customers',
            ),
            14 => 
            array (
                'id' => 18,
                'name' => 'testimonials_heading',
                'value' => 'Testimonials',
            ),
            15 => 
            array (
                'id' => 20,
                'name' => 'pricing_active',
                'value' => '1',
            ),
            16 => 
            array (
                'id' => 21,
                'name' => 'pricing_title',
                'value' => 'Simple, transparent pricing',
            ),
            17 => 
            array (
                'id' => 22,
                'name' => 'pricing_description',
                'value' => 'No Contracts. No surorise fees.
Try out all features to determine what works best for you.',
            ),
            18 => 
            array (
                'id' => 23,
                'name' => 'pricing_save_percent',
                'value' => 'Save 20%',
            ),
            19 => 
            array (
                'id' => 24,
                'name' => 'faq_active',
                'value' => '1',
            ),
            20 => 
            array (
                'id' => 25,
                'name' => 'faq_title',
                'value' => 'Frequently asked questions',
            ),
            21 => 
            array (
                'id' => 26,
                'name' => 'faq_description',
                'value' => 'Answer common questions about your AI content generator, such as',
            ),
            22 => 
            array (
                'id' => 27,
                'name' => 'faq_heading',
                'value' => 'Have a question?',
            ),
            23 => 
            array (
                'id' => 31,
                'name' => 'hero_subtitle',
                'value' => 'With an AI-powered writer.',
            ),
            24 => 
            array (
                'id' => 32,
                'name' => 'hero_title',
                'value' => 'Let AI write your content in seconds.',
            ),
            25 => 
            array (
                'id' => 33,
                'name' => 'hero_description',
                'value' => 'All-in-one platform to generate AI content and start making money in minutes.',
            ),
            26 => 
            array (
                'id' => 35,
                'name' => 'hero_button',
                'value' => 'Join Us',
            ),
            27 => 
            array (
                'id' => 36,
                'name' => 'hero_link',
                'value' => NULL,
            ),
            28 => 
            array (
                'id' => 41,
                'name' => 'footer_link',
                'value' => 'https://codecanyon.net/item/magicai-openai-content-text-image-chat-code-generator-as-saas/45408109',
            ),
            29 => 
            array (
                'id' => 42,
                'name' => 'footer_link_text',
                'value' => '',
            ),
            30 => 
            array (
                'id' => 44,
                'name' => 'frontend_pricing_section',
                'value' => '1',
            ),
            31 => 
            array (
                'id' => 45,
                'name' => 'frontend_custom_templates_section',
                'value' => '1',
            ),
            32 => 
            array (
                'id' => 46,
                'name' => 'partners_active',
                'value' => '1',
            ),
            33 => 
            array (
                'id' => 50,
                'name' => 'footer_facebook',
                'value' => '1',
            ),
            34 => 
            array (
                'id' => 51,
                'name' => 'footer_twitter',
                'value' => '1',
            ),
            35 => 
            array (
                'id' => 52,
                'name' => 'footer_instagram',
                'value' => '1',
            ),
            36 => 
            array (
                'id' => 53,
                'name' => 'hero_tag',
                'value' => 'TRUSTED AI GENERATOR',
            ),
            37 => 
            array (
                'id' => 54,
                'name' => 'hero_illustration',
                'value' => 'media/img/illustrations/app.main.png',
            ),
            38 => 
            array (
                'id' => 55,
                'name' => 'chats_slider_active',
                'value' => '1',
            ),
            39 => 
            array (
                'id' => 56,
                'name' => 'usecases_heading',
                'value' => 'Generate in seconds using AI',
            ),
            40 => 
            array (
                'id' => 57,
                'name' => 'how_it_works_description',
                'value' => 'Discover how our AI content generator works its magic to create high-quality, engaging content for you.',
            ),
            41 => 
            array (
                'id' => 58,
                'name' => 'how_it_works_heading',
                'value' => 'Easy To Use',
            ),
            42 => 
            array (
                'id' => 59,
                'name' => 'image_slider_heading',
                'value' => 'Beautiful Image Generator',
            ),
            43 => 
            array (
                'id' => 60,
                'name' => 'image_slider_active',
                'value' => '1
',
            ),
            44 => 
            array (
                'id' => 61,
                'name' => 'pricing_heading',
                'value' => 'Pricing',
            ),
            45 => 
            array (
                'id' => 62,
                'name' => 'try_it_active',
                'value' => '1',
            ),
            46 => 
            array (
                'id' => 63,
                'name' => 'try_it_title',
                'value' => 'Try it for Free!',
            ),
            47 => 
            array (
                'id' => 64,
                'name' => 'try_it_description',
                'value' => 'Unleash the untapped potential of your business by harnessing the power of AI to generate revenue on your behalf.
Sign up for Exclusive Access!',
            ),
            48 => 
            array (
                'id' => 65,
                'name' => 'try_it_link',
                'value' => NULL,
            ),
            49 => 
            array (
                'id' => 66,
                'name' => 'try_it_button',
                'value' => NULL,
            ),
            50 => 
            array (
                'id' => 67,
                'name' => 'features_link',
                'value' => NULL,
            ),
            51 => 
            array (
                'id' => 68,
                'name' => 'features_button',
                'value' => NULL,
            ),
            52 => 
            array (
                'id' => 69,
                'name' => 'hero_active',
                'value' => '1',
            ),
            53 => 
            array (
                'id' => 70,
                'name' => 'pricing_monthly_img',
                'value' => 'media/img/illustrations/pri-1.png',
            ),
            54 => 
            array (
                'id' => 71,
                'name' => 'pricing_onetime_img',
                'value' => 'media/img/illustrations/pri-2.png',
            ),
            55 => 
            array (
                'id' => 72,
                'name' => 'pricing_onetime_text',
                'value' => 'For content marketers, bloggers, freelancers & startups',
            ),
            56 => 
            array (
                'id' => 73,
                'name' => 'pricing_monthly_text',
                'value' => 'Access to AI writer features to help you.',
            ),
            57 => 
            array (
                'id' => 74,
                'name' => 'banner_title',
                'value' => NULL,
            ),
            58 => 
            array (
                'id' => 75,
                'name' => 'banner_content',
                'value' => NULL,
            ),
            59 => 
            array (
                'id' => 76,
                'name' => 'redirect_url',
                'value' => NULL,
            ),
            60 => 
            array (
                'id' => 77,
                'name' => 'custom_js',
                'value' => NULL,
            ),
            61 => 
            array (
                'id' => 78,
                'name' => 'custom_css',
                'value' => NULL,
            ),
            62 => 
            array (
                'id' => 79,
                'name' => 'frontend_template',
                'value' => '1',
            ),
            63 => 
            array (
                'id' => 80,
                'name' => 'banner_active',
                'value' => '1',
            ),
        ));
        
        
    }
}