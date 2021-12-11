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
                'id' => 15,
                'customer_id' => 1,
                'product_id' => 3,
                'created_at' => '2021-12-10 09:25:01',
                'updated_at' => '2021-12-10 09:25:01',
            ),
        ));
        
        
    }
}