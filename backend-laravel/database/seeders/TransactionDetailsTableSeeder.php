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
                'product_id' => 3,
                'transaction_id' => 1,
                'name' => 'Shower tiang toto tx 493 srs',
                'qty' => 1,
                'price' => 4300000.0,
                'weight' => 1000.0,
                'width' => 1.0,
                'height' => 1.0,
                'depth' => 1.0,
                'created_at' => '2022-02-02 13:38:47',
                'updated_at' => '2022-02-02 13:38:47',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'product_id' => 2,
                'transaction_id' => 1,
                'name' => 'Shower tiang tx 492 srs',
                'qty' => 1,
                'price' => 4200000.0,
                'weight' => 2500.0,
                'width' => 1.0,
                'height' => 1.0,
                'depth' => 1.0,
                'created_at' => '2022-02-02 13:38:47',
                'updated_at' => '2022-02-02 13:38:47',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'product_id' => 4,
                'transaction_id' => 1,
                'name' => 'Kran shower toto tx 474 srsn',
                'qty' => 2,
                'price' => 1500000.0,
                'weight' => 2000.0,
                'width' => 1.0,
                'height' => 1.0,
                'depth' => 1.0,
                'created_at' => '2022-02-02 13:38:47',
                'updated_at' => '2022-02-02 13:38:47',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'product_id' => 4,
                'transaction_id' => 2,
                'name' => 'Kran shower toto tx 474 srsn',
                'qty' => 4,
                'price' => 1500000.0,
                'weight' => 2000.0,
                'width' => 1.0,
                'height' => 1.0,
                'depth' => 1.0,
                'created_at' => '2022-02-05 17:42:43',
                'updated_at' => '2022-02-05 17:42:43',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'product_id' => 5,
                'transaction_id' => 2,
                'name' => 'Kran bath tub tx 47 srsn',
                'qty' => 6,
                'price' => 1820000.0,
                'weight' => 2500.0,
                'width' => 1.0,
                'height' => 1.0,
                'depth' => 1.0,
                'created_at' => '2022-02-05 17:42:43',
                'updated_at' => '2022-02-05 17:42:43',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'product_id' => 6,
                'transaction_id' => 2,
                'name' => 'Shower tiang toto 492 srs',
                'qty' => 2,
                'price' => 4200000.0,
                'weight' => 2500.0,
                'width' => 1.0,
                'height' => 1.0,
                'depth' => 1.0,
                'created_at' => '2022-02-05 17:42:43',
                'updated_at' => '2022-02-05 17:42:43',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'product_id' => 4,
                'transaction_id' => 3,
                'name' => 'Kran shower toto tx 474 srsn',
                'qty' => 2,
                'price' => 1500000.0,
                'weight' => 2000.0,
                'width' => 1.0,
                'height' => 1.0,
                'depth' => 1.0,
                'created_at' => '2022-02-15 17:40:47',
                'updated_at' => '2022-02-15 17:40:47',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}