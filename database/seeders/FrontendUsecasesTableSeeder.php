<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FrontendUsecasesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('frontend_usecases')->delete();
        
        \DB::table('frontend_usecases')->insert(array (
            0 => 
            array (
                'tab_title' => 'AI Writer',
                'title' => NULL,
                'content' => NULL,
                'content_sub' => NULL,
                'image' => 'media/img/illustrations/writer.png',
            ),
            1 => 
            array (
                'tab_title' => 'AI Image Generator',
                'title' => NULL,
                'content' => NULL,
                'content_sub' => NULL,
                'image' => 'media/img/illustrations/image.png',
            ),
            2 => 
            array (
                'tab_title' => 'AI Code Generator',
                'title' => NULL,
                'content' => NULL,
                'content_sub' => NULL,
                'image' => 'media/img/illustrations/codex.png',
            ),
            3 => 
            array (
                'tab_title' => 'AI Chat Bot',
                'title' => NULL,
                'content' => NULL,
                'content_sub' => NULL,
                'image' => 'media/img/illustrations/chats.png',
            ),
            4 => 
            array (
                'tab_title' => 'AI Speech To Text',
                'title' => NULL,
                'content' => NULL,
                'content_sub' => NULL,
                'image' => 'media/img/illustrations/stt.png',
            ),
            5 => 
            array (
                'tab_title' => 'AI Voiceover',
                'title' => NULL,
                'content' => NULL,
                'content_sub' => NULL,
                'image' => 'media/img/illustrations/tts.png',
            ),
        ));
        
        
    }
}