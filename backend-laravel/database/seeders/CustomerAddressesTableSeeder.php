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
            1 => 
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
            2 => 
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
            3 => 
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
            4 => 
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
            5 => 
            array (
                'id' => 7,
                'name' => 'Home',
                'address' => 'pasar kenari mas lama Blok AKS no 13',
                'postal_code' => '10430',
                'customer_id' => 11,
                'country_id' => 1,
                'province_id' => 2,
                'city_id' => 29,
                'created_at' => '2022-03-02 18:18:04',
                'updated_at' => '2022-03-02 18:18:04',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 8,
                'name' => 'Home',
                'address' => 'pasar kenari mas lama Blok AKS no 13',
                'postal_code' => '10430',
                'customer_id' => 12,
                'country_id' => 1,
                'province_id' => 3,
                'city_id' => 331,
                'created_at' => '2022-03-02 18:33:57',
                'updated_at' => '2022-03-02 18:52:38',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 9,
                'name' => 'Home',
                'address' => 'pasar kenari mas lama Blok AKS no 13',
                'postal_code' => '10430',
                'customer_id' => 13,
                'country_id' => 1,
                'province_id' => 3,
                'city_id' => 331,
                'created_at' => '2022-03-02 18:58:05',
                'updated_at' => '2022-03-06 12:15:20',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 10,
                'name' => 'Home',
                'address' => 'taman jeruk 1 no 31',
                'postal_code' => '11740',
                'customer_id' => 15,
                'country_id' => 1,
                'province_id' => 6,
                'city_id' => 151,
                'created_at' => '2022-03-18 22:15:25',
                'updated_at' => '2022-03-18 22:15:25',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 11,
                'name' => 'Home',
                'address' => 'Perumahan Daan Mogot Baru Jalan Bedugul
Blok NI No 8',
                'postal_code' => '11840',
                'customer_id' => 16,
                'country_id' => 1,
                'province_id' => 6,
                'city_id' => 151,
                'created_at' => '2022-03-27 09:18:12',
                'updated_at' => '2022-03-27 09:18:12',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}