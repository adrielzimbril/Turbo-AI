<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PromptCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('prompt_categories')->delete();
        
        \DB::table('prompt_categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'writer',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'blog',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Advertisement',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'ecommerce',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'development',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'social media',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 8,
                'name' => 'Thinker',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}