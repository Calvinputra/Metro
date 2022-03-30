<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TransactionStatusesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('transaction_statuses')->delete();
        
        \DB::table('transaction_statuses')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'MENUNGGU PEMBAYARAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'SEDANG DI PROSES',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'SEDANG DI KIRIM',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'SELESAI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'GAGAL',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}