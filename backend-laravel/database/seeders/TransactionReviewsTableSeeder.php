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
                'id' => 5,
                'review' => 'test
',
                'rating' => 2.0,
                'product_id' => 4,
                'customer_id' => 1,
                'transaction_id' => 1,
                'created_at' => '2022-02-18 19:11:32',
                'updated_at' => '2022-02-18 19:11:32',
            ),
            1 => 
            array (
                'id' => 6,
                'review' => 'test 2',
                'rating' => 3.0,
                'product_id' => 2,
                'customer_id' => 1,
                'transaction_id' => 1,
                'created_at' => '2022-02-18 19:15:07',
                'updated_at' => '2022-02-18 19:15:07',
            ),
            2 => 
            array (
                'id' => 7,
                'review' => 'test123123123',
                'rating' => 4.0,
                'product_id' => 4,
                'customer_id' => 1,
                'transaction_id' => 3,
                'created_at' => '2022-02-22 21:34:08',
                'updated_at' => '2022-02-22 21:34:08',
            ),
        ));
        
        
    }
}