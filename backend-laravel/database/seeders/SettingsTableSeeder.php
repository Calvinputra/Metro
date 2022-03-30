<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('settings')->delete();
        
        \DB::table('settings')->insert(array (
            0 => 
            array (
                'details' => '',
                'display_name' => 'Site Title',
                'group' => 'Site',
                'id' => '1',
                'key' => 'site.title',
                'order' => '1',
                'type' => 'text',
                'value' => 'Metro Jaya',
            ),
            1 => 
            array (
                'details' => '',
                'display_name' => 'Site Description',
                'group' => 'Site',
                'id' => '2',
                'key' => 'site.description',
                'order' => '2',
                'type' => 'text',
            'value' => 'Menjual : Kunci, engsel, door closer, floor hinge, kran, sanitary, bathup, closet, water heater, dll Toko Buka : Senin-sabtu(08:00 - 17:00)',
            ),
            2 => 
            array (
                'details' => '',
                'display_name' => 'Site Logo',
                'group' => 'Site',
                'id' => '3',
                'key' => 'site.logo',
                'order' => '3',
                'type' => 'image',
                'value' => '',
            ),
            3 => 
            array (
                'details' => '',
                'display_name' => 'Google Analytics Tracking ID',
                'group' => 'Site',
                'id' => '4',
                'key' => 'site.google_analytics_tracking_id',
                'order' => '4',
                'type' => 'text',
                'value' => NULL,
            ),
            4 => 
            array (
                'details' => '',
                'display_name' => 'Admin Background Image',
                'group' => 'Admin',
                'id' => '5',
                'key' => 'admin.bg_image',
                'order' => '5',
                'type' => 'image',
                'value' => '',
            ),
            5 => 
            array (
                'details' => '',
                'display_name' => 'Admin Title',
                'group' => 'Admin',
                'id' => '6',
                'key' => 'admin.title',
                'order' => '1',
                'type' => 'text',
                'value' => 'Metro Jaya',
            ),
            6 => 
            array (
                'details' => '',
                'display_name' => 'Admin Description',
                'group' => 'Admin',
                'id' => '7',
                'key' => 'admin.description',
                'order' => '2',
                'type' => 'text',
                'value' => 'Metro Jaya Admin Panel',
            ),
            7 => 
            array (
                'details' => '',
                'display_name' => 'Admin Loader',
                'group' => 'Admin',
                'id' => '8',
                'key' => 'admin.loader',
                'order' => '3',
                'type' => 'image',
                'value' => '',
            ),
            8 => 
            array (
                'details' => '',
                'display_name' => 'Admin Icon Image',
                'group' => 'Admin',
                'id' => '9',
                'key' => 'admin.icon_image',
                'order' => '4',
                'type' => 'image',
                'value' => '',
            ),
            9 => 
            array (
                'details' => '',
            'display_name' => 'Google Analytics Client ID (used for admin dashboard)',
                'group' => 'Admin',
                'id' => '10',
                'key' => 'admin.google_analytics_client_id',
                'order' => '1',
                'type' => 'text',
                'value' => NULL,
            ),
            10 => 
            array (
                'details' => NULL,
                'display_name' => 'Alamat Perusahaan',
                'group' => 'Site',
                'id' => '11',
                'key' => 'site.company_address',
                'order' => '6',
                'type' => 'text',
                'value' => 'Jalan Kenari Lama Blok AK5 No. 13 Salemba Raya',
            ),
            11 => 
            array (
                'details' => NULL,
                'display_name' => 'Kota Perusahaan',
                'group' => 'Site',
                'id' => '12',
                'key' => 'site.company_city',
                'order' => '7',
                'type' => 'text',
                'value' => 'Jakarta',
            ),
            12 => 
            array (
                'details' => NULL,
                'display_name' => 'Email Perusahaan',
                'group' => 'Site',
                'id' => '13',
                'key' => 'site.company_email',
                'order' => '8',
                'type' => 'text',
                'value' => 'sycar.id@gmail.com',
            ),
            13 => 
            array (
                'details' => NULL,
                'display_name' => 'Fax Perusahaan',
                'group' => 'Site',
                'id' => '14',
                'key' => 'site.company_fax',
                'order' => '9',
                'type' => 'text',
            'value' => '(021) 31909846',
            ),
            14 => 
            array (
                'details' => NULL,
                'display_name' => 'Telp Perusahaan',
                'group' => 'Site',
                'id' => '15',
                'key' => 'site.company_phone',
                'order' => '10',
                'type' => 'text',
            'value' => '(021) 31935612',
            ),
            15 => 
            array (
                'details' => NULL,
                'display_name' => 'Nomer Wa Perusahaan',
                'group' => 'Site',
                'id' => '16',
                'key' => 'site.company_wa_phone',
                'order' => '11',
                'type' => 'text',
                'value' => '6287889240175',
            ),
            16 => 
            array (
                'details' => NULL,
                'display_name' => 'Link Tokopedia',
                'group' => 'Site',
                'id' => '17',
                'key' => 'site.company_tokopedia_link',
                'order' => '12',
                'type' => 'text',
                'value' => 'https://www.tokopedia.com/metro-jaya',
            ),
        ));
        
        
    }
}