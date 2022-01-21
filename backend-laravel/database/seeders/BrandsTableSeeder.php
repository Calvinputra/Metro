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
                'name' => 'Toto',
                'logo' => NULL,
                'created_at' => '2022-01-21 09:50:54',
                'updated_at' => '2022-01-21 09:50:54',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Dorma',
                'logo' => NULL,
                'created_at' => '2022-01-21 09:50:54',
                'updated_at' => '2022-01-21 09:50:54',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Elite',
                'logo' => NULL,
                'created_at' => '2022-01-21 09:50:54',
                'updated_at' => '2022-01-21 09:50:54',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Wasser',
                'logo' => NULL,
                'created_at' => '2022-01-21 09:50:54',
                'updated_at' => '2022-01-21 09:50:54',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Executive',
                'logo' => NULL,
                'created_at' => '2022-01-21 09:53:43',
                'updated_at' => '2022-01-21 09:53:43',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Kedeng',
                'logo' => NULL,
                'created_at' => '2022-01-21 09:53:43',
                'updated_at' => '2022-01-21 09:53:43',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Kenmaster',
                'logo' => NULL,
                'created_at' => '2022-01-21 09:53:43',
                'updated_at' => '2022-01-21 09:53:43',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Cisa',
                'logo' => NULL,
                'created_at' => '2022-01-21 09:53:43',
                'updated_at' => '2022-01-21 09:53:43',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Kend',
                'logo' => NULL,
                'created_at' => '2022-01-21 09:53:43',
                'updated_at' => '2022-01-21 09:53:43',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'MasterLock',
                'logo' => NULL,
                'created_at' => '2022-01-21 09:53:43',
                'updated_at' => '2022-01-21 09:53:43',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Ariston',
                'logo' => NULL,
                'created_at' => '2022-01-21 09:53:43',
                'updated_at' => '2022-01-21 09:53:43',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Solid',
                'logo' => NULL,
                'created_at' => '2022-01-21 09:53:43',
                'updated_at' => '2022-01-21 09:53:43',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'ina',
                'logo' => NULL,
                'created_at' => '2022-01-21 09:53:43',
                'updated_at' => '2022-01-21 09:53:43',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'cello',
                'logo' => NULL,
                'created_at' => '2022-01-21 09:53:43',
                'updated_at' => '2022-01-21 09:53:43',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'fio',
                'logo' => NULL,
                'created_at' => '2022-01-21 09:53:43',
                'updated_at' => '2022-01-21 09:53:43',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'dekson',
                'logo' => NULL,
                'created_at' => '2022-01-21 09:53:43',
                'updated_at' => '2022-01-21 09:53:43',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Radar',
                'logo' => NULL,
                'created_at' => '2022-01-21 09:53:43',
                'updated_at' => '2022-01-21 09:53:43',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'VNR',
                'logo' => NULL,
                'created_at' => '2022-01-21 09:53:43',
                'updated_at' => '2022-01-21 09:53:43',
            ),
        ));
        
        
    }
}