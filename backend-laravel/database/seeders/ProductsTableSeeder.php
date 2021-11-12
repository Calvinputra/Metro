<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('products')->delete();
        
        \DB::table('products')->insert(array (
            0 => 
            array (
                'id' => 1,
                'code' => 'TEST123',
                'name' => 'TEST ITEM',
                'description' => 'TES',
                'display_price' => 100000.0,
                'price' => 50000.0,
                'weight' => 500.0,
                'dimension_width' => 20.0,
                'dimension_height' => 30.0,
                'dimension_depth' => 2.0,
                'stock' => 0.0,
                'images' => '["products/1170176.jpg","products/1064544.jpg","products/1145183.png"]',
                'category_id' => 1,
                'created_at' => '2021-10-20 04:40:18',
                'updated_at' => '2021-11-07 14:43:26',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'code' => 'TEST1235',
                'name' => 'testing 2',
                'description' => 'test',
                'display_price' => 200000.0,
                'price' => 150000.0,
                'weight' => 1.0,
                'dimension_width' => 12.0,
                'dimension_height' => 21.0,
                'dimension_depth' => 3.0,
                'stock' => 0.0,
                'images' => '["products/1145183.png"]',
                'category_id' => 2,
                'created_at' => '2021-10-20 05:48:11',
                'updated_at' => '2021-11-07 14:43:43',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'code' => 'PR-123',
                'name' => 'Gambar',
                'description' => 'Gambar',
                'display_price' => 25000.0,
                'price' => 25000.0,
                'weight' => 100.0,
                'dimension_width' => 500.0,
                'dimension_height' => 2000.0,
                'dimension_depth' => 1.0,
                'stock' => 0.0,
                'images' => '["products/1064544.jpg"]',
                'category_id' => 1,
                'created_at' => '2021-11-09 07:04:58',
                'updated_at' => '2021-11-09 07:05:13',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'code' => 'GBR-002',
                'name' => 'Gambar2',
                'description' => 'Gambar',
                'display_price' => 45000.0,
                'price' => 25000.0,
                'weight' => 100.0,
                'dimension_width' => 500.0,
                'dimension_height' => 1000.0,
                'dimension_depth' => 1.0,
                'stock' => 0.0,
                'images' => '["products/1145183.png"]',
                'category_id' => 2,
                'created_at' => '2021-11-09 07:06:07',
                'updated_at' => '2021-11-09 07:06:07',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}