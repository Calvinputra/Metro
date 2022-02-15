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
                'id' => 375,
                'process' => 0,
                'customer_id' => 1,
                'product_id' => 2,
                'qty' => 1,
                'created_at' => '2022-02-14 18:01:57',
                'updated_at' => '2022-02-15 18:15:34',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 376,
                'process' => 0,
                'customer_id' => 1,
                'product_id' => 3,
                'qty' => 1,
                'created_at' => '2022-02-14 18:01:57',
                'updated_at' => '2022-02-15 18:15:34',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 381,
                'process' => 1,
                'customer_id' => 1,
                'product_id' => 4,
                'qty' => 2,
                'created_at' => '2022-02-15 17:34:44',
                'updated_at' => '2022-02-15 18:15:34',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}