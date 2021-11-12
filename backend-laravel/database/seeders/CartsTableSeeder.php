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
                'id' => 11,
                'process' => 0,
                'customer_id' => 1,
                'product_id' => 4,
                'qty' => 1,
                'created_at' => '2021-11-12 06:53:35',
                'updated_at' => '2021-11-12 06:53:35',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}