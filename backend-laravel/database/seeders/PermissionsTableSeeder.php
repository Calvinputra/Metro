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
                'created_at' => '2021-10-20 02:36:38',
                'id' => '1',
                'key' => 'browse_admin',
                'table_name' => NULL,
                'updated_at' => '2021-10-20 02:36:38',
            ),
            1 => 
            array (
                'created_at' => '2021-10-20 02:36:38',
                'id' => '2',
                'key' => 'browse_bread',
                'table_name' => NULL,
                'updated_at' => '2021-10-20 02:36:38',
            ),
            2 => 
            array (
                'created_at' => '2021-10-20 02:36:38',
                'id' => '3',
                'key' => 'browse_database',
                'table_name' => NULL,
                'updated_at' => '2021-10-20 02:36:38',
            ),
            3 => 
            array (
                'created_at' => '2021-10-20 02:36:38',
                'id' => '4',
                'key' => 'browse_media',
                'table_name' => NULL,
                'updated_at' => '2021-10-20 02:36:38',
            ),
            4 => 
            array (
                'created_at' => '2021-10-20 02:36:38',
                'id' => '5',
                'key' => 'browse_compass',
                'table_name' => NULL,
                'updated_at' => '2021-10-20 02:36:38',
            ),
            5 => 
            array (
                'created_at' => '2021-10-20 02:36:38',
                'id' => '6',
                'key' => 'browse_menus',
                'table_name' => 'menus',
                'updated_at' => '2021-10-20 02:36:38',
            ),
            6 => 
            array (
                'created_at' => '2021-10-20 02:36:38',
                'id' => '7',
                'key' => 'read_menus',
                'table_name' => 'menus',
                'updated_at' => '2021-10-20 02:36:38',
            ),
            7 => 
            array (
                'created_at' => '2021-10-20 02:36:38',
                'id' => '8',
                'key' => 'edit_menus',
                'table_name' => 'menus',
                'updated_at' => '2021-10-20 02:36:38',
            ),
            8 => 
            array (
                'created_at' => '2021-10-20 02:36:38',
                'id' => '9',
                'key' => 'add_menus',
                'table_name' => 'menus',
                'updated_at' => '2021-10-20 02:36:38',
            ),
            9 => 
            array (
                'created_at' => '2021-10-20 02:36:38',
                'id' => '10',
                'key' => 'delete_menus',
                'table_name' => 'menus',
                'updated_at' => '2021-10-20 02:36:38',
            ),
            10 => 
            array (
                'created_at' => '2021-10-20 02:36:38',
                'id' => '11',
                'key' => 'browse_roles',
                'table_name' => 'roles',
                'updated_at' => '2021-10-20 02:36:38',
            ),
            11 => 
            array (
                'created_at' => '2021-10-20 02:36:38',
                'id' => '12',
                'key' => 'read_roles',
                'table_name' => 'roles',
                'updated_at' => '2021-10-20 02:36:38',
            ),
            12 => 
            array (
                'created_at' => '2021-10-20 02:36:38',
                'id' => '13',
                'key' => 'edit_roles',
                'table_name' => 'roles',
                'updated_at' => '2021-10-20 02:36:38',
            ),
            13 => 
            array (
                'created_at' => '2021-10-20 02:36:38',
                'id' => '14',
                'key' => 'add_roles',
                'table_name' => 'roles',
                'updated_at' => '2021-10-20 02:36:38',
            ),
            14 => 
            array (
                'created_at' => '2021-10-20 02:36:38',
                'id' => '15',
                'key' => 'delete_roles',
                'table_name' => 'roles',
                'updated_at' => '2021-10-20 02:36:38',
            ),
            15 => 
            array (
                'created_at' => '2021-10-20 02:36:38',
                'id' => '16',
                'key' => 'browse_users',
                'table_name' => 'users',
                'updated_at' => '2021-10-20 02:36:38',
            ),
            16 => 
            array (
                'created_at' => '2021-10-20 02:36:38',
                'id' => '17',
                'key' => 'read_users',
                'table_name' => 'users',
                'updated_at' => '2021-10-20 02:36:38',
            ),
            17 => 
            array (
                'created_at' => '2021-10-20 02:36:38',
                'id' => '18',
                'key' => 'edit_users',
                'table_name' => 'users',
                'updated_at' => '2021-10-20 02:36:38',
            ),
            18 => 
            array (
                'created_at' => '2021-10-20 02:36:38',
                'id' => '19',
                'key' => 'add_users',
                'table_name' => 'users',
                'updated_at' => '2021-10-20 02:36:38',
            ),
            19 => 
            array (
                'created_at' => '2021-10-20 02:36:38',
                'id' => '20',
                'key' => 'delete_users',
                'table_name' => 'users',
                'updated_at' => '2021-10-20 02:36:38',
            ),
            20 => 
            array (
                'created_at' => '2021-10-20 02:36:38',
                'id' => '21',
                'key' => 'browse_settings',
                'table_name' => 'settings',
                'updated_at' => '2021-10-20 02:36:38',
            ),
            21 => 
            array (
                'created_at' => '2021-10-20 02:36:38',
                'id' => '22',
                'key' => 'read_settings',
                'table_name' => 'settings',
                'updated_at' => '2021-10-20 02:36:38',
            ),
            22 => 
            array (
                'created_at' => '2021-10-20 02:36:38',
                'id' => '23',
                'key' => 'edit_settings',
                'table_name' => 'settings',
                'updated_at' => '2021-10-20 02:36:38',
            ),
            23 => 
            array (
                'created_at' => '2021-10-20 02:36:38',
                'id' => '24',
                'key' => 'add_settings',
                'table_name' => 'settings',
                'updated_at' => '2021-10-20 02:36:38',
            ),
            24 => 
            array (
                'created_at' => '2021-10-20 02:36:38',
                'id' => '25',
                'key' => 'delete_settings',
                'table_name' => 'settings',
                'updated_at' => '2021-10-20 02:36:38',
            ),
            25 => 
            array (
                'created_at' => '2021-10-20 03:05:37',
                'id' => '26',
                'key' => 'browse_categories',
                'table_name' => 'categories',
                'updated_at' => '2021-10-20 03:05:37',
            ),
            26 => 
            array (
                'created_at' => '2021-10-20 03:05:37',
                'id' => '27',
                'key' => 'read_categories',
                'table_name' => 'categories',
                'updated_at' => '2021-10-20 03:05:37',
            ),
            27 => 
            array (
                'created_at' => '2021-10-20 03:05:37',
                'id' => '28',
                'key' => 'edit_categories',
                'table_name' => 'categories',
                'updated_at' => '2021-10-20 03:05:37',
            ),
            28 => 
            array (
                'created_at' => '2021-10-20 03:05:37',
                'id' => '29',
                'key' => 'add_categories',
                'table_name' => 'categories',
                'updated_at' => '2021-10-20 03:05:37',
            ),
            29 => 
            array (
                'created_at' => '2021-10-20 03:05:37',
                'id' => '30',
                'key' => 'delete_categories',
                'table_name' => 'categories',
                'updated_at' => '2021-10-20 03:05:37',
            ),
            30 => 
            array (
                'created_at' => '2021-10-20 03:23:00',
                'id' => '31',
                'key' => 'browse_audits',
                'table_name' => 'audits',
                'updated_at' => '2021-10-20 03:23:00',
            ),
            31 => 
            array (
                'created_at' => '2021-10-20 03:23:00',
                'id' => '32',
                'key' => 'read_audits',
                'table_name' => 'audits',
                'updated_at' => '2021-10-20 03:23:00',
            ),
            32 => 
            array (
                'created_at' => '2021-10-20 03:23:00',
                'id' => '33',
                'key' => 'edit_audits',
                'table_name' => 'audits',
                'updated_at' => '2021-10-20 03:23:00',
            ),
            33 => 
            array (
                'created_at' => '2021-10-20 03:23:00',
                'id' => '34',
                'key' => 'add_audits',
                'table_name' => 'audits',
                'updated_at' => '2021-10-20 03:23:00',
            ),
            34 => 
            array (
                'created_at' => '2021-10-20 03:23:00',
                'id' => '35',
                'key' => 'delete_audits',
                'table_name' => 'audits',
                'updated_at' => '2021-10-20 03:23:00',
            ),
            35 => 
            array (
                'created_at' => '2021-10-20 03:27:29',
                'id' => '36',
                'key' => 'browse_products',
                'table_name' => 'products',
                'updated_at' => '2021-10-20 03:27:29',
            ),
            36 => 
            array (
                'created_at' => '2021-10-20 03:27:29',
                'id' => '37',
                'key' => 'read_products',
                'table_name' => 'products',
                'updated_at' => '2021-10-20 03:27:29',
            ),
            37 => 
            array (
                'created_at' => '2021-10-20 03:27:29',
                'id' => '38',
                'key' => 'edit_products',
                'table_name' => 'products',
                'updated_at' => '2021-10-20 03:27:29',
            ),
            38 => 
            array (
                'created_at' => '2021-10-20 03:27:29',
                'id' => '39',
                'key' => 'add_products',
                'table_name' => 'products',
                'updated_at' => '2021-10-20 03:27:29',
            ),
            39 => 
            array (
                'created_at' => '2021-10-20 03:27:29',
                'id' => '40',
                'key' => 'delete_products',
                'table_name' => 'products',
                'updated_at' => '2021-10-20 03:27:29',
            ),
            40 => 
            array (
                'created_at' => '2021-10-30 06:23:31',
                'id' => '41',
                'key' => 'browse_customers',
                'table_name' => 'customers',
                'updated_at' => '2021-10-30 06:23:31',
            ),
            41 => 
            array (
                'created_at' => '2021-10-30 06:23:31',
                'id' => '42',
                'key' => 'read_customers',
                'table_name' => 'customers',
                'updated_at' => '2021-10-30 06:23:31',
            ),
            42 => 
            array (
                'created_at' => '2021-10-30 06:23:31',
                'id' => '43',
                'key' => 'edit_customers',
                'table_name' => 'customers',
                'updated_at' => '2021-10-30 06:23:31',
            ),
            43 => 
            array (
                'created_at' => '2021-10-30 06:23:31',
                'id' => '44',
                'key' => 'add_customers',
                'table_name' => 'customers',
                'updated_at' => '2021-10-30 06:23:31',
            ),
            44 => 
            array (
                'created_at' => '2021-10-30 06:23:31',
                'id' => '45',
                'key' => 'delete_customers',
                'table_name' => 'customers',
                'updated_at' => '2021-10-30 06:23:31',
            ),
            45 => 
            array (
                'created_at' => '2021-11-06 13:26:40',
                'id' => '46',
                'key' => 'browse_countries',
                'table_name' => 'countries',
                'updated_at' => '2021-11-06 13:26:40',
            ),
            46 => 
            array (
                'created_at' => '2021-11-06 13:26:40',
                'id' => '47',
                'key' => 'read_countries',
                'table_name' => 'countries',
                'updated_at' => '2021-11-06 13:26:40',
            ),
            47 => 
            array (
                'created_at' => '2021-11-06 13:26:40',
                'id' => '48',
                'key' => 'edit_countries',
                'table_name' => 'countries',
                'updated_at' => '2021-11-06 13:26:40',
            ),
            48 => 
            array (
                'created_at' => '2021-11-06 13:26:40',
                'id' => '49',
                'key' => 'add_countries',
                'table_name' => 'countries',
                'updated_at' => '2021-11-06 13:26:40',
            ),
            49 => 
            array (
                'created_at' => '2021-11-06 13:26:40',
                'id' => '50',
                'key' => 'delete_countries',
                'table_name' => 'countries',
                'updated_at' => '2021-11-06 13:26:40',
            ),
            50 => 
            array (
                'created_at' => '2021-11-06 13:29:43',
                'id' => '51',
                'key' => 'browse_provinces',
                'table_name' => 'provinces',
                'updated_at' => '2021-11-06 13:29:43',
            ),
            51 => 
            array (
                'created_at' => '2021-11-06 13:29:43',
                'id' => '52',
                'key' => 'read_provinces',
                'table_name' => 'provinces',
                'updated_at' => '2021-11-06 13:29:43',
            ),
            52 => 
            array (
                'created_at' => '2021-11-06 13:29:43',
                'id' => '53',
                'key' => 'edit_provinces',
                'table_name' => 'provinces',
                'updated_at' => '2021-11-06 13:29:43',
            ),
            53 => 
            array (
                'created_at' => '2021-11-06 13:29:43',
                'id' => '54',
                'key' => 'add_provinces',
                'table_name' => 'provinces',
                'updated_at' => '2021-11-06 13:29:43',
            ),
            54 => 
            array (
                'created_at' => '2021-11-06 13:29:43',
                'id' => '55',
                'key' => 'delete_provinces',
                'table_name' => 'provinces',
                'updated_at' => '2021-11-06 13:29:43',
            ),
            55 => 
            array (
                'created_at' => '2021-11-06 13:34:12',
                'id' => '56',
                'key' => 'browse_cities',
                'table_name' => 'cities',
                'updated_at' => '2021-11-06 13:34:12',
            ),
            56 => 
            array (
                'created_at' => '2021-11-06 13:34:12',
                'id' => '57',
                'key' => 'read_cities',
                'table_name' => 'cities',
                'updated_at' => '2021-11-06 13:34:12',
            ),
            57 => 
            array (
                'created_at' => '2021-11-06 13:34:12',
                'id' => '58',
                'key' => 'edit_cities',
                'table_name' => 'cities',
                'updated_at' => '2021-11-06 13:34:12',
            ),
            58 => 
            array (
                'created_at' => '2021-11-06 13:34:12',
                'id' => '59',
                'key' => 'add_cities',
                'table_name' => 'cities',
                'updated_at' => '2021-11-06 13:34:12',
            ),
            59 => 
            array (
                'created_at' => '2021-11-06 13:34:12',
                'id' => '60',
                'key' => 'delete_cities',
                'table_name' => 'cities',
                'updated_at' => '2021-11-06 13:34:12',
            ),
            60 => 
            array (
                'created_at' => '2021-11-09 02:09:55',
                'id' => '61',
                'key' => 'browse_product_attributes',
                'table_name' => 'product_attributes',
                'updated_at' => '2021-11-09 02:09:55',
            ),
            61 => 
            array (
                'created_at' => '2021-11-09 02:09:55',
                'id' => '62',
                'key' => 'read_product_attributes',
                'table_name' => 'product_attributes',
                'updated_at' => '2021-11-09 02:09:55',
            ),
            62 => 
            array (
                'created_at' => '2021-11-09 02:09:55',
                'id' => '63',
                'key' => 'edit_product_attributes',
                'table_name' => 'product_attributes',
                'updated_at' => '2021-11-09 02:09:55',
            ),
            63 => 
            array (
                'created_at' => '2021-11-09 02:09:55',
                'id' => '64',
                'key' => 'add_product_attributes',
                'table_name' => 'product_attributes',
                'updated_at' => '2021-11-09 02:09:55',
            ),
            64 => 
            array (
                'created_at' => '2021-11-09 02:09:55',
                'id' => '65',
                'key' => 'delete_product_attributes',
                'table_name' => 'product_attributes',
                'updated_at' => '2021-11-09 02:09:55',
            ),
            65 => 
            array (
                'created_at' => '2021-11-09 02:32:17',
                'id' => '66',
                'key' => 'browse_attributes',
                'table_name' => 'attributes',
                'updated_at' => '2021-11-09 02:32:17',
            ),
            66 => 
            array (
                'created_at' => '2021-11-09 02:32:17',
                'id' => '67',
                'key' => 'read_attributes',
                'table_name' => 'attributes',
                'updated_at' => '2021-11-09 02:32:17',
            ),
            67 => 
            array (
                'created_at' => '2021-11-09 02:32:17',
                'id' => '68',
                'key' => 'edit_attributes',
                'table_name' => 'attributes',
                'updated_at' => '2021-11-09 02:32:17',
            ),
            68 => 
            array (
                'created_at' => '2021-11-09 02:32:17',
                'id' => '69',
                'key' => 'add_attributes',
                'table_name' => 'attributes',
                'updated_at' => '2021-11-09 02:32:17',
            ),
            69 => 
            array (
                'created_at' => '2021-11-09 02:32:17',
                'id' => '70',
                'key' => 'delete_attributes',
                'table_name' => 'attributes',
                'updated_at' => '2021-11-09 02:32:17',
            ),
            70 => 
            array (
                'created_at' => '2021-12-03 07:03:32',
                'id' => '71',
                'key' => 'browse_transactions',
                'table_name' => 'transactions',
                'updated_at' => '2021-12-03 07:03:32',
            ),
            71 => 
            array (
                'created_at' => '2021-12-03 07:03:32',
                'id' => '72',
                'key' => 'read_transactions',
                'table_name' => 'transactions',
                'updated_at' => '2021-12-03 07:03:32',
            ),
            72 => 
            array (
                'created_at' => '2021-12-03 07:03:32',
                'id' => '73',
                'key' => 'edit_transactions',
                'table_name' => 'transactions',
                'updated_at' => '2021-12-03 07:03:32',
            ),
            73 => 
            array (
                'created_at' => '2021-12-03 07:03:32',
                'id' => '74',
                'key' => 'add_transactions',
                'table_name' => 'transactions',
                'updated_at' => '2021-12-03 07:03:32',
            ),
            74 => 
            array (
                'created_at' => '2021-12-03 07:03:32',
                'id' => '75',
                'key' => 'delete_transactions',
                'table_name' => 'transactions',
                'updated_at' => '2021-12-03 07:03:32',
            ),
            75 => 
            array (
                'created_at' => '2021-12-22 13:49:44',
                'id' => '76',
                'key' => 'browse_permissions',
                'table_name' => 'permissions',
                'updated_at' => '2021-12-22 13:49:44',
            ),
            76 => 
            array (
                'created_at' => '2021-12-22 13:49:44',
                'id' => '77',
                'key' => 'read_permissions',
                'table_name' => 'permissions',
                'updated_at' => '2021-12-22 13:49:44',
            ),
            77 => 
            array (
                'created_at' => '2021-12-22 13:49:44',
                'id' => '78',
                'key' => 'edit_permissions',
                'table_name' => 'permissions',
                'updated_at' => '2021-12-22 13:49:44',
            ),
            78 => 
            array (
                'created_at' => '2021-12-22 13:49:44',
                'id' => '79',
                'key' => 'add_permissions',
                'table_name' => 'permissions',
                'updated_at' => '2021-12-22 13:49:44',
            ),
            79 => 
            array (
                'created_at' => '2021-12-22 13:49:44',
                'id' => '80',
                'key' => 'delete_permissions',
                'table_name' => 'permissions',
                'updated_at' => '2021-12-22 13:49:44',
            ),
            80 => 
            array (
                'created_at' => '2021-12-22 13:50:28',
                'id' => '81',
                'key' => 'read_detail_transactions',
                'table_name' => 'transactions',
                'updated_at' => '2021-12-22 13:50:49',
            ),
            81 => 
            array (
                'created_at' => '2021-12-22 13:51:15',
                'id' => '82',
                'key' => 'shipping_transactions',
                'table_name' => 'transactions',
                'updated_at' => '2021-12-22 13:51:15',
            ),
            82 => 
            array (
                'created_at' => '2022-01-16 13:28:41',
                'id' => '83',
                'key' => 'import_products',
                'table_name' => 'products',
                'updated_at' => '2022-01-16 13:28:41',
            ),
            83 => 
            array (
                'created_at' => '2022-01-31 17:24:18',
                'id' => '84',
                'key' => 'browse_website_feedback',
                'table_name' => 'website_feedback',
                'updated_at' => '2022-01-31 17:24:18',
            ),
            84 => 
            array (
                'created_at' => '2022-01-31 17:24:18',
                'id' => '85',
                'key' => 'read_website_feedback',
                'table_name' => 'website_feedback',
                'updated_at' => '2022-01-31 17:24:18',
            ),
            85 => 
            array (
                'created_at' => '2022-01-31 17:24:18',
                'id' => '86',
                'key' => 'edit_website_feedback',
                'table_name' => 'website_feedback',
                'updated_at' => '2022-01-31 17:24:18',
            ),
            86 => 
            array (
                'created_at' => '2022-01-31 17:24:18',
                'id' => '87',
                'key' => 'add_website_feedback',
                'table_name' => 'website_feedback',
                'updated_at' => '2022-01-31 17:24:18',
            ),
            87 => 
            array (
                'created_at' => '2022-01-31 17:24:18',
                'id' => '88',
                'key' => 'delete_website_feedback',
                'table_name' => 'website_feedback',
                'updated_at' => '2022-01-31 17:24:18',
            ),
            88 => 
            array (
                'created_at' => '2022-01-31 17:27:53',
                'id' => '89',
                'key' => 'browse_sliders',
                'table_name' => 'sliders',
                'updated_at' => '2022-01-31 17:27:53',
            ),
            89 => 
            array (
                'created_at' => '2022-01-31 17:27:53',
                'id' => '90',
                'key' => 'read_sliders',
                'table_name' => 'sliders',
                'updated_at' => '2022-01-31 17:27:53',
            ),
            90 => 
            array (
                'created_at' => '2022-01-31 17:27:53',
                'id' => '91',
                'key' => 'edit_sliders',
                'table_name' => 'sliders',
                'updated_at' => '2022-01-31 17:27:53',
            ),
            91 => 
            array (
                'created_at' => '2022-01-31 17:27:53',
                'id' => '92',
                'key' => 'add_sliders',
                'table_name' => 'sliders',
                'updated_at' => '2022-01-31 17:27:53',
            ),
            92 => 
            array (
                'created_at' => '2022-01-31 17:27:53',
                'id' => '93',
                'key' => 'delete_sliders',
                'table_name' => 'sliders',
                'updated_at' => '2022-01-31 17:27:53',
            ),
            93 => 
            array (
                'created_at' => '2022-01-31 17:34:24',
                'id' => '94',
                'key' => 'browse_homepage_contents',
                'table_name' => 'homepage_contents',
                'updated_at' => '2022-01-31 17:34:24',
            ),
            94 => 
            array (
                'created_at' => '2022-01-31 17:34:24',
                'id' => '95',
                'key' => 'read_homepage_contents',
                'table_name' => 'homepage_contents',
                'updated_at' => '2022-01-31 17:34:24',
            ),
            95 => 
            array (
                'created_at' => '2022-01-31 17:34:24',
                'id' => '96',
                'key' => 'edit_homepage_contents',
                'table_name' => 'homepage_contents',
                'updated_at' => '2022-01-31 17:34:24',
            ),
            96 => 
            array (
                'created_at' => '2022-01-31 17:34:24',
                'id' => '97',
                'key' => 'add_homepage_contents',
                'table_name' => 'homepage_contents',
                'updated_at' => '2022-01-31 17:34:24',
            ),
            97 => 
            array (
                'created_at' => '2022-01-31 17:34:24',
                'id' => '98',
                'key' => 'delete_homepage_contents',
                'table_name' => 'homepage_contents',
                'updated_at' => '2022-01-31 17:34:24',
            ),
        ));
        
        
    }
}