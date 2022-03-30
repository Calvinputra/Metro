<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CartsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('carts')->delete();
        
        \DB::table('carts')->insert(array (
            0 => 
            array (
                'created_at' => '2022-03-02 18:40:17',
                'customer_id' => '12',
                'deleted_at' => NULL,
                'id' => '392',
                'process' => '1',
                'product_id' => '2',
                'qty' => '1',
                'updated_at' => '2022-03-02 18:49:18',
            ),
            1 => 
            array (
                'created_at' => '2022-03-02 18:40:17',
                'customer_id' => '12',
                'deleted_at' => NULL,
                'id' => '393',
                'process' => '1',
                'product_id' => '3',
                'qty' => '1',
                'updated_at' => '2022-03-02 18:49:18',
            ),
            2 => 
            array (
                'created_at' => '2022-03-02 18:40:17',
                'customer_id' => '12',
                'deleted_at' => NULL,
                'id' => '394',
                'process' => '1',
                'product_id' => '4',
                'qty' => '1',
                'updated_at' => '2022-03-02 18:49:18',
            ),
            3 => 
            array (
                'created_at' => '2022-03-06 23:36:49',
                'customer_id' => '7',
                'deleted_at' => NULL,
                'id' => '459',
                'process' => '1',
                'product_id' => '2',
                'qty' => '1',
                'updated_at' => '2022-03-27 21:02:31',
            ),
            4 => 
            array (
                'created_at' => '2022-03-06 23:36:49',
                'customer_id' => '7',
                'deleted_at' => NULL,
                'id' => '460',
                'process' => '1',
                'product_id' => '3',
                'qty' => '1',
                'updated_at' => '2022-03-27 21:02:31',
            ),
            5 => 
            array (
                'created_at' => '2022-03-06 23:36:49',
                'customer_id' => '7',
                'deleted_at' => NULL,
                'id' => '461',
                'process' => '1',
                'product_id' => '4',
                'qty' => '1',
                'updated_at' => '2022-03-27 21:02:31',
            ),
            6 => 
            array (
                'created_at' => '2022-03-06 23:36:49',
                'customer_id' => '7',
                'deleted_at' => NULL,
                'id' => '462',
                'process' => '1',
                'product_id' => '11',
                'qty' => '1',
                'updated_at' => '2022-03-27 21:02:31',
            ),
            7 => 
            array (
                'created_at' => '2022-03-06 23:36:49',
                'customer_id' => '7',
                'deleted_at' => NULL,
                'id' => '463',
                'process' => '1',
                'product_id' => '26',
                'qty' => '1',
                'updated_at' => '2022-03-27 21:02:31',
            ),
            8 => 
            array (
                'created_at' => '2022-03-06 23:36:49',
                'customer_id' => '7',
                'deleted_at' => NULL,
                'id' => '464',
                'process' => '1',
                'product_id' => '27',
                'qty' => '1',
                'updated_at' => '2022-03-27 21:02:31',
            ),
            9 => 
            array (
                'created_at' => '2022-03-06 23:36:49',
                'customer_id' => '7',
                'deleted_at' => NULL,
                'id' => '465',
                'process' => '1',
                'product_id' => '52',
                'qty' => '1',
                'updated_at' => '2022-03-27 21:02:31',
            ),
            10 => 
            array (
                'created_at' => '2022-03-06 23:36:49',
                'customer_id' => '7',
                'deleted_at' => NULL,
                'id' => '466',
                'process' => '1',
                'product_id' => '90',
                'qty' => '1',
                'updated_at' => '2022-03-27 21:02:31',
            ),
            11 => 
            array (
                'created_at' => '2022-03-13 20:22:00',
                'customer_id' => '13',
                'deleted_at' => NULL,
                'id' => '491',
                'process' => '1',
                'product_id' => '2',
                'qty' => '1',
                'updated_at' => '2022-03-13 20:22:55',
            ),
            12 => 
            array (
                'created_at' => '2022-03-13 20:22:00',
                'customer_id' => '13',
                'deleted_at' => NULL,
                'id' => '492',
                'process' => '1',
                'product_id' => '28',
                'qty' => '1',
                'updated_at' => '2022-03-13 20:22:55',
            ),
            13 => 
            array (
                'created_at' => '2022-03-18 22:06:18',
                'customer_id' => '14',
                'deleted_at' => NULL,
                'id' => '516',
                'process' => '1',
                'product_id' => '4',
                'qty' => '1',
                'updated_at' => '2022-03-18 22:06:22',
            ),
            14 => 
            array (
                'created_at' => '2022-03-29 22:00:08',
                'customer_id' => '6',
                'deleted_at' => NULL,
                'id' => '524',
                'process' => '0',
                'product_id' => '11',
                'qty' => '1',
                'updated_at' => '2022-03-29 22:00:08',
            ),
        ));
        
        
    }
}