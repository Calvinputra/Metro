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
                'created_at' => '2022-03-06 12:16:42',
                'deleted_at' => NULL,
                'id' => '20',
                'notes' => NULL,
                'status' => 'MENUNGGU PEMBAYARAN',
                'status_id' => '1',
                'transaction_id' => '5',
                'updated_at' => '2022-03-06 12:16:42',
            ),
            1 => 
            array (
                'created_at' => '2022-03-06 12:26:29',
                'deleted_at' => NULL,
                'id' => '21',
                'notes' => NULL,
                'status' => 'MENUNGGU PEMBAYARAN',
                'status_id' => '1',
                'transaction_id' => '6',
                'updated_at' => '2022-03-06 12:26:29',
            ),
            2 => 
            array (
                'created_at' => '2022-03-06 12:27:13',
                'deleted_at' => NULL,
                'id' => '22',
                'notes' => NULL,
                'status' => 'MENUNGGU PEMBAYARAN',
                'status_id' => '1',
                'transaction_id' => '7',
                'updated_at' => '2022-03-06 12:27:13',
            ),
            3 => 
            array (
                'created_at' => '2022-03-06 12:28:45',
                'deleted_at' => NULL,
                'id' => '23',
                'notes' => NULL,
                'status' => 'SEDANG DI PROSES',
                'status_id' => '2',
                'transaction_id' => '7',
                'updated_at' => '2022-03-06 12:28:45',
            ),
            4 => 
            array (
                'created_at' => '2022-03-06 12:35:33',
                'deleted_at' => NULL,
                'id' => '24',
                'notes' => NULL,
                'status' => 'SEDANG DI KIRIM',
                'status_id' => '3',
                'transaction_id' => '7',
                'updated_at' => '2022-03-06 12:35:33',
            ),
            5 => 
            array (
                'created_at' => '2022-03-06 12:35:59',
                'deleted_at' => NULL,
                'id' => '25',
                'notes' => NULL,
                'status' => 'SELESAI',
                'status_id' => '4',
                'transaction_id' => '7',
                'updated_at' => '2022-03-06 12:35:59',
            ),
            6 => 
            array (
                'created_at' => '2022-03-06 12:38:54',
                'deleted_at' => NULL,
                'id' => '26',
                'notes' => NULL,
                'status' => 'KODE PEMBAYARAN EXPIRED',
                'status_id' => '1',
                'transaction_id' => '5',
                'updated_at' => '2022-03-06 12:38:54',
            ),
            7 => 
            array (
                'created_at' => '2022-03-06 12:42:34',
                'deleted_at' => NULL,
                'id' => '27',
                'notes' => NULL,
                'status' => 'KODE PEMBAYARAN EXPIRED',
                'status_id' => '1',
                'transaction_id' => '6',
                'updated_at' => '2022-03-06 12:42:34',
            ),
            8 => 
            array (
                'created_at' => '2022-03-06 13:56:21',
                'deleted_at' => NULL,
                'id' => '28',
                'notes' => NULL,
                'status' => 'MENUNGGU PEMBAYARAN',
                'status_id' => '1',
                'transaction_id' => '8',
                'updated_at' => '2022-03-06 13:56:21',
            ),
            9 => 
            array (
                'created_at' => '2022-03-06 14:04:35',
                'deleted_at' => NULL,
                'id' => '30',
                'notes' => NULL,
                'status' => 'SEDANG DI PROSES',
                'status_id' => '2',
                'transaction_id' => '8',
                'updated_at' => '2022-03-06 14:04:35',
            ),
            10 => 
            array (
                'created_at' => '2022-03-06 14:08:02',
                'deleted_at' => NULL,
                'id' => '32',
                'notes' => NULL,
                'status' => 'SEDANG DI KIRIM',
                'status_id' => '3',
                'transaction_id' => '8',
                'updated_at' => '2022-03-06 14:08:02',
            ),
            11 => 
            array (
                'created_at' => '2022-03-06 14:09:27',
                'deleted_at' => NULL,
                'id' => '33',
                'notes' => NULL,
                'status' => 'SELESAI',
                'status_id' => '4',
                'transaction_id' => '8',
                'updated_at' => '2022-03-06 14:09:27',
            ),
            12 => 
            array (
                'created_at' => '2022-03-06 14:13:56',
                'deleted_at' => NULL,
                'id' => '34',
                'notes' => NULL,
                'status' => 'MENUNGGU PEMBAYARAN',
                'status_id' => '1',
                'transaction_id' => '10',
                'updated_at' => '2022-03-06 14:13:56',
            ),
            13 => 
            array (
                'created_at' => '2022-03-06 15:52:06',
                'deleted_at' => NULL,
                'id' => '37',
                'notes' => NULL,
                'status' => 'MENUNGGU PEMBAYARAN',
                'status_id' => '1',
                'transaction_id' => '12',
                'updated_at' => '2022-03-06 15:52:06',
            ),
            14 => 
            array (
                'created_at' => '2022-03-06 16:02:34',
                'deleted_at' => NULL,
                'id' => '38',
                'notes' => NULL,
                'status' => 'SEDANG DI PROSES',
                'status_id' => '2',
                'transaction_id' => '12',
                'updated_at' => '2022-03-06 16:02:34',
            ),
            15 => 
            array (
                'created_at' => '2022-03-06 16:07:03',
                'deleted_at' => NULL,
                'id' => '39',
                'notes' => NULL,
                'status' => 'SEDANG DI KIRIM',
                'status_id' => '3',
                'transaction_id' => '12',
                'updated_at' => '2022-03-06 16:07:03',
            ),
            16 => 
            array (
                'created_at' => '2022-03-06 22:59:47',
                'deleted_at' => NULL,
                'id' => '42',
                'notes' => NULL,
                'status' => 'MENUNGGU PEMBAYARAN',
                'status_id' => '1',
                'transaction_id' => '14',
                'updated_at' => '2022-03-06 22:59:47',
            ),
            17 => 
            array (
                'created_at' => '2022-03-06 23:00:15',
                'deleted_at' => NULL,
                'id' => '43',
                'notes' => NULL,
                'status' => 'SEDANG DI PROSES',
                'status_id' => '2',
                'transaction_id' => '14',
                'updated_at' => '2022-03-06 23:00:15',
            ),
            18 => 
            array (
                'created_at' => '2022-03-13 19:10:40',
                'deleted_at' => NULL,
                'id' => '44',
                'notes' => NULL,
                'status' => 'MENUNGGU PEMBAYARAN',
                'status_id' => '1',
                'transaction_id' => '15',
                'updated_at' => '2022-03-13 19:10:40',
            ),
            19 => 
            array (
                'created_at' => '2022-03-13 19:11:18',
                'deleted_at' => NULL,
                'id' => '45',
                'notes' => NULL,
                'status' => 'SEDANG DI PROSES',
                'status_id' => '2',
                'transaction_id' => '15',
                'updated_at' => '2022-03-13 19:11:18',
            ),
            20 => 
            array (
                'created_at' => '2022-03-13 19:12:23',
                'deleted_at' => NULL,
                'id' => '46',
                'notes' => NULL,
                'status' => 'SEDANG DI KIRIM',
                'status_id' => '3',
                'transaction_id' => '15',
                'updated_at' => '2022-03-13 19:12:23',
            ),
            21 => 
            array (
                'created_at' => '2022-03-13 19:12:27',
                'deleted_at' => NULL,
                'id' => '47',
                'notes' => NULL,
                'status' => 'SELESAI',
                'status_id' => '4',
                'transaction_id' => '15',
                'updated_at' => '2022-03-13 19:12:27',
            ),
            22 => 
            array (
                'created_at' => '2022-03-13 19:12:39',
                'deleted_at' => NULL,
                'id' => '48',
                'notes' => NULL,
                'status' => 'SEDANG DI KIRIM',
                'status_id' => '3',
                'transaction_id' => '14',
                'updated_at' => '2022-03-13 19:12:39',
            ),
            23 => 
            array (
                'created_at' => '2022-03-13 19:14:41',
                'deleted_at' => NULL,
                'id' => '49',
                'notes' => NULL,
                'status' => 'MENUNGGU PEMBAYARAN',
                'status_id' => '1',
                'transaction_id' => '16',
                'updated_at' => '2022-03-13 19:14:41',
            ),
            24 => 
            array (
                'created_at' => '2022-03-13 19:15:11',
                'deleted_at' => NULL,
                'id' => '50',
                'notes' => NULL,
                'status' => 'SEDANG DI PROSES',
                'status_id' => '2',
                'transaction_id' => '16',
                'updated_at' => '2022-03-13 19:15:11',
            ),
            25 => 
            array (
                'created_at' => '2022-03-13 19:16:53',
                'deleted_at' => NULL,
                'id' => '51',
                'notes' => NULL,
                'status' => 'MENUNGGU PEMBAYARAN',
                'status_id' => '1',
                'transaction_id' => '17',
                'updated_at' => '2022-03-13 19:16:53',
            ),
            26 => 
            array (
                'created_at' => '2022-03-13 19:17:28',
                'deleted_at' => NULL,
                'id' => '52',
                'notes' => NULL,
                'status' => 'SEDANG DI PROSES',
                'status_id' => '2',
                'transaction_id' => '17',
                'updated_at' => '2022-03-13 19:17:28',
            ),
            27 => 
            array (
                'created_at' => '2022-03-13 19:19:37',
                'deleted_at' => NULL,
                'id' => '53',
                'notes' => NULL,
                'status' => 'SEDANG DI KIRIM',
                'status_id' => '3',
                'transaction_id' => '17',
                'updated_at' => '2022-03-13 19:19:37',
            ),
            28 => 
            array (
                'created_at' => '2022-03-13 19:31:54',
                'deleted_at' => NULL,
                'id' => '54',
                'notes' => NULL,
                'status' => 'MENUNGGU PEMBAYARAN',
                'status_id' => '1',
                'transaction_id' => '18',
                'updated_at' => '2022-03-13 19:31:54',
            ),
            29 => 
            array (
                'created_at' => '2022-03-13 19:33:44',
                'deleted_at' => NULL,
                'id' => '55',
                'notes' => NULL,
                'status' => 'SEDANG DI PROSES',
                'status_id' => '2',
                'transaction_id' => '18',
                'updated_at' => '2022-03-13 19:33:44',
            ),
            30 => 
            array (
                'created_at' => '2022-03-13 19:34:33',
                'deleted_at' => NULL,
                'id' => '56',
                'notes' => NULL,
                'status' => 'SEDANG DI KIRIM',
                'status_id' => '3',
                'transaction_id' => '18',
                'updated_at' => '2022-03-13 19:34:33',
            ),
            31 => 
            array (
                'created_at' => '2022-03-13 19:48:02',
                'deleted_at' => NULL,
                'id' => '57',
                'notes' => NULL,
                'status' => 'MENUNGGU PEMBAYARAN',
                'status_id' => '1',
                'transaction_id' => '19',
                'updated_at' => '2022-03-13 19:48:02',
            ),
            32 => 
            array (
                'created_at' => '2022-03-13 19:51:07',
                'deleted_at' => NULL,
                'id' => '58',
                'notes' => NULL,
                'status' => 'MENUNGGU PEMBAYARAN',
                'status_id' => '1',
                'transaction_id' => '20',
                'updated_at' => '2022-03-13 19:51:07',
            ),
            33 => 
            array (
                'created_at' => '2022-03-13 19:51:26',
                'deleted_at' => NULL,
                'id' => '59',
                'notes' => NULL,
                'status' => 'SEDANG DI PROSES',
                'status_id' => '2',
                'transaction_id' => '20',
                'updated_at' => '2022-03-13 19:51:26',
            ),
            34 => 
            array (
                'created_at' => '2022-03-13 19:51:48',
                'deleted_at' => NULL,
                'id' => '60',
                'notes' => NULL,
                'status' => 'SEDANG DI KIRIM',
                'status_id' => '3',
                'transaction_id' => '20',
                'updated_at' => '2022-03-13 19:51:48',
            ),
            35 => 
            array (
                'created_at' => '2022-03-13 19:52:43',
                'deleted_at' => NULL,
                'id' => '61',
                'notes' => NULL,
                'status' => 'SEDANG DI KIRIM',
                'status_id' => '3',
                'transaction_id' => '20',
                'updated_at' => '2022-03-13 19:52:43',
            ),
            36 => 
            array (
                'created_at' => '2022-03-13 19:53:32',
                'deleted_at' => NULL,
                'id' => '62',
                'notes' => NULL,
                'status' => 'SEDANG DI KIRIM',
                'status_id' => '3',
                'transaction_id' => '20',
                'updated_at' => '2022-03-13 19:53:32',
            ),
            37 => 
            array (
                'created_at' => '2022-03-13 20:04:01',
                'deleted_at' => NULL,
                'id' => '63',
                'notes' => NULL,
                'status' => 'SEDANG DI KIRIM',
                'status_id' => '3',
                'transaction_id' => '20',
                'updated_at' => '2022-03-13 20:04:01',
            ),
            38 => 
            array (
                'created_at' => '2022-03-13 20:30:12',
                'deleted_at' => NULL,
                'id' => '64',
                'notes' => NULL,
                'status' => 'SELESAI',
                'status_id' => '4',
                'transaction_id' => '20',
                'updated_at' => '2022-03-13 20:30:12',
            ),
            39 => 
            array (
                'created_at' => '2022-03-14 19:48:24',
                'deleted_at' => NULL,
                'id' => '66',
                'notes' => NULL,
                'status' => 'KODE PEMBAYARAN EXPIRED',
                'status_id' => '1',
                'transaction_id' => '19',
                'updated_at' => '2022-03-14 19:48:24',
            ),
            40 => 
            array (
                'created_at' => '2022-03-18 22:07:46',
                'deleted_at' => NULL,
                'id' => '74',
                'notes' => NULL,
                'status' => 'MENUNGGU PEMBAYARAN',
                'status_id' => '1',
                'transaction_id' => '25',
                'updated_at' => '2022-03-18 22:07:46',
            ),
            41 => 
            array (
                'created_at' => '2022-03-18 22:15:43',
                'deleted_at' => NULL,
                'id' => '75',
                'notes' => NULL,
                'status' => 'MENUNGGU PEMBAYARAN',
                'status_id' => '1',
                'transaction_id' => '26',
                'updated_at' => '2022-03-18 22:15:43',
            ),
            42 => 
            array (
                'created_at' => '2022-03-27 09:18:26',
                'deleted_at' => NULL,
                'id' => '76',
                'notes' => NULL,
                'status' => 'MENUNGGU PEMBAYARAN',
                'status_id' => '1',
                'transaction_id' => '27',
                'updated_at' => '2022-03-27 09:18:26',
            ),
            43 => 
            array (
                'created_at' => '2022-03-29 21:53:30',
                'deleted_at' => NULL,
                'id' => '77',
                'notes' => NULL,
                'status' => 'MENUNGGU PEMBAYARAN',
                'status_id' => '1',
                'transaction_id' => '28',
                'updated_at' => '2022-03-29 21:53:30',
            ),
        ));
        
        
    }
}