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
                'created_at' => NULL,
                'id' => '1',
                'name' => 'MENUNGGU PEMBAYARAN',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'created_at' => NULL,
                'id' => '2',
                'name' => 'SEDANG DI PROSES',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'created_at' => NULL,
                'id' => '3',
                'name' => 'SEDANG DI KIRIM',
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'created_at' => NULL,
                'id' => '4',
                'name' => 'SELESAI',
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'created_at' => NULL,
                'id' => '5',
                'name' => 'GAGAL',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}