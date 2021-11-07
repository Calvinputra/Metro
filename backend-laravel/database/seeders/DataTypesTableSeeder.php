<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DataTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('data_types')->delete();
        
        \DB::table('data_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'users',
                'slug' => 'users',
                'display_name_singular' => 'User',
                'display_name_plural' => 'Users',
                'icon' => 'voyager-person',
                'model_name' => 'TCG\\Voyager\\Models\\User',
                'policy_name' => 'TCG\\Voyager\\Policies\\UserPolicy',
                'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2021-10-20 02:36:38',
                'updated_at' => '2021-10-20 02:36:38',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'menus',
                'slug' => 'menus',
                'display_name_singular' => 'Menu',
                'display_name_plural' => 'Menus',
                'icon' => 'voyager-list',
                'model_name' => 'TCG\\Voyager\\Models\\Menu',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2021-10-20 02:36:38',
                'updated_at' => '2021-10-20 02:36:38',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'roles',
                'slug' => 'roles',
                'display_name_singular' => 'Role',
                'display_name_plural' => 'Roles',
                'icon' => 'voyager-lock',
                'model_name' => 'TCG\\Voyager\\Models\\Role',
                'policy_name' => NULL,
                'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2021-10-20 02:36:38',
                'updated_at' => '2021-10-20 02:36:38',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'categories',
                'slug' => 'categories',
                'display_name_singular' => 'Category',
                'display_name_plural' => 'Categories',
                'icon' => 'fas fa-boxes',
                'model_name' => 'App\\Models\\Category',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 1,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2021-10-20 03:05:37',
                'updated_at' => '2021-10-20 03:25:36',
            ),
            4 => 
            array (
                'id' => 6,
                'name' => 'audits',
                'slug' => 'audits',
                'display_name_singular' => 'Audit',
                'display_name_plural' => 'Audits',
                'icon' => 'fas fa-clipboard-list',
                'model_name' => 'App\\Models\\Audit',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 1,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2021-10-20 03:23:00',
                'updated_at' => '2021-10-20 03:25:27',
            ),
            5 => 
            array (
                'id' => 7,
                'name' => 'products',
                'slug' => 'products',
                'display_name_singular' => 'Product',
                'display_name_plural' => 'Products',
                'icon' => 'voyager-shop',
                'model_name' => 'App\\Models\\Product',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2021-10-20 03:27:29',
                'updated_at' => '2021-10-20 04:38:26',
            ),
            6 => 
            array (
                'id' => 8,
                'name' => 'customers',
                'slug' => 'customers',
                'display_name_singular' => 'Customer',
                'display_name_plural' => 'Customers',
                'icon' => 'voyager-people',
                'model_name' => 'App\\Models\\Customer',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 1,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2021-10-30 06:23:31',
                'updated_at' => '2021-10-30 06:24:57',
            ),
            7 => 
            array (
                'id' => 9,
                'name' => 'countries',
                'slug' => 'countries',
                'display_name_singular' => 'Country',
                'display_name_plural' => 'Countries',
                'icon' => 'fa fa-globe',
                'model_name' => 'App\\Models\\Country',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 1,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2021-11-06 13:26:40',
                'updated_at' => '2021-11-06 13:27:13',
            ),
            8 => 
            array (
                'id' => 10,
                'name' => 'provinces',
                'slug' => 'provinces',
                'display_name_singular' => 'Province',
                'display_name_plural' => 'Provinces',
                'icon' => 'fa fa-location-arrow',
                'model_name' => 'App\\Models\\Province',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 1,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2021-11-06 13:29:43',
                'updated_at' => '2021-11-06 13:33:24',
            ),
            9 => 
            array (
                'id' => 11,
                'name' => 'cities',
                'slug' => 'cities',
                'display_name_singular' => 'City',
                'display_name_plural' => 'Cities',
                'icon' => 'fa fa-building',
                'model_name' => 'App\\Models\\City',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 1,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2021-11-06 13:34:12',
                'updated_at' => '2021-11-06 13:35:28',
            ),
        ));
        
        
    }
}