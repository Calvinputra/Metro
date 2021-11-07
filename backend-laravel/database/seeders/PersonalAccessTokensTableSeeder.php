<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PersonalAccessTokensTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('personal_access_tokens')->delete();
        
        \DB::table('personal_access_tokens')->insert(array (
            0 => 
            array (
                'id' => 1,
                'tokenable_type' => 'App\\Models\\Customer',
                'tokenable_id' => 1,
                'name' => 'ApiToken',
                'token' => '52d3ac517b94703e57ecd8ad0cb1faed13b4fdaf61d6b6a9b86a632babb0fccb',
                'abilities' => '["*"]',
                'last_used_at' => NULL,
                'created_at' => '2021-11-05 15:11:19',
                'updated_at' => '2021-11-05 15:11:19',
            ),
            1 => 
            array (
                'id' => 2,
                'tokenable_type' => 'App\\Models\\Customer',
                'tokenable_id' => 1,
                'name' => 'ApiToken',
                'token' => '4bb5afc4ade3dec881b0cfb1c0fdb602225b0bbf00b3fda61cda56bcd5c2d907',
                'abilities' => '["*"]',
                'last_used_at' => '2021-11-05 15:27:23',
                'created_at' => '2021-11-05 15:11:21',
                'updated_at' => '2021-11-05 15:27:23',
            ),
            2 => 
            array (
                'id' => 3,
                'tokenable_type' => 'App\\Models\\Customer',
                'tokenable_id' => 1,
                'name' => 'ApiToken',
                'token' => '31798b3b05f47fd3052619c79de9fb4af97e9d93fbad8233e5cdae99def78f1c',
                'abilities' => '["*"]',
                'last_used_at' => NULL,
                'created_at' => '2021-11-05 15:29:28',
                'updated_at' => '2021-11-05 15:29:28',
            ),
            3 => 
            array (
                'id' => 4,
                'tokenable_type' => 'App\\Models\\Customer',
                'tokenable_id' => 1,
                'name' => 'ApiToken',
                'token' => '6ef03e694aa1dbbfbd1767316f00a9dc66c3a1f616e998ff1cb7e73c24437e62',
                'abilities' => '["*"]',
                'last_used_at' => '2021-11-05 15:35:50',
                'created_at' => '2021-11-05 15:29:29',
                'updated_at' => '2021-11-05 15:35:50',
            ),
            4 => 
            array (
                'id' => 5,
                'tokenable_type' => 'App\\Models\\Customer',
                'tokenable_id' => 1,
                'name' => 'ApiToken',
                'token' => '61d58242ae83f69fedc699badcd62c04d4bf002890fa15fbabd912ebb2897166',
                'abilities' => '["*"]',
                'last_used_at' => NULL,
                'created_at' => '2021-11-06 11:24:24',
                'updated_at' => '2021-11-06 11:24:24',
            ),
            5 => 
            array (
                'id' => 6,
                'tokenable_type' => 'App\\Models\\Customer',
                'tokenable_id' => 1,
                'name' => 'ApiToken',
                'token' => '06c9d7f32f1945b3072a3385c91fb581566a903b203993ae28b09023cfa68eb2',
                'abilities' => '["*"]',
                'last_used_at' => '2021-11-06 11:24:26',
                'created_at' => '2021-11-06 11:24:25',
                'updated_at' => '2021-11-06 11:24:26',
            ),
            6 => 
            array (
                'id' => 7,
                'tokenable_type' => 'App\\Models\\Customer',
                'tokenable_id' => 1,
                'name' => 'ApiToken',
                'token' => '0b601ee8870471d9ffee6ecc7c6780167aac8d274d86104099e97764a72eb3e6',
                'abilities' => '["*"]',
                'last_used_at' => NULL,
                'created_at' => '2021-11-06 11:27:20',
                'updated_at' => '2021-11-06 11:27:20',
            ),
            7 => 
            array (
                'id' => 8,
                'tokenable_type' => 'App\\Models\\Customer',
                'tokenable_id' => 1,
                'name' => 'ApiToken',
                'token' => 'f2e434f95d1fb1f0777b317dd44a35ed8427f5f75104110a51d1b2bdfb3e8045',
                'abilities' => '["*"]',
                'last_used_at' => NULL,
                'created_at' => '2021-11-06 11:27:21',
                'updated_at' => '2021-11-06 11:27:21',
            ),
            8 => 
            array (
                'id' => 9,
                'tokenable_type' => 'App\\Models\\Customer',
                'tokenable_id' => 1,
                'name' => 'ApiToken',
                'token' => '855b9662101bf91d7cf0f11eb6f31c9729713ff655facc5d7e5b7b54dd660868',
                'abilities' => '["*"]',
                'last_used_at' => NULL,
                'created_at' => '2021-11-06 11:51:12',
                'updated_at' => '2021-11-06 11:51:12',
            ),
            9 => 
            array (
                'id' => 10,
                'tokenable_type' => 'App\\Models\\Customer',
                'tokenable_id' => 1,
                'name' => 'ApiToken',
                'token' => 'ffd3162375f3943a2c78475ff972cb8c3d21d8b178bd2d135a44ecf4f4f31f9e',
                'abilities' => '["*"]',
                'last_used_at' => NULL,
                'created_at' => '2021-11-06 11:51:15',
                'updated_at' => '2021-11-06 11:51:15',
            ),
        ));
        
        
    }
}