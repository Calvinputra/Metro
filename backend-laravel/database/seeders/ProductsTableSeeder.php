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
                'updated_at' => '2021-10-20 04:41:40',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
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
                'updated_at' => '2021-10-20 05:48:11',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}