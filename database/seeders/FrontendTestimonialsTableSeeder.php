<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FrontendTestimonialsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('frontend_testimonials')->delete();
        
        \DB::table('frontend_testimonials')->insert(array (
            0 => 
            array (
                'id' => 1,
                'avatar' => 'frontend/img/testimonials/1.png',
                'name' => 'Jessica R.',
                'work' => 'Social Media Influencer',
                'content' => 'The AI-generated content seamlessly integrates with my social media platforms, casting a spell of consistency across my digital presence. It has given me the freedom to focus on what I love most - creating meaningful connections.',
            ),
            1 => 
            array (
                'id' => 2,
                'avatar' => 'frontend/img/testimonials/3.png',
                'name' => 'Sarah M.',
                'work' => 'Influencer',
                'content' => 'The AI content generator is like having a powerful spellbook in my hands. It conjures up captivating content that engages my audience and saves me countless hours. Truly magical!',
            ),
            2 => 
            array (
                'id' => 3,
                'avatar' => 'frontend/img/testimonials/2.png',
                'name' => 'Mark T.',
                'work' => 'Blogger',
                'content' => 'I was skeptical at first, but the AI content generator exceeded my expectations. It understands my brand\'s essence and creates content that resonates with my audience. It\'s a game-changer!',
            ),
        ));
        
        
    }
}