<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class WishlistsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('wishlists')->delete();
        
        \DB::table('wishlists')->insert(array (
            0 => 
            array (
                'id' => 1,
                'customer_id' => 1,
                'product_id' => 4,
                'created_at' => '2022-02-18 19:20:11',
                'updated_at' => '2022-02-18 19:20:11',
            ),
            1 => 
            array (
                'id' => 2,
                'customer_id' => 1,
                'product_id' => 2,
                'created_at' => '2022-02-22 19:45:59',
                'updated_at' => '2022-02-22 19:45:59',
            ),
            2 => 
            array (
                'id' => 3,
                'customer_id' => 1,
                'product_id' => 15,
                'created_at' => '2022-03-01 13:24:22',
                'updated_at' => '2022-03-01 13:24:22',
            ),
        ));
        
        
    }
}