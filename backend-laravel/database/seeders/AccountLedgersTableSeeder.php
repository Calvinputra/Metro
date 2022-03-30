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
                'account_id' => '2',
                'created_at' => '2022-03-06 12:28:45',
                'description' => 'Transfer dari Lia Lai invoice 2afe246f-2ddc-4b4d-b90d-a232bccf2371',
                'id' => '11',
                'transaction_id' => '7',
                'updated_at' => '2022-03-06 12:28:45',
                'value' => '262000',
            ),
            1 => 
            array (
                'account_id' => '2',
                'created_at' => '2022-03-06 12:35:59',
                'description' => 'Transaksi selesai atas nama Lia Lai invoice 2afe246f-2ddc-4b4d-b90d-a232bccf2371',
                'id' => '12',
                'transaction_id' => '7',
                'updated_at' => '2022-03-06 12:35:59',
                'value' => '-262000',
            ),
            2 => 
            array (
                'account_id' => '1',
                'created_at' => '2022-03-06 12:35:59',
                'description' => 'Transaksi selesai atas nama Lia Lai invoice 2afe246f-2ddc-4b4d-b90d-a232bccf2371',
                'id' => '13',
                'transaction_id' => '7',
                'updated_at' => '2022-03-06 12:35:59',
                'value' => '262000',
            ),
            3 => 
            array (
                'account_id' => '2',
                'created_at' => '2022-03-06 14:04:35',
                'description' => 'Transfer dari Lia Lai invoice a570b457-02b3-4689-bc81-3c7e82cdcebe',
                'id' => '14',
                'transaction_id' => '8',
                'updated_at' => '2022-03-06 14:04:35',
                'value' => '11431500',
            ),
            4 => 
            array (
                'account_id' => '2',
                'created_at' => '2022-03-06 14:09:27',
                'description' => 'Transaksi selesai atas nama Lia Lai invoice a570b457-02b3-4689-bc81-3c7e82cdcebe',
                'id' => '15',
                'transaction_id' => '8',
                'updated_at' => '2022-03-06 14:09:27',
                'value' => '-11431500',
            ),
            5 => 
            array (
                'account_id' => '1',
                'created_at' => '2022-03-06 14:09:27',
                'description' => 'Transaksi selesai atas nama Lia Lai invoice a570b457-02b3-4689-bc81-3c7e82cdcebe',
                'id' => '16',
                'transaction_id' => '8',
                'updated_at' => '2022-03-06 14:09:27',
                'value' => '11431500',
            ),
            6 => 
            array (
                'account_id' => '2',
                'created_at' => '2022-03-06 16:02:34',
                'description' => 'Transfer dari Lia Lai invoice 2035d335-cba0-45c7-9f85-402e00321102',
                'id' => '17',
                'transaction_id' => '12',
                'updated_at' => '2022-03-06 16:02:34',
                'value' => '11431500',
            ),
            7 => 
            array (
                'account_id' => '2',
                'created_at' => '2022-03-06 23:00:15',
                'description' => 'Transfer dari Jason Renata invoice aa05f9e2-deaa-4585-9d9d-dd1f14b4826f',
                'id' => '19',
                'transaction_id' => '14',
                'updated_at' => '2022-03-06 23:00:15',
                'value' => '11188500',
            ),
            8 => 
            array (
                'account_id' => '2',
                'created_at' => '2022-03-13 19:11:18',
                'description' => 'Transfer dari Lia Lai invoice 7db038f1-3f86-4e49-b5d9-63959b20d1f6',
                'id' => '20',
                'transaction_id' => '15',
                'updated_at' => '2022-03-13 19:11:18',
                'value' => '8568500',
            ),
            9 => 
            array (
                'account_id' => '2',
                'created_at' => '2022-03-13 19:12:27',
                'description' => 'Transaksi selesai atas nama Lia Lai invoice 7db038f1-3f86-4e49-b5d9-63959b20d1f6',
                'id' => '21',
                'transaction_id' => '15',
                'updated_at' => '2022-03-13 19:12:27',
                'value' => '-8568500',
            ),
            10 => 
            array (
                'account_id' => '1',
                'created_at' => '2022-03-13 19:12:27',
                'description' => 'Transaksi selesai atas nama Lia Lai invoice 7db038f1-3f86-4e49-b5d9-63959b20d1f6',
                'id' => '22',
                'transaction_id' => '15',
                'updated_at' => '2022-03-13 19:12:27',
                'value' => '8568500',
            ),
            11 => 
            array (
                'account_id' => '2',
                'created_at' => '2022-03-13 19:15:11',
                'description' => 'Transfer dari Lia Lai invoice da37aa5f-97af-45f4-a551-cc4717356fc6',
                'id' => '23',
                'transaction_id' => '16',
                'updated_at' => '2022-03-13 19:15:11',
                'value' => '1102000',
            ),
            12 => 
            array (
                'account_id' => '2',
                'created_at' => '2022-03-13 19:17:28',
                'description' => 'Transfer dari Lia Lai invoice 82e3a1a2-5201-4c90-bfab-07b4af630d18',
                'id' => '24',
                'transaction_id' => '17',
                'updated_at' => '2022-03-13 19:17:28',
                'value' => '275000',
            ),
            13 => 
            array (
                'account_id' => '2',
                'created_at' => '2022-03-13 19:33:44',
                'description' => 'Transfer dari Lia Lai invoice efe67cf8-c1d7-46ae-bcd0-f7b0568b4ced',
                'id' => '25',
                'transaction_id' => '18',
                'updated_at' => '2022-03-13 19:33:44',
                'value' => '10827000',
            ),
            14 => 
            array (
                'account_id' => '2',
                'created_at' => '2022-03-13 19:51:26',
                'description' => 'Transfer dari Lia Lai invoice bd32d088-a2d1-4d9e-b135-62116c98b08a',
                'id' => '26',
                'transaction_id' => '20',
                'updated_at' => '2022-03-13 19:51:26',
                'value' => '1429000',
            ),
            15 => 
            array (
                'account_id' => '2',
                'created_at' => '2022-03-13 20:30:12',
                'description' => 'Transaksi selesai atas nama Lia Lai invoice bd32d088-a2d1-4d9e-b135-62116c98b08a',
                'id' => '27',
                'transaction_id' => '20',
                'updated_at' => '2022-03-13 20:30:12',
                'value' => '-1429000',
            ),
            16 => 
            array (
                'account_id' => '1',
                'created_at' => '2022-03-13 20:30:12',
                'description' => 'Transaksi selesai atas nama Lia Lai invoice bd32d088-a2d1-4d9e-b135-62116c98b08a',
                'id' => '28',
                'transaction_id' => '20',
                'updated_at' => '2022-03-13 20:30:12',
                'value' => '1429000',
            ),
        ));
        
        
    }
}