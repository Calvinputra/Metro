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
                'product_id' => 1,
                'transaction_id' => 2,
                'name' => 'Gambar 1',
                'qty' => 4,
                'price' => 50000.0,
                'weight' => 1.0,
                'width' => 1.0,
                'heigth' => 1.0,
                'depth' => 1.0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'product_id' => 2,
                'transaction_id' => 2,
                'name' => 'Gambar 2',
                'qty' => 3,
                'price' => 25000.0,
                'weight' => 1.0,
                'width' => 1.0,
                'heigth' => 1.0,
                'depth' => 1.0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}