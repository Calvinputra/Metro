<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('countries')->delete();
        
        \DB::table('countries')->insert(array (
            0 => 
            array (
                'created_at' => '2021-11-06 13:26:54',
                'id' => '1',
                'name' => 'Indonesia',
                'updated_at' => '2021-11-06 13:26:54',
            ),
        ));
        
        
    }
}