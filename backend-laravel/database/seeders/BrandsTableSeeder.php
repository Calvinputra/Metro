<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BrandsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('brands')->delete();
        
        \DB::table('brands')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Antasan',
                'logo' => NULL,
                'created_at' => '2022-03-30 15:09:16',
                'updated_at' => '2022-03-30 15:09:16',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Solid',
                'logo' => NULL,
                'created_at' => '2022-03-30 15:09:55',
                'updated_at' => '2022-03-30 15:09:55',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'San-ei',
                'logo' => NULL,
                'created_at' => '2022-03-30 15:09:55',
                'updated_at' => '2022-03-30 15:09:55',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Master Lock',
                'logo' => NULL,
                'created_at' => '2022-03-30 15:09:55',
                'updated_at' => '2022-03-30 15:09:55',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Grease Trap',
                'logo' => NULL,
                'created_at' => '2022-03-30 15:09:55',
                'updated_at' => '2022-03-30 15:09:55',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Onda',
                'logo' => NULL,
                'created_at' => '2022-03-30 15:09:55',
                'updated_at' => '2022-03-30 15:09:55',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Vitara',
                'logo' => NULL,
                'created_at' => '2022-03-30 15:09:55',
                'updated_at' => '2022-03-30 15:09:55',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'TOTO',
                'logo' => NULL,
                'created_at' => '2022-03-30 15:09:55',
                'updated_at' => '2022-03-30 15:09:55',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Binoche',
                'logo' => NULL,
                'created_at' => '2022-03-30 15:09:56',
                'updated_at' => '2022-03-30 15:09:56',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Dorma',
                'logo' => NULL,
                'created_at' => '2022-03-30 15:09:56',
                'updated_at' => '2022-03-30 15:09:56',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Belocca',
                'logo' => NULL,
                'created_at' => '2022-03-30 15:09:56',
                'updated_at' => '2022-03-30 15:09:56',
            ),
        ));
        
        
    }
}