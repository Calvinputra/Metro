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
                'id' => 1,
                'name' => 'Material',
                'required' => 1,
                'options' => NULL,
                'created_at' => '2021-11-09 02:36:41',
                'updated_at' => '2021-11-09 02:36:41',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Warna',
                'required' => 0,
                'options' => NULL,
                'created_at' => '2021-11-09 02:36:53',
                'updated_at' => '2021-11-09 02:36:53',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'url_tokopedia',
                'required' => 0,
                'options' => NULL,
                'created_at' => '2022-01-16 16:57:07',
                'updated_at' => '2022-01-16 16:57:07',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}