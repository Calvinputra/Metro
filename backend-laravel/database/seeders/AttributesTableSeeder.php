<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AttributesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('attributes')->delete();
        
        \DB::table('attributes')->insert(array (
            0 => 
            array (
                'created_at' => '2021-11-09 02:36:41',
                'deleted_at' => NULL,
                'id' => '1',
                'name' => 'Material',
                'options' => NULL,
                'required' => '0',
                'updated_at' => '2022-01-28 10:26:27',
            ),
            1 => 
            array (
                'created_at' => '2021-11-09 02:36:53',
                'deleted_at' => NULL,
                'id' => '2',
                'name' => 'Warna',
                'options' => NULL,
                'required' => '0',
                'updated_at' => '2021-11-09 02:36:53',
            ),
            2 => 
            array (
                'created_at' => '2022-01-16 16:57:07',
                'deleted_at' => NULL,
                'id' => '3',
                'name' => 'url_tokopedia',
                'options' => NULL,
                'required' => '0',
                'updated_at' => '2022-01-16 16:57:07',
            ),
        ));
        
        
    }
}