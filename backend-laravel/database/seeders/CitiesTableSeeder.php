<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cities')->delete();
        
        \DB::table('cities')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Jakarta Barat',
                'province_id' => 1,
                'created_at' => '2021-11-06 13:35:14',
                'updated_at' => '2021-11-06 13:35:14',
            ),
        ));
        
        
    }
}