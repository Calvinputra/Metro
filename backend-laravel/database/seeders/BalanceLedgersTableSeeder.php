<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BalanceLedgersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('balance_ledgers')->delete();
        
        
        
    }
}