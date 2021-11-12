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
                'last_used_at' => '2021-11-07 11:32:42',
                'created_at' => '2021-11-05 15:11:21',
                'updated_at' => '2021-11-07 11:32:42',
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
            10 => 
            array (
                'id' => 11,
                'tokenable_type' => 'App\\Models\\Customer',
                'tokenable_id' => 5,
                'name' => 'ApiToken',
                'token' => '14ad18ff07c6bb102206d10bfa52d4d23f16565502862aa3baf43d40ac57fbe4',
                'abilities' => '["*"]',
                'last_used_at' => NULL,
                'created_at' => '2021-11-07 10:51:29',
                'updated_at' => '2021-11-07 10:51:29',
            ),
            11 => 
            array (
                'id' => 12,
                'tokenable_type' => 'App\\Models\\Customer',
                'tokenable_id' => 5,
                'name' => 'ApiToken',
                'token' => '72277b8a61c99dd3bb4e6f33346a433e082aba5e7e5085fa5bab47a99bf07caa',
                'abilities' => '["*"]',
                'last_used_at' => '2021-11-12 03:31:03',
                'created_at' => '2021-11-07 10:51:31',
                'updated_at' => '2021-11-12 03:31:03',
            ),
            12 => 
            array (
                'id' => 13,
                'tokenable_type' => 'App\\Models\\Customer',
                'tokenable_id' => 1,
                'name' => 'ApiToken',
                'token' => 'f61c1038784b80dd4be01ac7ef8b8a9bea125ce854867642947b4d1ce3c59369',
                'abilities' => '["*"]',
                'last_used_at' => NULL,
                'created_at' => '2021-11-07 14:29:03',
                'updated_at' => '2021-11-07 14:29:03',
            ),
            13 => 
            array (
                'id' => 14,
                'tokenable_type' => 'App\\Models\\Customer',
                'tokenable_id' => 1,
                'name' => 'ApiToken',
                'token' => '9910ace36255f1e502c2a15f97edb977bfaaa6f07b13d9d128095f13b3bbb12b',
                'abilities' => '["*"]',
                'last_used_at' => '2021-11-07 15:26:51',
                'created_at' => '2021-11-07 14:29:05',
                'updated_at' => '2021-11-07 15:26:51',
            ),
            14 => 
            array (
                'id' => 15,
                'tokenable_type' => 'App\\Models\\Customer',
                'tokenable_id' => 1,
                'name' => 'ApiToken',
                'token' => '94ca3eae93d4875a562b8220fba10c293cd484a8d4b3ee13df3fe99aae884c51',
                'abilities' => '["*"]',
                'last_used_at' => NULL,
                'created_at' => '2021-11-08 14:59:27',
                'updated_at' => '2021-11-08 14:59:27',
            ),
            15 => 
            array (
                'id' => 16,
                'tokenable_type' => 'App\\Models\\Customer',
                'tokenable_id' => 1,
                'name' => 'ApiToken',
                'token' => '57cbba9d34483e7338025879d6a4873f52d9ce86119929b896ce39716e79ba33',
                'abilities' => '["*"]',
                'last_used_at' => '2021-11-09 07:44:40',
                'created_at' => '2021-11-08 14:59:29',
                'updated_at' => '2021-11-09 07:44:40',
            ),
            16 => 
            array (
                'id' => 17,
                'tokenable_type' => 'App\\Models\\Customer',
                'tokenable_id' => 1,
                'name' => 'ApiToken',
                'token' => '470d363ebf812923407baf227a20f7e9611645cfacab2ba06a66328e1e6cc6a5',
                'abilities' => '["*"]',
                'last_used_at' => NULL,
                'created_at' => '2021-11-12 03:16:23',
                'updated_at' => '2021-11-12 03:16:23',
            ),
            17 => 
            array (
                'id' => 18,
                'tokenable_type' => 'App\\Models\\Customer',
                'tokenable_id' => 1,
                'name' => 'ApiToken',
                'token' => '4535f6cf0ba37e03dec7c4d0d80fc758b4b1fd5f52d53aa437e557c7176dd439',
                'abilities' => '["*"]',
                'last_used_at' => '2021-11-12 06:40:29',
                'created_at' => '2021-11-12 03:16:24',
                'updated_at' => '2021-11-12 06:40:29',
            ),
            18 => 
            array (
                'id' => 19,
                'tokenable_type' => 'App\\Models\\Customer',
                'tokenable_id' => 1,
                'name' => 'ApiToken',
                'token' => '79e98ac83fa5150e1e1ffc587d91138b71d9f811658b6ebb590c4db672a1f77e',
                'abilities' => '["*"]',
                'last_used_at' => NULL,
                'created_at' => '2021-11-12 06:43:29',
                'updated_at' => '2021-11-12 06:43:29',
            ),
            19 => 
            array (
                'id' => 20,
                'tokenable_type' => 'App\\Models\\Customer',
                'tokenable_id' => 1,
                'name' => 'ApiToken',
                'token' => '9389da8a77f8c6a4cfb8468f83959becd6edeb8a8faf94e3c9ea93e9943f73c4',
                'abilities' => '["*"]',
                'last_used_at' => '2021-11-12 06:56:03',
                'created_at' => '2021-11-12 06:43:30',
                'updated_at' => '2021-11-12 06:56:03',
            ),
        ));
        
        
    }
}