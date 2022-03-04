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
            18 => 
            array (
                'id' => 19,
                'status_id' => 1,
                'transaction_id' => 2,
                'status' => 'KODE PEMBAYARAN EXPIRED',
                'notes' => NULL,
                'created_at' => '2022-02-18 19:29:12',
                'updated_at' => '2022-02-18 19:29:12',
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'status_id' => 1,
                'transaction_id' => 4,
                'status' => 'MENUNGGU PEMBAYARAN',
                'notes' => NULL,
                'created_at' => '2022-02-18 19:35:46',
                'updated_at' => '2022-02-18 19:35:46',
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'status_id' => 1,
                'transaction_id' => 5,
                'status' => 'MENUNGGU PEMBAYARAN',
                'notes' => NULL,
                'created_at' => '2022-02-24 14:38:54',
                'updated_at' => '2022-02-24 14:38:54',
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'status_id' => 1,
                'transaction_id' => 6,
                'status' => 'MENUNGGU PEMBAYARAN',
                'notes' => NULL,
                'created_at' => '2022-02-24 14:39:08',
                'updated_at' => '2022-02-24 14:39:08',
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'status_id' => 1,
                'transaction_id' => 7,
                'status' => 'MENUNGGU PEMBAYARAN',
                'notes' => NULL,
                'created_at' => '2022-02-24 14:40:14',
                'updated_at' => '2022-02-24 14:40:14',
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'status_id' => 1,
                'transaction_id' => 5,
                'status' => 'KODE PEMBAYARAN EXPIRED',
                'notes' => NULL,
                'created_at' => '2022-02-25 20:50:04',
                'updated_at' => '2022-02-25 20:50:04',
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'status_id' => 1,
                'transaction_id' => 5,
                'status' => 'KODE PEMBAYARAN EXPIRED',
                'notes' => NULL,
                'created_at' => '2022-02-25 20:52:47',
                'updated_at' => '2022-02-25 20:52:47',
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'status_id' => 1,
                'transaction_id' => 5,
                'status' => 'KODE PEMBAYARAN EXPIRED',
                'notes' => NULL,
                'created_at' => '2022-02-25 20:56:38',
                'updated_at' => '2022-02-25 20:56:38',
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'status_id' => 1,
                'transaction_id' => 5,
                'status' => 'KODE PEMBAYARAN EXPIRED',
                'notes' => NULL,
                'created_at' => '2022-02-25 20:57:21',
                'updated_at' => '2022-02-25 20:57:21',
                'deleted_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'status_id' => 1,
                'transaction_id' => 5,
                'status' => 'KODE PEMBAYARAN EXPIRED',
                'notes' => NULL,
                'created_at' => '2022-02-25 20:58:43',
                'updated_at' => '2022-02-25 20:58:43',
                'deleted_at' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'status_id' => 1,
                'transaction_id' => 5,
                'status' => 'KODE PEMBAYARAN EXPIRED',
                'notes' => NULL,
                'created_at' => '2022-02-25 20:59:05',
                'updated_at' => '2022-02-25 20:59:05',
                'deleted_at' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'status_id' => 1,
                'transaction_id' => 5,
                'status' => 'KODE PEMBAYARAN EXPIRED',
                'notes' => NULL,
                'created_at' => '2022-02-25 21:02:18',
                'updated_at' => '2022-02-25 21:02:18',
                'deleted_at' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'status_id' => 1,
                'transaction_id' => 5,
                'status' => 'KODE PEMBAYARAN EXPIRED',
                'notes' => NULL,
                'created_at' => '2022-02-25 21:04:03',
                'updated_at' => '2022-02-25 21:04:03',
                'deleted_at' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'status_id' => 1,
                'transaction_id' => 5,
                'status' => 'KODE PEMBAYARAN EXPIRED',
                'notes' => NULL,
                'created_at' => '2022-02-25 21:24:47',
                'updated_at' => '2022-02-25 21:24:47',
                'deleted_at' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'status_id' => 1,
                'transaction_id' => 5,
                'status' => 'KODE PEMBAYARAN EXPIRED',
                'notes' => NULL,
                'created_at' => '2022-02-25 21:26:57',
                'updated_at' => '2022-02-25 21:26:57',
                'deleted_at' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
                'status_id' => 1,
                'transaction_id' => 5,
                'status' => 'KODE PEMBAYARAN EXPIRED',
                'notes' => NULL,
                'created_at' => '2022-02-25 21:28:00',
                'updated_at' => '2022-02-25 21:28:00',
                'deleted_at' => NULL,
            ),
            34 => 
            array (
                'id' => 35,
                'status_id' => 1,
                'transaction_id' => 5,
                'status' => 'KODE PEMBAYARAN EXPIRED',
                'notes' => NULL,
                'created_at' => '2022-02-25 21:29:47',
                'updated_at' => '2022-02-25 21:29:47',
                'deleted_at' => NULL,
            ),
            35 => 
            array (
                'id' => 36,
                'status_id' => 1,
                'transaction_id' => 5,
                'status' => 'KODE PEMBAYARAN EXPIRED',
                'notes' => NULL,
                'created_at' => '2022-02-25 21:30:56',
                'updated_at' => '2022-02-25 21:30:56',
                'deleted_at' => NULL,
            ),
            36 => 
            array (
                'id' => 37,
                'status_id' => 1,
                'transaction_id' => 5,
                'status' => 'KODE PEMBAYARAN EXPIRED',
                'notes' => NULL,
                'created_at' => '2022-02-25 21:31:56',
                'updated_at' => '2022-02-25 21:31:56',
                'deleted_at' => NULL,
            ),
            37 => 
            array (
                'id' => 38,
                'status_id' => 1,
                'transaction_id' => 8,
                'status' => 'MENUNGGU PEMBAYARAN',
                'notes' => NULL,
                'created_at' => '2022-03-01 12:48:41',
                'updated_at' => '2022-03-01 12:48:41',
                'deleted_at' => NULL,
            ),
            38 => 
            array (
                'id' => 39,
                'status_id' => 1,
                'transaction_id' => 6,
                'status' => 'KODE PEMBAYARAN EXPIRED',
                'notes' => NULL,
                'created_at' => '2022-03-01 13:12:30',
                'updated_at' => '2022-03-01 13:12:30',
                'deleted_at' => NULL,
            ),
            39 => 
            array (
                'id' => 40,
                'status_id' => 2,
                'transaction_id' => 8,
                'status' => 'SEDANG DI PROSES',
                'notes' => NULL,
                'created_at' => '2022-03-01 13:12:37',
                'updated_at' => '2022-03-01 13:12:37',
                'deleted_at' => NULL,
            ),
            40 => 
            array (
                'id' => 41,
                'status_id' => 1,
                'transaction_id' => 2,
                'status' => 'KODE PEMBAYARAN EXPIRED',
                'notes' => NULL,
                'created_at' => '2022-03-01 13:12:59',
                'updated_at' => '2022-03-01 13:12:59',
                'deleted_at' => NULL,
            ),
            41 => 
            array (
                'id' => 42,
                'status_id' => 3,
                'transaction_id' => 8,
                'status' => 'SEDANG DI KIRIM',
                'notes' => NULL,
                'created_at' => '2022-03-01 13:30:33',
                'updated_at' => '2022-03-01 13:30:33',
                'deleted_at' => NULL,
            ),
            42 => 
            array (
                'id' => 43,
                'status_id' => 4,
                'transaction_id' => 8,
                'status' => 'SELESAI',
                'notes' => NULL,
                'created_at' => '2022-03-01 13:31:05',
                'updated_at' => '2022-03-01 13:31:05',
                'deleted_at' => NULL,
            ),
            43 => 
            array (
                'id' => 44,
                'status_id' => 1,
                'transaction_id' => 9,
                'status' => 'MENUNGGU PEMBAYARAN',
                'notes' => NULL,
                'created_at' => '2022-03-02 10:02:31',
                'updated_at' => '2022-03-02 10:02:31',
                'deleted_at' => NULL,
            ),
            44 => 
            array (
                'id' => 45,
                'status_id' => 1,
                'transaction_id' => 10,
                'status' => 'MENUNGGU PEMBAYARAN',
                'notes' => NULL,
                'created_at' => '2022-03-02 10:11:13',
                'updated_at' => '2022-03-02 10:11:13',
                'deleted_at' => NULL,
            ),
            45 => 
            array (
                'id' => 46,
                'status_id' => 1,
                'transaction_id' => 11,
                'status' => 'MENUNGGU PEMBAYARAN',
                'notes' => NULL,
                'created_at' => '2022-03-02 22:37:20',
                'updated_at' => '2022-03-02 22:37:20',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}