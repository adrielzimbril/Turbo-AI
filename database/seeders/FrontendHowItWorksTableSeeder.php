<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FrontendHowItWorksTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('frontend_how_it_works')->delete();
        
        \DB::table('frontend_how_it_works')->insert(array (
            0 => 
            array (
                'order' => 1,
                'title' => 'Simple Process',
                'content' => 'Our AI-powered content generator follows a simple three-step process: Enter your topic, select your style, and receive compelling content in seconds.',
                'image' => 'media/img/illustrations/1.png',
            ),
            1 => 
            array (
                'order' => 2,
                'title' => 'AI Magic at Work',
                'content' => 'Experience the magic of our AI content generator with just three steps: Input your topic, customize the style, and watch as it creates captivating content effortlessly.',
                'image' => 'media/img/illustrations/2.png',
            ),
            2 => 
            array (
                'order' => 3,
                'title' => 'Effortless Content Creation',
                'content' => 'Create content effortlessly with our AI-powered generator: Enter your topic, choose your style, and receive high-quality content in no time.',
                'image' => 'media/img/illustrations/3.png',
            ),
        ));
        
        
    }
}