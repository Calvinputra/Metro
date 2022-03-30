<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'created_at' => '2021-10-20 02:36:38',
                'display_name' => 'Administrator',
                'id' => '1',
                'name' => 'admin',
                'updated_at' => '2021-10-20 02:36:38',
            ),
            1 => 
            array (
                'created_at' => '2021-10-20 02:36:38',
                'display_name' => 'Content Administrator',
                'id' => '2',
                'name' => 'content_admin',
                'updated_at' => '2021-10-20 03:10:59',
            ),
        ));
        
        
    }
}