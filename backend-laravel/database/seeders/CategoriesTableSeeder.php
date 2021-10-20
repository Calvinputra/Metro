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
                'name' => 'Kategori 1',
                'icon_class' => NULL,
                'created_at' => '2021-10-20 03:08:43',
                'updated_at' => '2021-10-20 03:08:43',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Kategori 2',
                'icon_class' => NULL,
                'created_at' => '2021-10-20 03:08:49',
                'updated_at' => '2021-10-20 03:08:49',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Kategori 3',
                'icon_class' => NULL,
                'created_at' => '2021-10-20 03:08:56',
                'updated_at' => '2021-10-20 03:08:56',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}