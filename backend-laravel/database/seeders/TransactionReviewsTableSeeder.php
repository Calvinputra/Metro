<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TransactionReviewsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('transaction_reviews')->delete();
        
        \DB::table('transaction_reviews')->insert(array (
            0 => 
            array (
                'created_at' => '2022-03-06 12:37:33',
                'customer_id' => '13',
                'id' => '2',
                'product_id' => '9',
                'rating' => '5',
                'review' => 'Puas Sekali. Mohon Adminya di ganti',
                'transaction_id' => '7',
                'updated_at' => '2022-03-06 12:37:33',
            ),
            1 => 
            array (
                'created_at' => '2022-03-06 14:12:46',
                'customer_id' => '13',
                'id' => '3',
                'product_id' => '2',
                'rating' => '5',
                'review' => 'Test',
                'transaction_id' => '8',
                'updated_at' => '2022-03-06 14:12:46',
            ),
            2 => 
            array (
                'created_at' => '2022-03-06 14:12:51',
                'customer_id' => '13',
                'id' => '4',
                'product_id' => '3',
                'rating' => '5',
                'review' => 'Test',
                'transaction_id' => '8',
                'updated_at' => '2022-03-06 14:12:51',
            ),
            3 => 
            array (
                'created_at' => '2022-03-06 14:12:56',
                'customer_id' => '13',
                'id' => '5',
                'product_id' => '4',
                'rating' => '5',
                'review' => 'Test',
                'transaction_id' => '8',
                'updated_at' => '2022-03-06 14:12:56',
            ),
            4 => 
            array (
                'created_at' => '2022-03-06 14:12:58',
                'customer_id' => '13',
                'id' => '6',
                'product_id' => '8',
                'rating' => '5',
                'review' => 'Test',
                'transaction_id' => '8',
                'updated_at' => '2022-03-06 14:12:58',
            ),
            5 => 
            array (
                'created_at' => '2022-03-06 14:13:00',
                'customer_id' => '13',
                'id' => '7',
                'product_id' => '66',
                'rating' => '5',
                'review' => 'Test',
                'transaction_id' => '8',
                'updated_at' => '2022-03-06 14:13:00',
            ),
            6 => 
            array (
                'created_at' => '2022-03-06 14:13:03',
                'customer_id' => '13',
                'id' => '8',
                'product_id' => '90',
                'rating' => '5',
                'review' => 'Test',
                'transaction_id' => '8',
                'updated_at' => '2022-03-06 14:13:03',
            ),
        ));
        
        
    }
}