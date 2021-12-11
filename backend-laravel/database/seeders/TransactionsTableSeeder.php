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
                'uuid' => '771e4521-e9f4-4be2-b59d-b21828bedb5d',
                'customer_name' => 'Jonathan Jonathan',
                'customer_email' => 'Jonathanchang96@gmail.com',
                'customer_phone' => '08988606069',
                'date' => '2021-12-06 00:00:00',
                'weight' => 102.0,
                'total_price' => 325000.0,
                'shipping_cost' => 9000.0,
                'shipping_multiplier' => 1.0,
                'total_shipping_cost' => 9000.0,
                'grand_total' => 334000.0,
                'discount' => 0.0,
                'admin_id' => NULL,
                'customer_id' => 1,
                'status_id' => 1,
                'shipping_recipient_name' => 'Jonathan Jonathan',
                'shipping_recipient_number' => '08988606069',
                'shipping_address' => 'Kav hankam Blok W2 No 6b',
                'shipping_postal_code' => '11640',
                'shipping_country_id' => 1,
                'shipping_province_id' => 6,
                'shipping_city_id' => 151,
                'created_at' => '2021-12-06 08:20:06',
                'updated_at' => '2021-12-06 08:20:06',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'uuid' => '32ccf9d2-ce5a-4e44-b46f-f63ba31fc36d',
                'customer_name' => 'Jonathan Jonathan',
                'customer_email' => 'Jonathanchang96@gmail.com',
                'customer_phone' => '08988606069',
                'date' => '2021-12-06 00:00:00',
                'weight' => 5602.0,
                'total_price' => 875000.0,
                'shipping_cost' => 54000.0,
                'shipping_multiplier' => 1.0,
                'total_shipping_cost' => 54000.0,
                'grand_total' => 929000.0,
                'discount' => 0.0,
                'admin_id' => NULL,
                'customer_id' => 1,
                'status_id' => 1,
                'shipping_recipient_name' => 'Jonathan Jonathan',
                'shipping_recipient_number' => '08988606069',
                'shipping_address' => 'Kav hankam Blok W2 No 6b',
                'shipping_postal_code' => '11640',
                'shipping_country_id' => 1,
                'shipping_province_id' => 6,
                'shipping_city_id' => 151,
                'created_at' => '2021-12-06 08:50:46',
                'updated_at' => '2021-12-06 08:50:46',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'uuid' => 'a55524ec-3358-43b1-ba36-74d9256b575d',
                'customer_name' => 'Jonathan Jonathan',
                'customer_email' => 'Jonathanchang96@gmail.com',
                'customer_phone' => '08988606069',
                'date' => '2021-12-09 00:00:00',
                'weight' => 500.0,
                'total_price' => 50000.0,
                'shipping_cost' => 9000.0,
                'shipping_multiplier' => 1.0,
                'total_shipping_cost' => 9000.0,
                'grand_total' => 59000.0,
                'discount' => 0.0,
                'admin_id' => NULL,
                'customer_id' => 1,
                'status_id' => 1,
                'shipping_recipient_name' => 'Jonathan Jonathan',
                'shipping_recipient_number' => '08988606069',
                'shipping_address' => 'Kav hankam Blok W2 No 6b',
                'shipping_postal_code' => '11640',
                'shipping_country_id' => 1,
                'shipping_province_id' => 6,
                'shipping_city_id' => 151,
                'created_at' => '2021-12-09 08:43:48',
                'updated_at' => '2021-12-09 08:43:48',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'uuid' => '165cfabf-5238-4db2-9f65-73b8c5ba49f6',
                'customer_name' => 'Jonathan Jonathan',
                'customer_email' => 'Jonathanchang96@gmail.com',
                'customer_phone' => '08988606069',
                'date' => '2021-12-09 00:00:00',
                'weight' => 200.0,
                'total_price' => 50000.0,
                'shipping_cost' => 9000.0,
                'shipping_multiplier' => 1.0,
                'total_shipping_cost' => 9000.0,
                'grand_total' => 59000.0,
                'discount' => 0.0,
                'admin_id' => NULL,
                'customer_id' => 1,
                'status_id' => 1,
                'shipping_recipient_name' => 'Jonathan Jonathan',
                'shipping_recipient_number' => '08988606069',
                'shipping_address' => 'Kav hankam Blok W2 No 6b',
                'shipping_postal_code' => '11640',
                'shipping_country_id' => 1,
                'shipping_province_id' => 6,
                'shipping_city_id' => 151,
                'created_at' => '2021-12-09 15:36:30',
                'updated_at' => '2021-12-09 15:36:30',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}