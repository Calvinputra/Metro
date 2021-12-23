<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CustomerTokensTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('customer_tokens')->delete();
        
        \DB::table('customer_tokens')->insert(array (
            0 => 
            array (
                'id' => 1,
                'customer_id' => 8,
                'token' => 'lsyBv4wbbGGVGJlAYVZRyaioLO5YVOQh4QoCUHTr',
                'type' => 'REGISTER CONFIRMATION TOKEN',
                'used' => 1,
                'expired_at' => '2021-12-16 16:23:07',
                'created_at' => '2021-12-13 16:23:07',
                'updated_at' => '2021-12-13 16:24:07',
            ),
            1 => 
            array (
                'id' => 2,
                'customer_id' => 1,
                'token' => 'IxyAUGS8DenuS6Mgl1AZN1P1xfz1lDuuO2t45R1y',
                'type' => 'RESET PASSWORD TOKEN',
                'used' => 1,
                'expired_at' => '2021-12-14 11:00:00',
                'created_at' => '2021-12-14 09:54:46',
                'updated_at' => '2021-12-14 10:05:56',
            ),
            2 => 
            array (
                'id' => 3,
                'customer_id' => 1,
                'token' => '4hjLbuJEwVG6C4hnDcOFxchztBkFPrxatN6v4Zir',
                'type' => 'RESET PASSWORD TOKEN',
                'used' => 0,
                'expired_at' => '2021-12-17 10:07:11',
                'created_at' => '2021-12-14 10:07:11',
                'updated_at' => '2021-12-14 10:07:11',
            ),
        ));
        
        
    }
}