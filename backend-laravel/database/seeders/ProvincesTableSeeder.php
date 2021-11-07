<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProvincesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('provinces')->delete();
        
        \DB::table('provinces')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Jakarta',
                'country_id' => 1,
                'created_at' => '2021-11-06 13:31:17',
                'updated_at' => '2021-11-06 13:31:17',
            ),
        ));
        
        
    }
}