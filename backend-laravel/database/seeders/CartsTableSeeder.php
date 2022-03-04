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
                'id' => 31,
                'process' => 1,
                'customer_id' => 1,
                'product_id' => 6,
                'qty' => 1,
                'created_at' => '2022-03-02 10:10:41',
                'updated_at' => '2022-03-04 16:03:07',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 33,
                'process' => 1,
                'customer_id' => 1,
                'product_id' => 4,
                'qty' => 1,
                'created_at' => '2022-03-04 15:37:42',
                'updated_at' => '2022-03-04 16:03:07',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 34,
                'process' => 1,
                'customer_id' => 1,
                'product_id' => 3,
                'qty' => 1,
                'created_at' => '2022-03-04 15:37:42',
                'updated_at' => '2022-03-04 16:03:07',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 35,
                'process' => 1,
                'customer_id' => 1,
                'product_id' => 5,
                'qty' => 1,
                'created_at' => '2022-03-04 15:37:42',
                'updated_at' => '2022-03-04 16:03:07',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 36,
                'process' => 1,
                'customer_id' => 1,
                'product_id' => 2,
                'qty' => 1,
                'created_at' => '2022-03-04 15:37:42',
                'updated_at' => '2022-03-04 16:03:07',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}