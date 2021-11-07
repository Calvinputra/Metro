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
                'id' => 1,
                'customer_id' => 5,
                'product_id' => 2,
                'qty' => 3,
                'created_at' => '2021-11-07 11:33:43',
                'updated_at' => '2021-11-07 11:38:49',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'customer_id' => 1,
                'product_id' => 1,
                'qty' => 2,
                'created_at' => '2021-11-07 15:26:12',
                'updated_at' => '2021-11-07 15:26:51',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}