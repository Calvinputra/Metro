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
                'address' => 'Jalan 321 jakarta',
                'city_id' => '151',
                'country_id' => '1',
                'created_at' => '2021-12-11 04:48:02',
                'customer_id' => '6',
                'deleted_at' => NULL,
                'id' => '2',
                'name' => 'Home',
                'postal_code' => '11111',
                'province_id' => '6',
                'updated_at' => '2021-12-11 04:48:02',
            ),
            1 => 
            array (
                'address' => 'Jalan ABC Jakarta',
                'city_id' => '151',
                'country_id' => '1',
                'created_at' => '2021-12-11 04:49:35',
                'customer_id' => '7',
                'deleted_at' => NULL,
                'id' => '3',
                'name' => 'Home',
                'postal_code' => '11111',
                'province_id' => '6',
                'updated_at' => '2021-12-11 04:49:35',
            ),
            2 => 
            array (
                'address' => 'Jalan abc123 jakarta',
                'city_id' => '151',
                'country_id' => '1',
                'created_at' => '2021-12-13 16:23:07',
                'customer_id' => '8',
                'deleted_at' => NULL,
                'id' => '4',
                'name' => 'Home',
                'postal_code' => '11111',
                'province_id' => '6',
                'updated_at' => '2021-12-13 16:23:07',
            ),
            3 => 
            array (
                'address' => 'jalan griya dadap statate block b2 no 15',
                'city_id' => '28',
                'country_id' => '1',
                'created_at' => '2022-01-25 23:11:50',
                'customer_id' => '9',
                'deleted_at' => NULL,
                'id' => '5',
                'name' => 'Home',
                'postal_code' => '15211',
                'province_id' => '2',
                'updated_at' => '2022-01-25 23:11:50',
            ),
            4 => 
            array (
                'address' => 'jalan griya dadap statate block b2 no 15',
                'city_id' => '114',
                'country_id' => '1',
                'created_at' => '2022-01-28 13:57:21',
                'customer_id' => '10',
                'deleted_at' => NULL,
                'id' => '6',
                'name' => 'Home',
                'postal_code' => '15211',
                'province_id' => '1',
                'updated_at' => '2022-01-28 13:57:21',
            ),
            5 => 
            array (
                'address' => 'pasar kenari mas lama Blok AKS no 13',
                'city_id' => '29',
                'country_id' => '1',
                'created_at' => '2022-03-02 18:18:04',
                'customer_id' => '11',
                'deleted_at' => NULL,
                'id' => '7',
                'name' => 'Home',
                'postal_code' => '10430',
                'province_id' => '2',
                'updated_at' => '2022-03-02 18:18:04',
            ),
            6 => 
            array (
                'address' => 'pasar kenari mas lama Blok AKS no 13',
                'city_id' => '331',
                'country_id' => '1',
                'created_at' => '2022-03-02 18:33:57',
                'customer_id' => '12',
                'deleted_at' => NULL,
                'id' => '8',
                'name' => 'Home',
                'postal_code' => '10430',
                'province_id' => '3',
                'updated_at' => '2022-03-02 18:52:38',
            ),
            7 => 
            array (
                'address' => 'pasar kenari mas lama Blok AKS no 13',
                'city_id' => '331',
                'country_id' => '1',
                'created_at' => '2022-03-02 18:58:05',
                'customer_id' => '13',
                'deleted_at' => NULL,
                'id' => '9',
                'name' => 'Home',
                'postal_code' => '10430',
                'province_id' => '3',
                'updated_at' => '2022-03-06 12:15:20',
            ),
            8 => 
            array (
                'address' => 'taman jeruk 1 no 31',
                'city_id' => '151',
                'country_id' => '1',
                'created_at' => '2022-03-18 22:15:25',
                'customer_id' => '15',
                'deleted_at' => NULL,
                'id' => '10',
                'name' => 'Home',
                'postal_code' => '11740',
                'province_id' => '6',
                'updated_at' => '2022-03-18 22:15:25',
            ),
            9 => 
            array (
                'address' => 'Perumahan Daan Mogot Baru Jalan Bedugul
Blok NI No 8',
                'city_id' => '151',
                'country_id' => '1',
                'created_at' => '2022-03-27 09:18:12',
                'customer_id' => '16',
                'deleted_at' => NULL,
                'id' => '11',
                'name' => 'Home',
                'postal_code' => '11840',
                'province_id' => '6',
                'updated_at' => '2022-03-27 09:18:12',
            ),
        ));
        
        
    }
}