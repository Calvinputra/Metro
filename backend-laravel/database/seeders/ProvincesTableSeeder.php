<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProvincesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('provinces')->delete();
        
        \DB::table('provinces')->insert(array (
            0 => 
            array (
                'country_id' => '1',
                'created_at' => NULL,
                'id' => '1',
                'name' => 'Bali',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'country_id' => '1',
                'created_at' => NULL,
                'id' => '2',
                'name' => 'Bangka Belitung',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'country_id' => '1',
                'created_at' => NULL,
                'id' => '3',
                'name' => 'Banten',
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'country_id' => '1',
                'created_at' => NULL,
                'id' => '4',
                'name' => 'Bengkulu',
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'country_id' => '1',
                'created_at' => NULL,
                'id' => '5',
                'name' => 'DI Yogyakarta',
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'country_id' => '1',
                'created_at' => NULL,
                'id' => '6',
                'name' => 'DKI Jakarta',
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'country_id' => '1',
                'created_at' => NULL,
                'id' => '7',
                'name' => 'Gorontalo',
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'country_id' => '1',
                'created_at' => NULL,
                'id' => '8',
                'name' => 'Jambi',
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'country_id' => '1',
                'created_at' => NULL,
                'id' => '9',
                'name' => 'Jawa Barat',
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'country_id' => '1',
                'created_at' => NULL,
                'id' => '10',
                'name' => 'Jawa Tengah',
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'country_id' => '1',
                'created_at' => NULL,
                'id' => '11',
                'name' => 'Jawa Timur',
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'country_id' => '1',
                'created_at' => NULL,
                'id' => '12',
                'name' => 'Kalimantan Barat',
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'country_id' => '1',
                'created_at' => NULL,
                'id' => '13',
                'name' => 'Kalimantan Selatan',
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'country_id' => '1',
                'created_at' => NULL,
                'id' => '14',
                'name' => 'Kalimantan Tengah',
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'country_id' => '1',
                'created_at' => NULL,
                'id' => '15',
                'name' => 'Kalimantan Timur',
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'country_id' => '1',
                'created_at' => NULL,
                'id' => '16',
                'name' => 'Kalimantan Utara',
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'country_id' => '1',
                'created_at' => NULL,
                'id' => '17',
                'name' => 'Kepulauan Riau',
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'country_id' => '1',
                'created_at' => NULL,
                'id' => '18',
                'name' => 'Lampung',
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'country_id' => '1',
                'created_at' => NULL,
                'id' => '19',
                'name' => 'Maluku',
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'country_id' => '1',
                'created_at' => NULL,
                'id' => '20',
                'name' => 'Maluku Utara',
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'country_id' => '1',
                'created_at' => NULL,
                'id' => '21',
            'name' => 'Nanggroe Aceh Darussalam (NAD)',
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'country_id' => '1',
                'created_at' => NULL,
                'id' => '22',
            'name' => 'Nusa Tenggara Barat (NTB)',
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'country_id' => '1',
                'created_at' => NULL,
                'id' => '23',
            'name' => 'Nusa Tenggara Timur (NTT)',
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'country_id' => '1',
                'created_at' => NULL,
                'id' => '24',
                'name' => 'Papua',
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'country_id' => '1',
                'created_at' => NULL,
                'id' => '25',
                'name' => 'Papua Barat',
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'country_id' => '1',
                'created_at' => NULL,
                'id' => '26',
                'name' => 'Riau',
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'country_id' => '1',
                'created_at' => NULL,
                'id' => '27',
                'name' => 'Sulawesi Barat',
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'country_id' => '1',
                'created_at' => NULL,
                'id' => '28',
                'name' => 'Sulawesi Selatan',
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'country_id' => '1',
                'created_at' => NULL,
                'id' => '29',
                'name' => 'Sulawesi Tengah',
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'country_id' => '1',
                'created_at' => NULL,
                'id' => '30',
                'name' => 'Sulawesi Tenggara',
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'country_id' => '1',
                'created_at' => NULL,
                'id' => '31',
                'name' => 'Sulawesi Utara',
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'country_id' => '1',
                'created_at' => NULL,
                'id' => '32',
                'name' => 'Sumatera Barat',
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'country_id' => '1',
                'created_at' => NULL,
                'id' => '33',
                'name' => 'Sumatera Selatan',
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'country_id' => '1',
                'created_at' => NULL,
                'id' => '34',
                'name' => 'Sumatera Utara',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}