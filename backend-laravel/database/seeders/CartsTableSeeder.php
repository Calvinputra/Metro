<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CartsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('carts')->delete();
        
        \DB::table('carts')->insert(array (
            0 => 
            array (
                'id' => 18,
                'process' => 0,
                'customer_id' => 5,
                'product_id' => 4,
                'qty' => 1,
                'created_at' => '2021-11-12 07:29:11',
                'updated_at' => '2021-11-12 07:29:11',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 19,
                'process' => 0,
                'customer_id' => 5,
                'product_id' => 3,
                'qty' => 1,
                'created_at' => '2021-11-12 07:29:12',
                'updated_at' => '2021-11-12 07:29:12',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 22,
                'process' => 1,
                'customer_id' => 1,
                'product_id' => 2,
                'qty' => 2,
                'created_at' => '2021-11-16 13:42:28',
                'updated_at' => '2021-12-06 04:57:45',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 23,
                'process' => 1,
                'customer_id' => 1,
                'product_id' => 3,
                'qty' => 1,
                'created_at' => '2021-11-30 14:05:56',
                'updated_at' => '2021-12-06 04:57:45',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 25,
                'process' => 0,
                'customer_id' => 1,
                'product_id' => 1,
                'qty' => 11,
                'created_at' => '2021-11-30 14:05:57',
                'updated_at' => '2021-12-06 04:57:45',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}