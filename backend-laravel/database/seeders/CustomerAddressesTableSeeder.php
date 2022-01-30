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
                'address' => 'Kav hankam Blok W2 No 6b joglo',
                'postal_code' => '11640',
                'customer_id' => 1,
                'country_id' => 1,
                'province_id' => 1,
                'city_id' => 161,
                'created_at' => NULL,
                'updated_at' => '2022-01-29 17:42:45',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Home',
                'address' => 'Jalan 321 jakarta',
                'postal_code' => '11111',
                'customer_id' => 6,
                'country_id' => 1,
                'province_id' => 6,
                'city_id' => 151,
                'created_at' => '2021-12-11 04:48:02',
                'updated_at' => '2021-12-11 04:48:02',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Home',
                'address' => 'Jalan ABC Jakarta',
                'postal_code' => '11111',
                'customer_id' => 7,
                'country_id' => 1,
                'province_id' => 6,
                'city_id' => 151,
                'created_at' => '2021-12-11 04:49:35',
                'updated_at' => '2021-12-11 04:49:35',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Home',
                'address' => 'Jalan abc123 jakarta',
                'postal_code' => '11111',
                'customer_id' => 8,
                'country_id' => 1,
                'province_id' => 6,
                'city_id' => 151,
                'created_at' => '2021-12-13 16:23:07',
                'updated_at' => '2021-12-13 16:23:07',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Home',
                'address' => 'jalan griya dadap statate block b2 no 15',
                'postal_code' => '15211',
                'customer_id' => 9,
                'country_id' => 1,
                'province_id' => 2,
                'city_id' => 28,
                'created_at' => '2022-01-25 23:11:50',
                'updated_at' => '2022-01-25 23:11:50',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Home',
                'address' => 'jalan griya dadap statate block b2 no 15',
                'postal_code' => '15211',
                'customer_id' => 10,
                'country_id' => 1,
                'province_id' => 1,
                'city_id' => 114,
                'created_at' => '2022-01-28 13:57:21',
                'updated_at' => '2022-01-28 13:57:21',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}