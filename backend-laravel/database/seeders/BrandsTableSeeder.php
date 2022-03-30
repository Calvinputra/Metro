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
                'created_at' => '2022-01-21 13:31:30',
                'id' => '1',
                'logo' => NULL,
                'name' => 'Toto',
                'updated_at' => '2022-01-21 13:31:30',
            ),
            1 => 
            array (
                'created_at' => '2022-01-21 13:31:30',
                'id' => '2',
                'logo' => NULL,
                'name' => 'Dorma',
                'updated_at' => '2022-01-21 13:31:30',
            ),
            2 => 
            array (
                'created_at' => '2022-01-21 13:31:30',
                'id' => '3',
                'logo' => NULL,
                'name' => 'Elite',
                'updated_at' => '2022-01-21 13:31:30',
            ),
            3 => 
            array (
                'created_at' => '2022-01-21 13:31:30',
                'id' => '4',
                'logo' => NULL,
                'name' => 'Wasser',
                'updated_at' => '2022-01-21 13:31:30',
            ),
            4 => 
            array (
                'created_at' => '2022-01-21 13:31:30',
                'id' => '5',
                'logo' => NULL,
                'name' => 'Executive',
                'updated_at' => '2022-01-21 13:31:30',
            ),
            5 => 
            array (
                'created_at' => '2022-01-21 13:31:30',
                'id' => '6',
                'logo' => NULL,
                'name' => 'Kedeng',
                'updated_at' => '2022-01-21 13:31:30',
            ),
            6 => 
            array (
                'created_at' => '2022-01-21 13:31:30',
                'id' => '7',
                'logo' => NULL,
                'name' => 'Kenmaster',
                'updated_at' => '2022-01-21 13:31:30',
            ),
            7 => 
            array (
                'created_at' => '2022-01-21 13:31:30',
                'id' => '8',
                'logo' => NULL,
                'name' => 'Cisa',
                'updated_at' => '2022-01-21 13:31:30',
            ),
            8 => 
            array (
                'created_at' => '2022-01-21 13:31:30',
                'id' => '9',
                'logo' => NULL,
                'name' => 'Kend',
                'updated_at' => '2022-01-21 13:31:30',
            ),
            9 => 
            array (
                'created_at' => '2022-01-21 13:31:30',
                'id' => '10',
                'logo' => NULL,
                'name' => 'MasterLock',
                'updated_at' => '2022-01-21 13:31:30',
            ),
            10 => 
            array (
                'created_at' => '2022-01-21 13:31:30',
                'id' => '11',
                'logo' => NULL,
                'name' => 'Ariston',
                'updated_at' => '2022-01-21 13:31:30',
            ),
            11 => 
            array (
                'created_at' => '2022-01-21 13:31:30',
                'id' => '12',
                'logo' => NULL,
                'name' => 'Solid',
                'updated_at' => '2022-01-21 13:31:30',
            ),
            12 => 
            array (
                'created_at' => '2022-01-21 13:31:30',
                'id' => '13',
                'logo' => NULL,
                'name' => 'ina',
                'updated_at' => '2022-01-21 13:31:30',
            ),
            13 => 
            array (
                'created_at' => '2022-01-21 13:31:30',
                'id' => '14',
                'logo' => NULL,
                'name' => 'cello',
                'updated_at' => '2022-01-21 13:31:30',
            ),
            14 => 
            array (
                'created_at' => '2022-01-21 13:31:30',
                'id' => '15',
                'logo' => NULL,
                'name' => 'fio',
                'updated_at' => '2022-01-21 13:31:30',
            ),
            15 => 
            array (
                'created_at' => '2022-01-21 13:31:30',
                'id' => '16',
                'logo' => NULL,
                'name' => 'dekson',
                'updated_at' => '2022-01-21 13:31:30',
            ),
            16 => 
            array (
                'created_at' => '2022-01-21 13:31:30',
                'id' => '17',
                'logo' => NULL,
                'name' => 'Radar',
                'updated_at' => '2022-01-21 13:31:30',
            ),
            17 => 
            array (
                'created_at' => '2022-01-21 13:31:30',
                'id' => '18',
                'logo' => NULL,
                'name' => 'VNR',
                'updated_at' => '2022-01-21 13:31:30',
            ),
        ));
        
        
    }
}