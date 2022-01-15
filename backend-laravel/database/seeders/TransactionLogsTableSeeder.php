<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TransactionLogsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('transaction_logs')->delete();
        
        \DB::table('transaction_logs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'status_id' => 1,
                'transaction_id' => 15,
                'status' => 'MENUNGGU PEMBAYARAN',
                'notes' => NULL,
                'created_at' => '2021-12-14 15:05:40',
                'updated_at' => '2021-12-14 15:05:40',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'status_id' => 1,
                'transaction_id' => 16,
                'status' => 'MENUNGGU PEMBAYARAN',
                'notes' => NULL,
                'created_at' => '2021-12-20 09:58:50',
                'updated_at' => '2021-12-20 09:58:50',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'status_id' => 1,
                'transaction_id' => 17,
                'status' => 'MENUNGGU PEMBAYARAN',
                'notes' => NULL,
                'created_at' => '2021-12-20 11:28:25',
                'updated_at' => '2021-12-20 11:28:25',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'status_id' => 1,
                'transaction_id' => 18,
                'status' => 'MENUNGGU PEMBAYARAN',
                'notes' => NULL,
                'created_at' => '2021-12-20 11:28:27',
                'updated_at' => '2021-12-20 11:28:27',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'status_id' => 1,
                'transaction_id' => 19,
                'status' => 'MENUNGGU PEMBAYARAN',
                'notes' => NULL,
                'created_at' => '2021-12-20 17:03:05',
                'updated_at' => '2021-12-20 17:03:05',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'status_id' => 1,
                'transaction_id' => 20,
                'status' => 'MENUNGGU PEMBAYARAN',
                'notes' => NULL,
                'created_at' => '2021-12-20 17:05:17',
                'updated_at' => '2021-12-20 17:05:17',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'status_id' => 3,
                'transaction_id' => 12,
                'status' => 'SEDANG DI KIRIM',
                'notes' => NULL,
                'created_at' => '2021-12-23 14:14:35',
                'updated_at' => '2021-12-23 14:14:35',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'status_id' => 3,
                'transaction_id' => 8,
                'status' => 'SEDANG DI KIRIM',
                'notes' => NULL,
                'created_at' => '2021-12-23 14:14:55',
                'updated_at' => '2021-12-23 14:14:55',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'status_id' => 3,
                'transaction_id' => 2,
                'status' => 'SEDANG DI KIRIM',
                'notes' => NULL,
                'created_at' => '2021-12-23 14:15:26',
                'updated_at' => '2021-12-23 14:15:26',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'status_id' => 2,
                'transaction_id' => 1,
                'status' => 'SEDANG DI PROSES',
                'notes' => NULL,
                'created_at' => '2022-01-15 16:25:54',
                'updated_at' => '2022-01-15 16:25:54',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'status_id' => 2,
                'transaction_id' => 1,
                'status' => 'SEDANG DI PROSES',
                'notes' => NULL,
                'created_at' => '2022-01-15 16:32:03',
                'updated_at' => '2022-01-15 16:32:03',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}