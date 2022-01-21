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
                'name' => 'Kepala Shower Mandi',
                'icon_class' => NULL,
                'created_at' => '2022-01-21 09:49:04',
                'updated_at' => '2022-01-21 09:49:04',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Tiang Shower',
                'icon_class' => NULL,
                'created_at' => '2022-01-21 09:50:28',
                'updated_at' => '2022-01-21 09:50:28',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Rak Toilet',
                'icon_class' => NULL,
                'created_at' => '2022-01-21 09:50:54',
                'updated_at' => '2022-01-21 09:50:54',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Engsel',
                'icon_class' => NULL,
                'created_at' => '2022-01-21 09:50:54',
                'updated_at' => '2022-01-21 09:50:54',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Keran Air ',
                'icon_class' => NULL,
                'created_at' => '2022-01-21 09:50:54',
                'updated_at' => '2022-01-21 09:50:54',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Rumah Boneka',
                'icon_class' => NULL,
                'created_at' => '2022-01-21 09:50:54',
                'updated_at' => '2022-01-21 09:50:54',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Washtafel',
                'icon_class' => NULL,
                'created_at' => '2022-01-21 09:53:43',
                'updated_at' => '2022-01-21 09:53:43',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Washtafel ',
                'icon_class' => NULL,
                'created_at' => '2022-01-21 09:53:43',
                'updated_at' => '2022-01-21 09:53:43',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Saringan Got',
                'icon_class' => NULL,
                'created_at' => '2022-01-21 09:53:43',
                'updated_at' => '2022-01-21 09:53:43',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Saringan Masak',
                'icon_class' => NULL,
                'created_at' => '2022-01-21 09:53:43',
                'updated_at' => '2022-01-21 09:53:43',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Lain-Lain',
                'icon_class' => NULL,
                'created_at' => '2022-01-21 09:53:43',
                'updated_at' => '2022-01-21 09:53:43',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Water Heater',
                'icon_class' => NULL,
                'created_at' => '2022-01-21 09:53:43',
                'updated_at' => '2022-01-21 09:53:43',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Produk Lainnya',
                'icon_class' => NULL,
                'created_at' => '2022-01-21 09:53:43',
                'updated_at' => '2022-01-21 09:53:43',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Aksesoris Helm',
                'icon_class' => NULL,
                'created_at' => '2022-01-21 09:53:43',
                'updated_at' => '2022-01-21 09:53:43',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Rantai & Gir Motor',
                'icon_class' => NULL,
                'created_at' => '2022-01-21 09:53:43',
                'updated_at' => '2022-01-21 09:53:43',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Kloset',
                'icon_class' => NULL,
                'created_at' => '2022-01-21 09:53:43',
                'updated_at' => '2022-01-21 09:53:43',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Slow Cooker',
                'icon_class' => NULL,
                'created_at' => '2022-01-21 09:53:43',
                'updated_at' => '2022-01-21 09:53:43',
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Gagang Pintu',
                'icon_class' => NULL,
                'created_at' => '2022-01-21 09:53:43',
                'updated_at' => '2022-01-21 09:53:43',
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Sponge Cuci Piring',
                'icon_class' => NULL,
                'created_at' => '2022-01-21 09:53:44',
                'updated_at' => '2022-01-21 09:53:44',
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'Shower Curtain',
                'icon_class' => NULL,
                'created_at' => '2022-01-21 09:53:44',
                'updated_at' => '2022-01-21 09:53:44',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}