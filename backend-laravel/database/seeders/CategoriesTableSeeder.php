<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Fitting & Accessories',
                'icon_class' => NULL,
                'created_at' => '2021-10-20 03:08:43',
                'updated_at' => '2022-01-15 16:31:02',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Kitchen Sink',
                'icon_class' => NULL,
                'created_at' => '2021-10-20 03:08:49',
                'updated_at' => '2022-01-15 16:31:12',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Bathroom Door',
                'icon_class' => NULL,
                'created_at' => '2021-10-20 03:08:56',
                'updated_at' => '2022-01-15 16:31:22',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Sanitary Ware',
                'icon_class' => NULL,
                'created_at' => '2022-01-15 16:31:32',
                'updated_at' => '2022-01-15 16:31:32',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Wash Cabinet Set',
                'icon_class' => NULL,
                'created_at' => '2022-01-15 16:31:43',
                'updated_at' => '2022-01-15 16:31:43',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}