<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TransactionDetailsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('transaction_details')->delete();
        
        \DB::table('transaction_details')->insert(array (
            0 => 
            array (
                'id' => 1,
                'product_id' => 2,
                'transaction_id' => 1,
                'name' => 'testing 2',
                'qty' => 2,
                'price' => 150000.0,
                'weight' => 1.0,
                'width' => 12.0,
                'height' => 21.0,
                'depth' => 3.0,
                'created_at' => '2021-12-06 08:20:06',
                'updated_at' => '2021-12-06 08:20:06',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'product_id' => 3,
                'transaction_id' => 1,
                'name' => 'Gambar',
                'qty' => 1,
                'price' => 25000.0,
                'weight' => 100.0,
                'width' => 500.0,
                'height' => 2000.0,
                'depth' => 1.0,
                'created_at' => '2021-12-06 08:20:06',
                'updated_at' => '2021-12-06 08:20:06',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'product_id' => 2,
                'transaction_id' => 2,
                'name' => 'testing 2',
                'qty' => 2,
                'price' => 150000.0,
                'weight' => 1.0,
                'width' => 12.0,
                'height' => 21.0,
                'depth' => 3.0,
                'created_at' => '2021-12-06 08:50:46',
                'updated_at' => '2021-12-06 08:50:46',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'product_id' => 3,
                'transaction_id' => 2,
                'name' => 'Gambar',
                'qty' => 1,
                'price' => 25000.0,
                'weight' => 100.0,
                'width' => 500.0,
                'height' => 2000.0,
                'depth' => 1.0,
                'created_at' => '2021-12-06 08:50:46',
                'updated_at' => '2021-12-06 08:50:46',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'product_id' => 1,
                'transaction_id' => 2,
                'name' => 'TEST ITEM',
                'qty' => 11,
                'price' => 50000.0,
                'weight' => 500.0,
                'width' => 20.0,
                'height' => 30.0,
                'depth' => 2.0,
                'created_at' => '2021-12-06 08:50:46',
                'updated_at' => '2021-12-06 08:50:46',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'product_id' => 1,
                'transaction_id' => 3,
                'name' => 'TEST ITEM',
                'qty' => 1,
                'price' => 50000.0,
                'weight' => 500.0,
                'width' => 20.0,
                'height' => 30.0,
                'depth' => 2.0,
                'created_at' => '2021-12-09 08:43:48',
                'updated_at' => '2021-12-09 08:43:48',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'product_id' => 3,
                'transaction_id' => 4,
                'name' => 'Gambar',
                'qty' => 2,
                'price' => 25000.0,
                'weight' => 100.0,
                'width' => 500.0,
                'height' => 2000.0,
                'depth' => 1.0,
                'created_at' => '2021-12-09 15:36:30',
                'updated_at' => '2021-12-09 15:36:30',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}