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
                'created_at' => '2022-03-06 14:39:14',
                'customer_id' => '13',
                'id' => '12',
                'product_id' => '90',
                'updated_at' => '2022-03-06 14:39:14',
            ),
            1 => 
            array (
                'created_at' => '2022-03-06 14:39:17',
                'customer_id' => '13',
                'id' => '13',
                'product_id' => '9',
                'updated_at' => '2022-03-06 14:39:17',
            ),
            2 => 
            array (
                'created_at' => '2022-03-06 14:39:18',
                'customer_id' => '13',
                'id' => '14',
                'product_id' => '12',
                'updated_at' => '2022-03-06 14:39:18',
            ),
            3 => 
            array (
                'created_at' => '2022-03-06 14:39:19',
                'customer_id' => '13',
                'id' => '15',
                'product_id' => '16',
                'updated_at' => '2022-03-06 14:39:19',
            ),
            4 => 
            array (
                'created_at' => '2022-03-06 14:40:16',
                'customer_id' => '13',
                'id' => '18',
                'product_id' => '2',
                'updated_at' => '2022-03-06 14:40:16',
            ),
            5 => 
            array (
                'created_at' => '2022-03-15 14:06:07',
                'customer_id' => '7',
                'id' => '19',
                'product_id' => '97',
                'updated_at' => '2022-03-15 14:06:07',
            ),
            6 => 
            array (
                'created_at' => '2022-03-18 22:17:30',
                'customer_id' => '15',
                'id' => '20',
                'product_id' => '2',
                'updated_at' => '2022-03-18 22:17:30',
            ),
            7 => 
            array (
                'created_at' => '2022-03-27 09:16:18',
                'customer_id' => '16',
                'id' => '21',
                'product_id' => '52',
                'updated_at' => '2022-03-27 09:16:18',
            ),
            8 => 
            array (
                'created_at' => '2022-03-27 09:16:21',
                'customer_id' => '16',
                'id' => '22',
                'product_id' => '55',
                'updated_at' => '2022-03-27 09:16:21',
            ),
            9 => 
            array (
                'created_at' => '2022-03-27 09:16:30',
                'customer_id' => '16',
                'id' => '23',
                'product_id' => '2',
                'updated_at' => '2022-03-27 09:16:30',
            ),
            10 => 
            array (
                'created_at' => '2022-03-27 09:16:33',
                'customer_id' => '16',
                'id' => '24',
                'product_id' => '6',
                'updated_at' => '2022-03-27 09:16:33',
            ),
        ));
        
        
    }
}