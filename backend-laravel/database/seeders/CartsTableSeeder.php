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
                'id' => 5,
                'process' => 1,
                'customer_id' => 1,
                'product_id' => 3,
                'qty' => 1,
                'created_at' => '2022-01-24 16:31:53',
                'updated_at' => '2022-01-31 15:52:30',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 6,
                'process' => 1,
                'customer_id' => 1,
                'product_id' => 2,
                'qty' => 1,
                'created_at' => '2022-01-28 14:00:24',
                'updated_at' => '2022-01-31 15:52:30',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 7,
                'process' => 1,
                'customer_id' => 1,
                'product_id' => 4,
                'qty' => 1,
                'created_at' => '2022-01-28 14:00:24',
                'updated_at' => '2022-01-31 15:52:30',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}