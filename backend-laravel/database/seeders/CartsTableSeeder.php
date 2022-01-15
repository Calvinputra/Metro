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
                'id' => 27,
                'process' => 1,
                'customer_id' => 6,
                'product_id' => 3,
                'qty' => 20,
                'created_at' => '2021-12-11 18:18:28',
                'updated_at' => '2021-12-11 18:21:21',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 28,
                'process' => 1,
                'customer_id' => 6,
                'product_id' => 2,
                'qty' => 4,
                'created_at' => '2021-12-11 18:18:28',
                'updated_at' => '2021-12-11 18:19:42',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 29,
                'process' => 1,
                'customer_id' => 7,
                'product_id' => 1,
                'qty' => 1,
                'created_at' => '2021-12-11 18:25:51',
                'updated_at' => '2021-12-11 18:26:02',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 30,
                'process' => 1,
                'customer_id' => 7,
                'product_id' => 3,
                'qty' => 1,
                'created_at' => '2021-12-11 18:25:52',
                'updated_at' => '2021-12-11 18:26:01',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 31,
                'process' => 1,
                'customer_id' => 7,
                'product_id' => 2,
                'qty' => 3,
                'created_at' => '2021-12-11 18:25:52',
                'updated_at' => '2021-12-11 18:26:05',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 34,
                'process' => 1,
                'customer_id' => 1,
                'product_id' => 1,
                'qty' => 2,
                'created_at' => '2022-01-10 10:37:36',
                'updated_at' => '2022-01-15 15:46:10',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 35,
                'process' => 1,
                'customer_id' => 1,
                'product_id' => 3,
                'qty' => 2,
                'created_at' => '2022-01-15 15:46:10',
                'updated_at' => '2022-01-15 15:46:10',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 36,
                'process' => 1,
                'customer_id' => 1,
                'product_id' => 2,
                'qty' => 2,
                'created_at' => '2022-01-15 15:46:10',
                'updated_at' => '2022-01-15 15:46:10',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}