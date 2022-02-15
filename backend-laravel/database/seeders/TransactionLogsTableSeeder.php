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
                'transaction_id' => 1,
                'status' => 'MENUNGGU PEMBAYARAN',
                'notes' => NULL,
                'created_at' => '2022-02-02 13:38:47',
                'updated_at' => '2022-02-02 13:38:47',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'status_id' => 2,
                'transaction_id' => 1,
                'status' => 'SEDANG DI PROSES',
                'notes' => NULL,
                'created_at' => '2022-02-02 19:49:18',
                'updated_at' => '2022-02-02 19:49:18',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'status_id' => 2,
                'transaction_id' => 1,
                'status' => 'SEDANG DI PROSES',
                'notes' => NULL,
                'created_at' => '2022-02-02 19:49:24',
                'updated_at' => '2022-02-02 19:49:24',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'status_id' => 2,
                'transaction_id' => 1,
                'status' => 'SEDANG DI PROSES',
                'notes' => NULL,
                'created_at' => '2022-02-02 19:52:01',
                'updated_at' => '2022-02-02 19:52:01',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'status_id' => 2,
                'transaction_id' => 1,
                'status' => 'SEDANG DI PROSES',
                'notes' => NULL,
                'created_at' => '2022-02-02 19:52:51',
                'updated_at' => '2022-02-02 19:52:51',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'status_id' => 2,
                'transaction_id' => 1,
                'status' => 'SEDANG DI PROSES',
                'notes' => NULL,
                'created_at' => '2022-02-02 19:55:45',
                'updated_at' => '2022-02-02 19:55:45',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'status_id' => 2,
                'transaction_id' => 1,
                'status' => 'SEDANG DI PROSES',
                'notes' => NULL,
                'created_at' => '2022-02-02 19:57:58',
                'updated_at' => '2022-02-02 19:57:58',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'status_id' => 2,
                'transaction_id' => 1,
                'status' => 'SEDANG DI PROSES',
                'notes' => NULL,
                'created_at' => '2022-02-02 20:00:29',
                'updated_at' => '2022-02-02 20:00:29',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'status_id' => 2,
                'transaction_id' => 1,
                'status' => 'SEDANG DI PROSES',
                'notes' => NULL,
                'created_at' => '2022-02-02 20:18:08',
                'updated_at' => '2022-02-02 20:18:08',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'status_id' => 3,
                'transaction_id' => 1,
                'status' => 'SEDANG DI KIRIM',
                'notes' => NULL,
                'created_at' => '2022-02-03 20:14:12',
                'updated_at' => '2022-02-03 20:14:12',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'status_id' => 4,
                'transaction_id' => 1,
                'status' => 'SELESAI',
                'notes' => NULL,
                'created_at' => '2022-02-03 20:25:57',
                'updated_at' => '2022-02-03 20:25:57',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'status_id' => 4,
                'transaction_id' => 1,
                'status' => 'SELESAI',
                'notes' => NULL,
                'created_at' => '2022-02-03 20:28:00',
                'updated_at' => '2022-02-03 20:28:00',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'status_id' => 4,
                'transaction_id' => 1,
                'status' => 'SELESAI',
                'notes' => NULL,
                'created_at' => '2022-02-03 20:28:40',
                'updated_at' => '2022-02-03 20:28:40',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'status_id' => 1,
                'transaction_id' => 2,
                'status' => 'MENUNGGU PEMBAYARAN',
                'notes' => NULL,
                'created_at' => '2022-02-05 17:42:43',
                'updated_at' => '2022-02-05 17:42:43',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'status_id' => 1,
                'transaction_id' => 3,
                'status' => 'MENUNGGU PEMBAYARAN',
                'notes' => NULL,
                'created_at' => '2022-02-15 17:40:47',
                'updated_at' => '2022-02-15 17:40:47',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'status_id' => 2,
                'transaction_id' => 3,
                'status' => 'SEDANG DI PROSES',
                'notes' => NULL,
                'created_at' => '2022-02-15 17:51:02',
                'updated_at' => '2022-02-15 17:51:02',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'status_id' => 3,
                'transaction_id' => 3,
                'status' => 'SEDANG DI KIRIM',
                'notes' => NULL,
                'created_at' => '2022-02-15 17:53:35',
                'updated_at' => '2022-02-15 17:53:35',
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'status_id' => 4,
                'transaction_id' => 3,
                'status' => 'SELESAI',
                'notes' => NULL,
                'created_at' => '2022-02-15 17:53:41',
                'updated_at' => '2022-02-15 17:53:41',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}