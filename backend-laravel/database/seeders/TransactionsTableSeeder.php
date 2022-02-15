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
                'uuid' => '1bc83b7c-0a6a-469d-baa5-271e9056cf06',
                'admin_id' => 1,
                'customer_id' => 1,
                'status_id' => 4,
                'snap_token' => 'e3341e30-6063-4797-866b-24a868cdd495',
                'resi_no' => '12312123123',
                'customer_name' => 'Jonathan Jonathan',
                'customer_email' => 'Jonathanchang96@gmail.com',
                'customer_phone' => '08988606067',
                'date' => '2022-02-03 20:28:40',
                'weight' => 7500.0,
                'total_price' => 11500000.0,
                'shipping_cost' => 248000.0,
                'shipping_multiplier' => 1.0,
                'total_shipping_cost' => 248000.0,
                'discount' => 0.0,
                'grand_total' => 11748000.0,
                'shipping_recipient_name' => 'Jonathan Jonathan',
                'shipping_recipient_number' => '08988606067',
                'shipping_address' => 'Kav hankam Blok W2 No 6b joglo',
                'shipping_postal_code' => '11640',
                'shipping_country_id' => 1,
                'shipping_province_id' => 1,
                'shipping_city_id' => 161,
                'created_at' => '2022-02-02 13:38:47',
                'updated_at' => '2022-02-03 20:28:40',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'uuid' => '46f0be97-5033-4cd4-9362-94d20e2f0f86',
                'admin_id' => NULL,
                'customer_id' => 1,
                'status_id' => 1,
                'snap_token' => '94f9e8a3-aa3b-4703-b52e-85080fa11bf7',
                'resi_no' => NULL,
                'customer_name' => 'Jonathan Jonathan',
                'customer_email' => 'Jonathanchang96@gmail.com',
                'customer_phone' => '08988606067',
                'date' => '2022-02-05 17:42:45',
                'weight' => 28000.0,
                'total_price' => 25320000.0,
                'shipping_cost' => 868000.0,
                'shipping_multiplier' => 1.0,
                'total_shipping_cost' => 868000.0,
                'discount' => 0.0,
                'grand_total' => 26188000.0,
                'shipping_recipient_name' => 'Jonathan Jonathan',
                'shipping_recipient_number' => '08988606067',
                'shipping_address' => 'Kav hankam Blok W2 No 6b joglo',
                'shipping_postal_code' => '11640',
                'shipping_country_id' => 1,
                'shipping_province_id' => 1,
                'shipping_city_id' => 161,
                'created_at' => '2022-02-05 17:42:43',
                'updated_at' => '2022-02-05 17:42:45',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'uuid' => '5591aedd-a029-4c41-8dba-dde88c96b77e',
                'admin_id' => 1,
                'customer_id' => 1,
                'status_id' => 4,
                'snap_token' => 'b90fa3f1-55bc-404f-8ba2-dfc909d880fe',
                'resi_no' => '12345612312',
                'customer_name' => 'Jonathan Jonathan',
                'customer_email' => 'Jonathanchang96@gmail.com',
                'customer_phone' => '08988606067',
                'date' => '2022-02-15 17:53:41',
                'weight' => 4000.0,
                'total_price' => 3000000.0,
                'shipping_cost' => 108000.0,
                'shipping_multiplier' => 1.0,
                'total_shipping_cost' => 108000.0,
                'discount' => 0.0,
                'grand_total' => 3108000.0,
                'shipping_recipient_name' => 'Jonathan Jonathan',
                'shipping_recipient_number' => '08988606067',
                'shipping_address' => 'Kav hankam Blok W2 No 6b joglo',
                'shipping_postal_code' => '11640',
                'shipping_country_id' => 1,
                'shipping_province_id' => 1,
                'shipping_city_id' => 161,
                'created_at' => '2022-02-15 17:40:47',
                'updated_at' => '2022-02-15 17:53:41',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}