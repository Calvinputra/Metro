<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TransactionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('transactions')->delete();
        
        \DB::table('transactions')->insert(array (
            0 => 
            array (
                'id' => 2,
                'uuid' => 'da8168ba-fcfe-45ea-b457-8a671971f383',
                'customer_name' => 'Jonathan Jonathan',
                'customer_email' => 'Jonathanchang96@gmail.com',
                'customer_phone' => '08988606069',
                'date' => '2021-12-03 14:05:00',
                'weight' => 2000.0,
                'total_price' => 275000.0,
                'shipping_cost' => 30000.0,
                'shipping_multiplier' => 2.0,
                'total_shipping_cost' => 60000.0,
                'grand_total' => 310000.0,
                'discount' => 15000.0,
                'admin_id' => 1,
                'customer_id' => 1,
                'status_id' => 1,
                'shipping_recipient_name' => 'Jonathan',
                'shipping_recipient_number' => '08988606069',
                'shipping_address' => 'Kav Hankam W2 no 6b',
                'shipping_postal_code' => '11110',
                'shipping_country_id' => 1,
                'shipping_province_id' => 1,
                'shipping_city_id' => 1,
                'created_at' => '2021-12-03 07:08:28',
                'updated_at' => '2021-12-03 07:08:28',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}