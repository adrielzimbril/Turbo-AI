<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FrontendPartnersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('frontend_partners')->delete();
        
        \DB::table('frontend_partners')->insert(array (
            0 => 
            array (
                'id' => 1,
                'image' => 'frontend/img/partners/1.svg',
                'name' => 'TURBO AI - Mades By Oricodes',
            ),
            1 => 
            array (
                'id' => 2,
                'image' => 'frontend/img/partners/2.svg',
                'name' => 'TURBO AI - Mades By Oricodes',
            ),
            2 => 
            array (
                'id' => 3,
                'image' => 'frontend/img/partners/3.svg',
                'name' => 'TURBO AI - Mades By Oricodes',
            ),
            3 => 
            array (
                'id' => 4,
                'image' => 'frontend/img/partners/4.svg',
                'name' => 'TURBO AI - Mades By Oricodes',
            ),
            4 => 
            array (
                'id' => 5,
                'image' => 'frontend/img/partners/5.svg',
                'name' => 'TURBO AI - Mades By Oricodes',
            ),
            5 => 
            array (
                'id' => 6,
                'image' => 'frontend/img/partners/6.svg',
                'name' => 'TURBO AI - Mades By Oricodes',
            ),
            6 => 
            array (
                'id' => 7,
                'image' => 'frontend/img/partners/7.svg',
                'name' => 'TURBO AI - Mades By Oricodes',
            ),
            7 => 
            array (
                'id' => 8,
                'image' => 'frontend/img/partners/8.svg',
                'name' => 'TURBO AI - Mades By Oricodes',
            ),
            8 => 
            array (
                'id' => 9,
                'image' => 'frontend/img/partners/9.svg',
                'name' => 'TURBO AI - Mades By Oricodes',
            ),
            9 => 
            array (
                'id' => 10,
                'image' => 'frontend/img/partners/10.svg',
                'name' => 'TURBO AI - Mades By Oricodes',
            ),
        ));
        
        
    }
}