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

        \DB::table('customer_addresses')->insert(array(
            0 =>
            array(
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
            1 =>
            array(
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
            array(
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
            array(
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
        ));
    }
}
