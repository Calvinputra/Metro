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
                'created_at' => '2022-01-22 13:28:37',
                'updated_at' => '2022-01-22 13:28:37',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'status_id' => 3,
                'transaction_id' => 1,
                'status' => 'SEDANG DI KIRIM',
                'notes' => NULL,
                'created_at' => '2022-01-27 13:50:50',
                'updated_at' => '2022-01-27 13:50:50',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}