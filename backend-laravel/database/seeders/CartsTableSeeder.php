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
                'id' => 26,
                'process' => 1,
                'customer_id' => 1,
                'product_id' => 3,
                'qty' => 4,
                'created_at' => '2021-12-10 09:24:43',
                'updated_at' => '2021-12-10 09:24:43',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}