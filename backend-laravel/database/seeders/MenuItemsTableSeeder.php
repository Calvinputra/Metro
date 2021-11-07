<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MenuItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menu_items')->delete();
        
        \DB::table('menu_items')->insert(array (
            0 => 
            array (
                'id' => 1,
                'menu_id' => 1,
                'title' => 'Dashboard',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-boat',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 1,
                'created_at' => '2021-10-20 02:36:38',
                'updated_at' => '2021-10-20 02:36:38',
                'route' => 'voyager.dashboard',
                'parameters' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'menu_id' => 1,
                'title' => 'Media',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-images',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 5,
                'created_at' => '2021-10-20 02:36:38',
                'updated_at' => '2021-10-20 02:36:38',
                'route' => 'voyager.media.index',
                'parameters' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'menu_id' => 1,
                'title' => 'Users',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-person',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 3,
                'created_at' => '2021-10-20 02:36:38',
                'updated_at' => '2021-10-20 02:36:38',
                'route' => 'voyager.users.index',
                'parameters' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'menu_id' => 1,
                'title' => 'Roles',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-lock',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 2,
                'created_at' => '2021-10-20 02:36:38',
                'updated_at' => '2021-10-20 02:36:38',
                'route' => 'voyager.roles.index',
                'parameters' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'menu_id' => 1,
                'title' => 'Tools',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-tools',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 9,
                'created_at' => '2021-10-20 02:36:38',
                'updated_at' => '2021-10-20 02:36:38',
                'route' => NULL,
                'parameters' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'menu_id' => 1,
                'title' => 'Menu Builder',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-list',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 10,
                'created_at' => '2021-10-20 02:36:38',
                'updated_at' => '2021-10-20 02:36:38',
                'route' => 'voyager.menus.index',
                'parameters' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'menu_id' => 1,
                'title' => 'Database',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-data',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 11,
                'created_at' => '2021-10-20 02:36:38',
                'updated_at' => '2021-10-20 02:36:38',
                'route' => 'voyager.database.index',
                'parameters' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'menu_id' => 1,
                'title' => 'Compass',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-compass',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 12,
                'created_at' => '2021-10-20 02:36:38',
                'updated_at' => '2021-10-20 02:36:38',
                'route' => 'voyager.compass.index',
                'parameters' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'menu_id' => 1,
                'title' => 'BREAD',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-bread',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 13,
                'created_at' => '2021-10-20 02:36:38',
                'updated_at' => '2021-10-20 02:36:38',
                'route' => 'voyager.bread.index',
                'parameters' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'menu_id' => 1,
                'title' => 'Settings',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-settings',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 14,
                'created_at' => '2021-10-20 02:36:38',
                'updated_at' => '2021-10-20 02:36:38',
                'route' => 'voyager.settings.index',
                'parameters' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'menu_id' => 1,
                'title' => 'Categories',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'fas fa-boxes',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 15,
                'created_at' => '2021-10-20 03:05:37',
                'updated_at' => '2021-10-20 03:05:37',
                'route' => 'voyager.categories.index',
                'parameters' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'menu_id' => 1,
                'title' => 'Audits',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'fas fa-clipboard-list',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 16,
                'created_at' => '2021-10-20 03:23:00',
                'updated_at' => '2021-10-20 03:23:25',
                'route' => 'voyager.audits.index',
                'parameters' => 'null',
            ),
            12 => 
            array (
                'id' => 13,
                'menu_id' => 1,
                'title' => 'Products',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-shop',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 17,
                'created_at' => '2021-10-20 03:27:29',
                'updated_at' => '2021-10-20 03:27:29',
                'route' => 'voyager.products.index',
                'parameters' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'menu_id' => 2,
                'title' => 'Kategori 1',
                'url' => '#',
                'target' => '_self',
                'icon_class' => NULL,
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 1,
                'created_at' => '2021-10-20 04:13:04',
                'updated_at' => '2021-10-20 04:25:58',
                'route' => NULL,
                'parameters' => '',
            ),
            14 => 
            array (
                'id' => 15,
                'menu_id' => 2,
                'title' => 'Kategori 2',
                'url' => '#',
                'target' => '_self',
                'icon_class' => NULL,
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 2,
                'created_at' => '2021-10-20 04:13:14',
                'updated_at' => '2021-10-20 04:25:58',
                'route' => NULL,
                'parameters' => '',
            ),
            15 => 
            array (
                'id' => 16,
                'menu_id' => 2,
                'title' => 'Kategori 3',
                'url' => '#',
                'target' => '_self',
                'icon_class' => NULL,
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 3,
                'created_at' => '2021-10-20 04:13:24',
                'updated_at' => '2021-10-20 04:23:22',
                'route' => NULL,
                'parameters' => '',
            ),
            16 => 
            array (
                'id' => 17,
                'menu_id' => 3,
                'title' => 'Kategori 1',
                'url' => '#',
                'target' => '_self',
                'icon_class' => NULL,
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 21,
                'created_at' => '2021-10-20 04:17:02',
                'updated_at' => '2021-10-20 04:17:02',
                'route' => NULL,
                'parameters' => '',
            ),
            17 => 
            array (
                'id' => 18,
                'menu_id' => 3,
                'title' => 'Kategori 2',
                'url' => '#',
                'target' => '_self',
                'icon_class' => NULL,
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 22,
                'created_at' => '2021-10-20 04:19:17',
                'updated_at' => '2021-10-20 04:19:17',
                'route' => NULL,
                'parameters' => '',
            ),
            18 => 
            array (
                'id' => 19,
                'menu_id' => 4,
                'title' => 'Akun Saya',
                'url' => '#',
                'target' => '_self',
                'icon_class' => NULL,
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 23,
                'created_at' => '2021-10-20 04:20:31',
                'updated_at' => '2021-10-20 04:20:31',
                'route' => NULL,
                'parameters' => '',
            ),
            19 => 
            array (
                'id' => 20,
                'menu_id' => 5,
                'title' => 'Kebijakan Privasi',
                'url' => '#',
                'target' => '_self',
                'icon_class' => NULL,
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 24,
                'created_at' => '2021-10-20 04:21:15',
                'updated_at' => '2021-10-20 04:21:15',
                'route' => NULL,
                'parameters' => '',
            ),
            20 => 
            array (
                'id' => 21,
                'menu_id' => 1,
                'title' => 'Customers',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-people',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 25,
                'created_at' => '2021-10-30 06:23:31',
                'updated_at' => '2021-10-30 06:23:31',
                'route' => 'voyager.customers.index',
                'parameters' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'menu_id' => 1,
                'title' => 'Countries',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'fa fa-globe',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 26,
                'created_at' => '2021-11-06 13:26:40',
                'updated_at' => '2021-11-06 13:26:40',
                'route' => 'voyager.countries.index',
                'parameters' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'menu_id' => 1,
                'title' => 'Provinces',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'fa fa-location-arrow',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 27,
                'created_at' => '2021-11-06 13:29:43',
                'updated_at' => '2021-11-06 13:33:43',
                'route' => 'voyager.provinces.index',
                'parameters' => 'null',
            ),
            23 => 
            array (
                'id' => 24,
                'menu_id' => 1,
                'title' => 'Cities',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'fa fa-building',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 28,
                'created_at' => '2021-11-06 13:34:12',
                'updated_at' => '2021-11-06 13:34:12',
                'route' => 'voyager.cities.index',
                'parameters' => NULL,
            ),
        ));
        
        
    }
}