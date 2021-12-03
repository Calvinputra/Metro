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
                'id' => 13,
                'customer_id' => 1,
                'product_id' => 2,
                'created_at' => '2021-11-16 13:42:20',
                'updated_at' => '2021-11-16 13:42:20',
            ),
            1 => 
            array (
                'id' => 14,
                'customer_id' => 1,
                'product_id' => 4,
                'created_at' => '2021-11-29 02:28:36',
                'updated_at' => '2021-11-29 02:28:36',
            ),
        ));
        
        
    }
}