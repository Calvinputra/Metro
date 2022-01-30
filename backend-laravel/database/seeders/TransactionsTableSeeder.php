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
                'id' => 1,
                'uuid' => 'a81c49d6-4278-4fe6-b1de-1bfeda5ce6a1',
                'admin_id' => 1,
                'customer_id' => 1,
                'status_id' => 4,
                'snap_token' => '94a0d3ef-475e-4a8d-b18e-c8ff10ec3399',
                'resi_no' => '12345612312',
                'customer_name' => 'Jonathan Jonathan',
                'customer_email' => 'Jonathanchang96@gmail.com',
                'customer_phone' => '08988606069',
                'date' => '2022-01-27 13:53:32',
                'weight' => 3100.0,
                'total_price' => 4450000.0,
                'shipping_cost' => 54000.0,
                'shipping_multiplier' => 1.0,
                'total_shipping_cost' => 54000.0,
                'discount' => 0.0,
                'grand_total' => 4504000.0,
                'shipping_recipient_name' => 'Jonathan Jonathan',
                'shipping_recipient_number' => '08988606069',
                'shipping_address' => 'Kav hankam Blok W2 No 6b',
                'shipping_postal_code' => '11640',
                'shipping_country_id' => 1,
                'shipping_province_id' => 6,
                'shipping_city_id' => 151,
                'created_at' => '2022-01-22 13:28:37',
                'updated_at' => '2022-01-27 13:50:50',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}