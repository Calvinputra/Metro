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

        \DB::table('countries')->insert(array(
            0 =>
            array(
                'id' => 1,
                'name' => 'Indonesia',
                'created_at' => '2021-11-06 13:26:54',
                'updated_at' => '2021-11-06 13:26:54',
            ),
        ));
    }
}
