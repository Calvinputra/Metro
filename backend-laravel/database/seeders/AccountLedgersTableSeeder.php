<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AccountLedgersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('account_ledgers')->delete();
        
        \DB::table('account_ledgers')->insert(array (
            0 => 
            array (
                'id' => 1,
                'account_id' => 2,
                'transaction_id' => 1,
                'description' => 'Transfer dari Jonathan Jonathan invoice 771e4521-e9f4-4be2-b59d-b21828bedb5e',
                'value' => 334000.0,
                'created_at' => '2022-01-15 16:25:54',
                'updated_at' => '2022-01-15 16:25:54',
            ),
            1 => 
            array (
                'id' => 2,
                'account_id' => 2,
                'transaction_id' => 1,
                'description' => 'Transfer dari Jonathan Jonathan invoice 771e4521-e9f4-4be2-b59d-b21828bedb5e',
                'value' => 334000.0,
                'created_at' => '2022-01-15 16:32:03',
                'updated_at' => '2022-01-15 16:32:03',
            ),
        ));
        
        
    }
}