<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menus')->delete();
        
        \DB::table('menus')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'admin',
                'created_at' => '2021-10-20 02:36:38',
                'updated_at' => '2021-10-20 02:36:38',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'header',
                'created_at' => '2021-10-20 04:07:44',
                'updated_at' => '2021-10-20 04:07:44',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'footer_1',
                'created_at' => '2021-10-20 04:14:08',
                'updated_at' => '2021-10-20 04:14:08',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'footer_2',
                'created_at' => '2021-10-20 04:14:15',
                'updated_at' => '2021-10-20 04:14:15',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'footer_3',
                'created_at' => '2021-10-20 04:14:23',
                'updated_at' => '2021-10-20 04:14:23',
            ),
        ));
        
        
    }
}