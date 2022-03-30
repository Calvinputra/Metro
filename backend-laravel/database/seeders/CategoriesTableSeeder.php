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
                'name' => 'Pembersih Saluran Air',
                'icon_class' => NULL,
                'created_at' => '2022-03-30 15:09:16',
                'updated_at' => '2022-03-30 15:09:16',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Grendel',
                'icon_class' => NULL,
                'created_at' => '2022-03-30 15:09:55',
                'updated_at' => '2022-03-30 15:09:55',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Saringan Got',
                'icon_class' => NULL,
                'created_at' => '2022-03-30 15:09:55',
                'updated_at' => '2022-03-30 15:09:55',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Gembok',
                'icon_class' => NULL,
                'created_at' => '2022-03-30 15:09:55',
                'updated_at' => '2022-03-30 15:09:55',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Saringan Bak Cuci Piring',
                'icon_class' => NULL,
                'created_at' => '2022-03-30 15:09:55',
                'updated_at' => '2022-03-30 15:09:55',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Gagang Pintu',
                'icon_class' => NULL,
                'created_at' => '2022-03-30 15:09:55',
                'updated_at' => '2022-03-30 15:09:55',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Engsel',
                'icon_class' => NULL,
                'created_at' => '2022-03-30 15:09:55',
                'updated_at' => '2022-03-30 15:09:55',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Kloset',
                'icon_class' => NULL,
                'created_at' => '2022-03-30 15:09:55',
                'updated_at' => '2022-03-30 15:09:55',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Washtafel',
                'icon_class' => NULL,
                'created_at' => '2022-03-30 15:09:55',
                'updated_at' => '2022-03-30 15:09:55',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Keran Air',
                'icon_class' => NULL,
                'created_at' => '2022-03-30 15:09:55',
                'updated_at' => '2022-03-30 15:09:55',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Fitting Pipa',
                'icon_class' => NULL,
                'created_at' => '2022-03-30 15:09:55',
                'updated_at' => '2022-03-30 15:09:55',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Penahan Pintu',
                'icon_class' => NULL,
                'created_at' => '2022-03-30 15:09:56',
                'updated_at' => '2022-03-30 15:09:56',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Toren Air',
                'icon_class' => NULL,
                'created_at' => '2022-03-30 15:09:56',
                'updated_at' => '2022-03-30 15:09:56',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Tempat Tissue',
                'icon_class' => NULL,
                'created_at' => '2022-03-30 15:09:56',
                'updated_at' => '2022-03-30 15:09:56',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}