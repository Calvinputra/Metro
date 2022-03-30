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
                'created_at' => '2022-01-21 09:49:04',
                'deleted_at' => NULL,
                'icon_class' => NULL,
                'id' => '1',
                'name' => 'Kepala Shower Mandi',
                'updated_at' => '2022-01-21 09:49:04',
            ),
            1 => 
            array (
                'created_at' => '2022-01-21 09:50:28',
                'deleted_at' => NULL,
                'icon_class' => NULL,
                'id' => '2',
                'name' => 'Tiang Shower',
                'updated_at' => '2022-01-21 09:50:28',
            ),
            2 => 
            array (
                'created_at' => '2022-01-21 09:50:54',
                'deleted_at' => NULL,
                'icon_class' => NULL,
                'id' => '3',
                'name' => 'Rak Toilet',
                'updated_at' => '2022-01-21 09:50:54',
            ),
            3 => 
            array (
                'created_at' => '2022-01-21 09:50:54',
                'deleted_at' => NULL,
                'icon_class' => NULL,
                'id' => '4',
                'name' => 'Engsel',
                'updated_at' => '2022-01-21 09:50:54',
            ),
            4 => 
            array (
                'created_at' => '2022-01-21 09:50:54',
                'deleted_at' => NULL,
                'icon_class' => NULL,
                'id' => '5',
                'name' => 'Keran Air ',
                'updated_at' => '2022-01-21 09:50:54',
            ),
            5 => 
            array (
                'created_at' => '2022-01-21 09:50:54',
                'deleted_at' => NULL,
                'icon_class' => NULL,
                'id' => '6',
                'name' => 'Rumah Boneka',
                'updated_at' => '2022-01-21 09:50:54',
            ),
            6 => 
            array (
                'created_at' => '2022-01-21 09:53:43',
                'deleted_at' => NULL,
                'icon_class' => NULL,
                'id' => '7',
                'name' => 'Washtafel',
                'updated_at' => '2022-01-21 09:53:43',
            ),
            7 => 
            array (
                'created_at' => '2022-01-21 09:53:43',
                'deleted_at' => NULL,
                'icon_class' => NULL,
                'id' => '8',
                'name' => 'Washtafel ',
                'updated_at' => '2022-01-21 09:53:43',
            ),
            8 => 
            array (
                'created_at' => '2022-01-21 09:53:43',
                'deleted_at' => NULL,
                'icon_class' => NULL,
                'id' => '9',
                'name' => 'Saringan Got',
                'updated_at' => '2022-01-21 09:53:43',
            ),
            9 => 
            array (
                'created_at' => '2022-01-21 09:53:43',
                'deleted_at' => NULL,
                'icon_class' => NULL,
                'id' => '10',
                'name' => 'Saringan Masak',
                'updated_at' => '2022-01-21 09:53:43',
            ),
            10 => 
            array (
                'created_at' => '2022-01-21 09:53:43',
                'deleted_at' => NULL,
                'icon_class' => NULL,
                'id' => '11',
                'name' => 'Lain-Lain',
                'updated_at' => '2022-01-21 09:53:43',
            ),
            11 => 
            array (
                'created_at' => '2022-01-21 09:53:43',
                'deleted_at' => NULL,
                'icon_class' => NULL,
                'id' => '12',
                'name' => 'Water Heater',
                'updated_at' => '2022-01-21 09:53:43',
            ),
            12 => 
            array (
                'created_at' => '2022-01-21 09:53:43',
                'deleted_at' => NULL,
                'icon_class' => NULL,
                'id' => '13',
                'name' => 'Produk Lainnya',
                'updated_at' => '2022-01-21 09:53:43',
            ),
            13 => 
            array (
                'created_at' => '2022-01-21 09:53:43',
                'deleted_at' => NULL,
                'icon_class' => NULL,
                'id' => '14',
                'name' => 'Aksesoris Helm',
                'updated_at' => '2022-01-21 09:53:43',
            ),
            14 => 
            array (
                'created_at' => '2022-01-21 09:53:43',
                'deleted_at' => NULL,
                'icon_class' => NULL,
                'id' => '15',
                'name' => 'Rantai & Gir Motor',
                'updated_at' => '2022-01-21 09:53:43',
            ),
            15 => 
            array (
                'created_at' => '2022-01-21 09:53:43',
                'deleted_at' => NULL,
                'icon_class' => NULL,
                'id' => '16',
                'name' => 'Kloset',
                'updated_at' => '2022-01-21 09:53:43',
            ),
            16 => 
            array (
                'created_at' => '2022-01-21 09:53:43',
                'deleted_at' => NULL,
                'icon_class' => NULL,
                'id' => '17',
                'name' => 'Slow Cooker',
                'updated_at' => '2022-01-21 09:53:43',
            ),
            17 => 
            array (
                'created_at' => '2022-01-21 09:53:43',
                'deleted_at' => NULL,
                'icon_class' => NULL,
                'id' => '18',
                'name' => 'Gagang Pintu',
                'updated_at' => '2022-01-21 09:53:43',
            ),
            18 => 
            array (
                'created_at' => '2022-01-21 09:53:44',
                'deleted_at' => NULL,
                'icon_class' => NULL,
                'id' => '19',
                'name' => 'Sponge Cuci Piring',
                'updated_at' => '2022-01-21 09:53:44',
            ),
            19 => 
            array (
                'created_at' => '2022-01-21 09:53:44',
                'deleted_at' => NULL,
                'icon_class' => NULL,
                'id' => '20',
                'name' => 'Shower Curtain',
                'updated_at' => '2022-01-21 09:53:44',
            ),
        ));
        
        
    }
}