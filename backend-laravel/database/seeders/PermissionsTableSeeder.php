<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'browse_admin',
                'table_name' => NULL,
                'created_at' => '2021-10-20 02:36:38',
                'updated_at' => '2021-10-20 02:36:38',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'browse_bread',
                'table_name' => NULL,
                'created_at' => '2021-10-20 02:36:38',
                'updated_at' => '2021-10-20 02:36:38',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'browse_database',
                'table_name' => NULL,
                'created_at' => '2021-10-20 02:36:38',
                'updated_at' => '2021-10-20 02:36:38',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'browse_media',
                'table_name' => NULL,
                'created_at' => '2021-10-20 02:36:38',
                'updated_at' => '2021-10-20 02:36:38',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'browse_compass',
                'table_name' => NULL,
                'created_at' => '2021-10-20 02:36:38',
                'updated_at' => '2021-10-20 02:36:38',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'browse_menus',
                'table_name' => 'menus',
                'created_at' => '2021-10-20 02:36:38',
                'updated_at' => '2021-10-20 02:36:38',
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'read_menus',
                'table_name' => 'menus',
                'created_at' => '2021-10-20 02:36:38',
                'updated_at' => '2021-10-20 02:36:38',
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'edit_menus',
                'table_name' => 'menus',
                'created_at' => '2021-10-20 02:36:38',
                'updated_at' => '2021-10-20 02:36:38',
            ),
            8 => 
            array (
                'id' => 9,
                'key' => 'add_menus',
                'table_name' => 'menus',
                'created_at' => '2021-10-20 02:36:38',
                'updated_at' => '2021-10-20 02:36:38',
            ),
            9 => 
            array (
                'id' => 10,
                'key' => 'delete_menus',
                'table_name' => 'menus',
                'created_at' => '2021-10-20 02:36:38',
                'updated_at' => '2021-10-20 02:36:38',
            ),
            10 => 
            array (
                'id' => 11,
                'key' => 'browse_roles',
                'table_name' => 'roles',
                'created_at' => '2021-10-20 02:36:38',
                'updated_at' => '2021-10-20 02:36:38',
            ),
            11 => 
            array (
                'id' => 12,
                'key' => 'read_roles',
                'table_name' => 'roles',
                'created_at' => '2021-10-20 02:36:38',
                'updated_at' => '2021-10-20 02:36:38',
            ),
            12 => 
            array (
                'id' => 13,
                'key' => 'edit_roles',
                'table_name' => 'roles',
                'created_at' => '2021-10-20 02:36:38',
                'updated_at' => '2021-10-20 02:36:38',
            ),
            13 => 
            array (
                'id' => 14,
                'key' => 'add_roles',
                'table_name' => 'roles',
                'created_at' => '2021-10-20 02:36:38',
                'updated_at' => '2021-10-20 02:36:38',
            ),
            14 => 
            array (
                'id' => 15,
                'key' => 'delete_roles',
                'table_name' => 'roles',
                'created_at' => '2021-10-20 02:36:38',
                'updated_at' => '2021-10-20 02:36:38',
            ),
            15 => 
            array (
                'id' => 16,
                'key' => 'browse_users',
                'table_name' => 'users',
                'created_at' => '2021-10-20 02:36:38',
                'updated_at' => '2021-10-20 02:36:38',
            ),
            16 => 
            array (
                'id' => 17,
                'key' => 'read_users',
                'table_name' => 'users',
                'created_at' => '2021-10-20 02:36:38',
                'updated_at' => '2021-10-20 02:36:38',
            ),
            17 => 
            array (
                'id' => 18,
                'key' => 'edit_users',
                'table_name' => 'users',
                'created_at' => '2021-10-20 02:36:38',
                'updated_at' => '2021-10-20 02:36:38',
            ),
            18 => 
            array (
                'id' => 19,
                'key' => 'add_users',
                'table_name' => 'users',
                'created_at' => '2021-10-20 02:36:38',
                'updated_at' => '2021-10-20 02:36:38',
            ),
            19 => 
            array (
                'id' => 20,
                'key' => 'delete_users',
                'table_name' => 'users',
                'created_at' => '2021-10-20 02:36:38',
                'updated_at' => '2021-10-20 02:36:38',
            ),
            20 => 
            array (
                'id' => 21,
                'key' => 'browse_settings',
                'table_name' => 'settings',
                'created_at' => '2021-10-20 02:36:38',
                'updated_at' => '2021-10-20 02:36:38',
            ),
            21 => 
            array (
                'id' => 22,
                'key' => 'read_settings',
                'table_name' => 'settings',
                'created_at' => '2021-10-20 02:36:38',
                'updated_at' => '2021-10-20 02:36:38',
            ),
            22 => 
            array (
                'id' => 23,
                'key' => 'edit_settings',
                'table_name' => 'settings',
                'created_at' => '2021-10-20 02:36:38',
                'updated_at' => '2021-10-20 02:36:38',
            ),
            23 => 
            array (
                'id' => 24,
                'key' => 'add_settings',
                'table_name' => 'settings',
                'created_at' => '2021-10-20 02:36:38',
                'updated_at' => '2021-10-20 02:36:38',
            ),
            24 => 
            array (
                'id' => 25,
                'key' => 'delete_settings',
                'table_name' => 'settings',
                'created_at' => '2021-10-20 02:36:38',
                'updated_at' => '2021-10-20 02:36:38',
            ),
            25 => 
            array (
                'id' => 26,
                'key' => 'browse_categories',
                'table_name' => 'categories',
                'created_at' => '2021-10-20 03:05:37',
                'updated_at' => '2021-10-20 03:05:37',
            ),
            26 => 
            array (
                'id' => 27,
                'key' => 'read_categories',
                'table_name' => 'categories',
                'created_at' => '2021-10-20 03:05:37',
                'updated_at' => '2021-10-20 03:05:37',
            ),
            27 => 
            array (
                'id' => 28,
                'key' => 'edit_categories',
                'table_name' => 'categories',
                'created_at' => '2021-10-20 03:05:37',
                'updated_at' => '2021-10-20 03:05:37',
            ),
            28 => 
            array (
                'id' => 29,
                'key' => 'add_categories',
                'table_name' => 'categories',
                'created_at' => '2021-10-20 03:05:37',
                'updated_at' => '2021-10-20 03:05:37',
            ),
            29 => 
            array (
                'id' => 30,
                'key' => 'delete_categories',
                'table_name' => 'categories',
                'created_at' => '2021-10-20 03:05:37',
                'updated_at' => '2021-10-20 03:05:37',
            ),
            30 => 
            array (
                'id' => 31,
                'key' => 'browse_audits',
                'table_name' => 'audits',
                'created_at' => '2021-10-20 03:23:00',
                'updated_at' => '2021-10-20 03:23:00',
            ),
            31 => 
            array (
                'id' => 32,
                'key' => 'read_audits',
                'table_name' => 'audits',
                'created_at' => '2021-10-20 03:23:00',
                'updated_at' => '2021-10-20 03:23:00',
            ),
            32 => 
            array (
                'id' => 33,
                'key' => 'edit_audits',
                'table_name' => 'audits',
                'created_at' => '2021-10-20 03:23:00',
                'updated_at' => '2021-10-20 03:23:00',
            ),
            33 => 
            array (
                'id' => 34,
                'key' => 'add_audits',
                'table_name' => 'audits',
                'created_at' => '2021-10-20 03:23:00',
                'updated_at' => '2021-10-20 03:23:00',
            ),
            34 => 
            array (
                'id' => 35,
                'key' => 'delete_audits',
                'table_name' => 'audits',
                'created_at' => '2021-10-20 03:23:00',
                'updated_at' => '2021-10-20 03:23:00',
            ),
            35 => 
            array (
                'id' => 36,
                'key' => 'browse_products',
                'table_name' => 'products',
                'created_at' => '2021-10-20 03:27:29',
                'updated_at' => '2021-10-20 03:27:29',
            ),
            36 => 
            array (
                'id' => 37,
                'key' => 'read_products',
                'table_name' => 'products',
                'created_at' => '2021-10-20 03:27:29',
                'updated_at' => '2021-10-20 03:27:29',
            ),
            37 => 
            array (
                'id' => 38,
                'key' => 'edit_products',
                'table_name' => 'products',
                'created_at' => '2021-10-20 03:27:29',
                'updated_at' => '2021-10-20 03:27:29',
            ),
            38 => 
            array (
                'id' => 39,
                'key' => 'add_products',
                'table_name' => 'products',
                'created_at' => '2021-10-20 03:27:29',
                'updated_at' => '2021-10-20 03:27:29',
            ),
            39 => 
            array (
                'id' => 40,
                'key' => 'delete_products',
                'table_name' => 'products',
                'created_at' => '2021-10-20 03:27:29',
                'updated_at' => '2021-10-20 03:27:29',
            ),
            40 => 
            array (
                'id' => 41,
                'key' => 'browse_customers',
                'table_name' => 'customers',
                'created_at' => '2021-10-30 06:23:31',
                'updated_at' => '2021-10-30 06:23:31',
            ),
            41 => 
            array (
                'id' => 42,
                'key' => 'read_customers',
                'table_name' => 'customers',
                'created_at' => '2021-10-30 06:23:31',
                'updated_at' => '2021-10-30 06:23:31',
            ),
            42 => 
            array (
                'id' => 43,
                'key' => 'edit_customers',
                'table_name' => 'customers',
                'created_at' => '2021-10-30 06:23:31',
                'updated_at' => '2021-10-30 06:23:31',
            ),
            43 => 
            array (
                'id' => 44,
                'key' => 'add_customers',
                'table_name' => 'customers',
                'created_at' => '2021-10-30 06:23:31',
                'updated_at' => '2021-10-30 06:23:31',
            ),
            44 => 
            array (
                'id' => 45,
                'key' => 'delete_customers',
                'table_name' => 'customers',
                'created_at' => '2021-10-30 06:23:31',
                'updated_at' => '2021-10-30 06:23:31',
            ),
            45 => 
            array (
                'id' => 46,
                'key' => 'browse_countries',
                'table_name' => 'countries',
                'created_at' => '2021-11-06 13:26:40',
                'updated_at' => '2021-11-06 13:26:40',
            ),
            46 => 
            array (
                'id' => 47,
                'key' => 'read_countries',
                'table_name' => 'countries',
                'created_at' => '2021-11-06 13:26:40',
                'updated_at' => '2021-11-06 13:26:40',
            ),
            47 => 
            array (
                'id' => 48,
                'key' => 'edit_countries',
                'table_name' => 'countries',
                'created_at' => '2021-11-06 13:26:40',
                'updated_at' => '2021-11-06 13:26:40',
            ),
            48 => 
            array (
                'id' => 49,
                'key' => 'add_countries',
                'table_name' => 'countries',
                'created_at' => '2021-11-06 13:26:40',
                'updated_at' => '2021-11-06 13:26:40',
            ),
            49 => 
            array (
                'id' => 50,
                'key' => 'delete_countries',
                'table_name' => 'countries',
                'created_at' => '2021-11-06 13:26:40',
                'updated_at' => '2021-11-06 13:26:40',
            ),
            50 => 
            array (
                'id' => 51,
                'key' => 'browse_provinces',
                'table_name' => 'provinces',
                'created_at' => '2021-11-06 13:29:43',
                'updated_at' => '2021-11-06 13:29:43',
            ),
            51 => 
            array (
                'id' => 52,
                'key' => 'read_provinces',
                'table_name' => 'provinces',
                'created_at' => '2021-11-06 13:29:43',
                'updated_at' => '2021-11-06 13:29:43',
            ),
            52 => 
            array (
                'id' => 53,
                'key' => 'edit_provinces',
                'table_name' => 'provinces',
                'created_at' => '2021-11-06 13:29:43',
                'updated_at' => '2021-11-06 13:29:43',
            ),
            53 => 
            array (
                'id' => 54,
                'key' => 'add_provinces',
                'table_name' => 'provinces',
                'created_at' => '2021-11-06 13:29:43',
                'updated_at' => '2021-11-06 13:29:43',
            ),
            54 => 
            array (
                'id' => 55,
                'key' => 'delete_provinces',
                'table_name' => 'provinces',
                'created_at' => '2021-11-06 13:29:43',
                'updated_at' => '2021-11-06 13:29:43',
            ),
            55 => 
            array (
                'id' => 56,
                'key' => 'browse_cities',
                'table_name' => 'cities',
                'created_at' => '2021-11-06 13:34:12',
                'updated_at' => '2021-11-06 13:34:12',
            ),
            56 => 
            array (
                'id' => 57,
                'key' => 'read_cities',
                'table_name' => 'cities',
                'created_at' => '2021-11-06 13:34:12',
                'updated_at' => '2021-11-06 13:34:12',
            ),
            57 => 
            array (
                'id' => 58,
                'key' => 'edit_cities',
                'table_name' => 'cities',
                'created_at' => '2021-11-06 13:34:12',
                'updated_at' => '2021-11-06 13:34:12',
            ),
            58 => 
            array (
                'id' => 59,
                'key' => 'add_cities',
                'table_name' => 'cities',
                'created_at' => '2021-11-06 13:34:12',
                'updated_at' => '2021-11-06 13:34:12',
            ),
            59 => 
            array (
                'id' => 60,
                'key' => 'delete_cities',
                'table_name' => 'cities',
                'created_at' => '2021-11-06 13:34:12',
                'updated_at' => '2021-11-06 13:34:12',
            ),
            60 => 
            array (
                'id' => 61,
                'key' => 'browse_product_attributes',
                'table_name' => 'product_attributes',
                'created_at' => '2021-11-09 02:09:55',
                'updated_at' => '2021-11-09 02:09:55',
            ),
            61 => 
            array (
                'id' => 62,
                'key' => 'read_product_attributes',
                'table_name' => 'product_attributes',
                'created_at' => '2021-11-09 02:09:55',
                'updated_at' => '2021-11-09 02:09:55',
            ),
            62 => 
            array (
                'id' => 63,
                'key' => 'edit_product_attributes',
                'table_name' => 'product_attributes',
                'created_at' => '2021-11-09 02:09:55',
                'updated_at' => '2021-11-09 02:09:55',
            ),
            63 => 
            array (
                'id' => 64,
                'key' => 'add_product_attributes',
                'table_name' => 'product_attributes',
                'created_at' => '2021-11-09 02:09:55',
                'updated_at' => '2021-11-09 02:09:55',
            ),
            64 => 
            array (
                'id' => 65,
                'key' => 'delete_product_attributes',
                'table_name' => 'product_attributes',
                'created_at' => '2021-11-09 02:09:55',
                'updated_at' => '2021-11-09 02:09:55',
            ),
            65 => 
            array (
                'id' => 66,
                'key' => 'browse_attributes',
                'table_name' => 'attributes',
                'created_at' => '2021-11-09 02:32:17',
                'updated_at' => '2021-11-09 02:32:17',
            ),
            66 => 
            array (
                'id' => 67,
                'key' => 'read_attributes',
                'table_name' => 'attributes',
                'created_at' => '2021-11-09 02:32:17',
                'updated_at' => '2021-11-09 02:32:17',
            ),
            67 => 
            array (
                'id' => 68,
                'key' => 'edit_attributes',
                'table_name' => 'attributes',
                'created_at' => '2021-11-09 02:32:17',
                'updated_at' => '2021-11-09 02:32:17',
            ),
            68 => 
            array (
                'id' => 69,
                'key' => 'add_attributes',
                'table_name' => 'attributes',
                'created_at' => '2021-11-09 02:32:17',
                'updated_at' => '2021-11-09 02:32:17',
            ),
            69 => 
            array (
                'id' => 70,
                'key' => 'delete_attributes',
                'table_name' => 'attributes',
                'created_at' => '2021-11-09 02:32:17',
                'updated_at' => '2021-11-09 02:32:17',
            ),
            70 => 
            array (
                'id' => 71,
                'key' => 'browse_transactions',
                'table_name' => 'transactions',
                'created_at' => '2021-12-03 07:03:32',
                'updated_at' => '2021-12-03 07:03:32',
            ),
            71 => 
            array (
                'id' => 72,
                'key' => 'read_transactions',
                'table_name' => 'transactions',
                'created_at' => '2021-12-03 07:03:32',
                'updated_at' => '2021-12-03 07:03:32',
            ),
            72 => 
            array (
                'id' => 73,
                'key' => 'edit_transactions',
                'table_name' => 'transactions',
                'created_at' => '2021-12-03 07:03:32',
                'updated_at' => '2021-12-03 07:03:32',
            ),
            73 => 
            array (
                'id' => 74,
                'key' => 'add_transactions',
                'table_name' => 'transactions',
                'created_at' => '2021-12-03 07:03:32',
                'updated_at' => '2021-12-03 07:03:32',
            ),
            74 => 
            array (
                'id' => 75,
                'key' => 'delete_transactions',
                'table_name' => 'transactions',
                'created_at' => '2021-12-03 07:03:32',
                'updated_at' => '2021-12-03 07:03:32',
            ),
            75 => 
            array (
                'id' => 76,
                'key' => 'browse_permissions',
                'table_name' => 'permissions',
                'created_at' => '2021-12-22 13:49:44',
                'updated_at' => '2021-12-22 13:49:44',
            ),
            76 => 
            array (
                'id' => 77,
                'key' => 'read_permissions',
                'table_name' => 'permissions',
                'created_at' => '2021-12-22 13:49:44',
                'updated_at' => '2021-12-22 13:49:44',
            ),
            77 => 
            array (
                'id' => 78,
                'key' => 'edit_permissions',
                'table_name' => 'permissions',
                'created_at' => '2021-12-22 13:49:44',
                'updated_at' => '2021-12-22 13:49:44',
            ),
            78 => 
            array (
                'id' => 79,
                'key' => 'add_permissions',
                'table_name' => 'permissions',
                'created_at' => '2021-12-22 13:49:44',
                'updated_at' => '2021-12-22 13:49:44',
            ),
            79 => 
            array (
                'id' => 80,
                'key' => 'delete_permissions',
                'table_name' => 'permissions',
                'created_at' => '2021-12-22 13:49:44',
                'updated_at' => '2021-12-22 13:49:44',
            ),
            80 => 
            array (
                'id' => 81,
                'key' => 'read_detail_transactions',
                'table_name' => 'transactions',
                'created_at' => '2021-12-22 13:50:28',
                'updated_at' => '2021-12-22 13:50:49',
            ),
            81 => 
            array (
                'id' => 82,
                'key' => 'shipping_transactions',
                'table_name' => 'transactions',
                'created_at' => '2021-12-22 13:51:15',
                'updated_at' => '2021-12-22 13:51:15',
            ),
        ));
        
        
    }
}