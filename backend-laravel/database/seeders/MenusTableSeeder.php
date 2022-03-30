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
                'created_at' => '2021-10-20 02:36:38',
                'id' => '1',
                'name' => 'admin',
                'updated_at' => '2021-10-20 02:36:38',
            ),
            1 => 
            array (
                'created_at' => '2021-10-20 04:07:44',
                'id' => '2',
                'name' => 'header',
                'updated_at' => '2021-10-20 04:07:44',
            ),
            2 => 
            array (
                'created_at' => '2021-10-20 04:14:08',
                'id' => '3',
                'name' => 'footer_1',
                'updated_at' => '2021-10-20 04:14:08',
            ),
            3 => 
            array (
                'created_at' => '2021-10-20 04:14:15',
                'id' => '4',
                'name' => 'footer_2',
                'updated_at' => '2021-10-20 04:14:15',
            ),
            4 => 
            array (
                'created_at' => '2021-10-20 04:14:23',
                'id' => '5',
                'name' => 'footer_3',
                'updated_at' => '2021-10-20 04:14:23',
            ),
        ));
        
        
    }
}