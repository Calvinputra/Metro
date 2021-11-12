<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductAttributesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('product_attributes')->delete();
        
        \DB::table('product_attributes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'attribute_id' => 1,
                'product_id' => 2,
                'value' => 'Besi',
                'created_at' => NULL,
                'updated_at' => '2021-11-09 06:55:27',
                'deleted_at' => '2021-11-09 06:55:27',
            ),
            1 => 
            array (
                'id' => 2,
                'attribute_id' => 1,
                'product_id' => 2,
                'value' => 'Besi',
                'created_at' => NULL,
                'updated_at' => '2021-11-09 07:02:36',
                'deleted_at' => '2021-11-09 07:02:36',
            ),
            2 => 
            array (
                'id' => 3,
                'attribute_id' => 2,
                'product_id' => 2,
                'value' => 'Silver',
                'created_at' => NULL,
                'updated_at' => '2021-11-09 07:02:36',
                'deleted_at' => '2021-11-09 07:02:36',
            ),
            3 => 
            array (
                'id' => 4,
                'attribute_id' => 1,
                'product_id' => 1,
                'value' => 'Kertas',
                'created_at' => NULL,
                'updated_at' => '2021-11-09 07:02:09',
                'deleted_at' => '2021-11-09 07:02:09',
            ),
            4 => 
            array (
                'id' => 5,
                'attribute_id' => 2,
                'product_id' => 1,
                'value' => 'Putih',
                'created_at' => NULL,
                'updated_at' => '2021-11-09 07:02:09',
                'deleted_at' => '2021-11-09 07:02:09',
            ),
            5 => 
            array (
                'id' => 6,
                'attribute_id' => 1,
                'product_id' => 1,
                'value' => 'Kertas',
                'created_at' => NULL,
                'updated_at' => '2021-11-09 07:02:16',
                'deleted_at' => '2021-11-09 07:02:16',
            ),
            6 => 
            array (
                'id' => 7,
                'attribute_id' => 2,
                'product_id' => 1,
                'value' => 'Putih',
                'created_at' => NULL,
                'updated_at' => '2021-11-09 07:02:16',
                'deleted_at' => '2021-11-09 07:02:16',
            ),
            7 => 
            array (
                'id' => 8,
                'attribute_id' => 1,
                'product_id' => 1,
                'value' => 'Kertas',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'attribute_id' => 1,
                'product_id' => 2,
                'value' => 'Karton',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'attribute_id' => 2,
                'product_id' => 2,
                'value' => 'Silver',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'attribute_id' => 1,
                'product_id' => 3,
                'value' => 'Kertas',
                'created_at' => NULL,
                'updated_at' => '2021-11-09 07:05:13',
                'deleted_at' => '2021-11-09 07:05:13',
            ),
            11 => 
            array (
                'id' => 12,
                'attribute_id' => 1,
                'product_id' => 3,
                'value' => 'Kertas',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'attribute_id' => 1,
                'product_id' => 4,
                'value' => 'Kertas',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}