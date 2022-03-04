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
                'description' => 'Transfer dari Jonathan Jonathan invoice 1bc83b7c-0a6a-469d-baa5-271e9056cf06',
                'value' => 11748000.0,
                'created_at' => '2022-02-02 19:49:18',
                'updated_at' => '2022-02-02 19:49:18',
            ),
            1 => 
            array (
                'id' => 5,
                'account_id' => 2,
                'transaction_id' => 1,
                'description' => 'Transaksi selesai atas nama Jonathan Jonathan invoice 1bc83b7c-0a6a-469d-baa5-271e9056cf06',
                'value' => -11748000.0,
                'created_at' => '2022-02-03 20:28:00',
                'updated_at' => '2022-02-03 20:28:00',
            ),
            2 => 
            array (
                'id' => 6,
                'account_id' => 2,
                'transaction_id' => 1,
                'description' => 'Transaksi selesai atas nama Jonathan Jonathan invoice 1bc83b7c-0a6a-469d-baa5-271e9056cf06',
                'value' => -11748000.0,
                'created_at' => '2022-02-03 20:28:40',
                'updated_at' => '2022-02-03 20:28:40',
            ),
            3 => 
            array (
                'id' => 7,
                'account_id' => 1,
                'transaction_id' => 1,
                'description' => 'Transaksi selesai atas nama Jonathan Jonathan invoice 1bc83b7c-0a6a-469d-baa5-271e9056cf06',
                'value' => 11748000.0,
                'created_at' => '2022-02-03 20:28:42',
                'updated_at' => '2022-02-03 20:28:42',
            ),
            4 => 
            array (
                'id' => 8,
                'account_id' => 2,
                'transaction_id' => 3,
                'description' => 'Transfer dari Jonathan Jonathan invoice 5591aedd-a029-4c41-8dba-dde88c96b77e',
                'value' => 3108000.0,
                'created_at' => '2022-02-15 17:51:02',
                'updated_at' => '2022-02-15 17:51:02',
            ),
            5 => 
            array (
                'id' => 9,
                'account_id' => 2,
                'transaction_id' => 3,
                'description' => 'Transaksi selesai atas nama Jonathan Jonathan invoice 5591aedd-a029-4c41-8dba-dde88c96b77e',
                'value' => -3108000.0,
                'created_at' => '2022-02-15 17:53:41',
                'updated_at' => '2022-02-15 17:53:41',
            ),
            6 => 
            array (
                'id' => 10,
                'account_id' => 1,
                'transaction_id' => 3,
                'description' => 'Transaksi selesai atas nama Jonathan Jonathan invoice 5591aedd-a029-4c41-8dba-dde88c96b77e',
                'value' => 3108000.0,
                'created_at' => '2022-02-15 17:53:41',
                'updated_at' => '2022-02-15 17:53:41',
            ),
            7 => 
            array (
                'id' => 11,
                'account_id' => 2,
                'transaction_id' => 8,
                'description' => 'Transfer dari Jonathan Jonathan invoice cb055030-4f0e-4062-aace-8f1c37739fb8',
                'value' => 26940000.0,
                'created_at' => '2022-03-01 13:12:37',
                'updated_at' => '2022-03-01 13:12:37',
            ),
            8 => 
            array (
                'id' => 12,
                'account_id' => 2,
                'transaction_id' => 8,
                'description' => 'Transaksi selesai atas nama Jonathan Jonathan invoice cb055030-4f0e-4062-aace-8f1c37739fb8',
                'value' => -26940000.0,
                'created_at' => '2022-03-01 13:31:05',
                'updated_at' => '2022-03-01 13:31:05',
            ),
            9 => 
            array (
                'id' => 13,
                'account_id' => 1,
                'transaction_id' => 8,
                'description' => 'Transaksi selesai atas nama Jonathan Jonathan invoice cb055030-4f0e-4062-aace-8f1c37739fb8',
                'value' => 26940000.0,
                'created_at' => '2022-03-01 13:31:05',
                'updated_at' => '2022-03-01 13:31:05',
            ),
        ));
        
        
    }
}