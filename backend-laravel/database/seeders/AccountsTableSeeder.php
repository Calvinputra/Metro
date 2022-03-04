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
                'id' => 1,
                'code' => '1000',
                'name' => 'Saldo',
                'balance' => 41796000.0,
                'created_at' => NULL,
                'updated_at' => '2022-03-01 13:31:07',
            ),
            1 => 
            array (
                'id' => 2,
                'code' => '2000',
                'name' => 'Saldo ditahan',
                'balance' => -11748000.0,
                'created_at' => NULL,
                'updated_at' => '2022-03-01 13:31:07',
            ),
        ));
        
        
    }
}