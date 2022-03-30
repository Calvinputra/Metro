<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AccountsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('accounts')->delete();
        
        \DB::table('accounts')->insert(array (
            0 => 
            array (
                'balance' => '36547000',
                'code' => '1000',
                'created_at' => NULL,
                'id' => '1',
                'name' => 'Saldo',
                'updated_at' => '2022-03-13 20:30:13',
            ),
            1 => 
            array (
                'balance' => '30383500',
                'code' => '2000',
                'created_at' => NULL,
                'id' => '2',
                'name' => 'Saldo ditahan',
                'updated_at' => '2022-03-16 13:45:55',
            ),
        ));
        
        
    }
}