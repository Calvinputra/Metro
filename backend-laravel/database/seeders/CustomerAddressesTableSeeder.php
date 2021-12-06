<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CustomerAddressesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('customer_addresses')->delete();
        
        \DB::table('customer_addresses')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Alamat Rumah',
                'address' => 'Kav hankam Blok W2 No 6b',
                'postal_code' => '11640',
                'customer_id' => 1,
                'country_id' => 1,
                'province_id' => 6,
                'city_id' => 151,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}