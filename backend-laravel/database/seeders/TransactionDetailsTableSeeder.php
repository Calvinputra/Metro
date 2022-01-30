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
                'name' => 'Shower tiang tx 492 srs',
                'qty' => 1,
                'price' => 4200000.0,
                'weight' => 2500.0,
                'width' => 1.0,
                'height' => 1.0,
                'depth' => 1.0,
                'created_at' => '2022-01-22 13:28:37',
                'updated_at' => '2022-01-22 13:28:37',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'product_id' => 9,
                'transaction_id' => 1,
                'name' => 'Kran wastafel elite E3201B',
                'qty' => 1,
                'price' => 250000.0,
                'weight' => 600.0,
                'width' => 1.0,
                'height' => 1.0,
                'depth' => 1.0,
                'created_at' => '2022-01-22 13:28:37',
                'updated_at' => '2022-01-22 13:28:37',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}