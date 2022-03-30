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
            1 => 
            array (
                'id' => 12,
                'tokenable_type' => 'App\\Models\\Customer',
                'tokenable_id' => 5,
                'name' => 'ApiToken',
                'token' => '72277b8a61c99dd3bb4e6f33346a433e082aba5e7e5085fa5bab47a99bf07caa',
                'abilities' => '["*"]',
                'last_used_at' => '2021-11-15 04:10:16',
                'created_at' => '2021-11-07 10:51:31',
                'updated_at' => '2021-11-15 04:10:16',
            ),
            2 => 
            array (
                'id' => 21,
                'tokenable_type' => 'App\\Models\\Customer',
                'tokenable_id' => 5,
                'name' => 'ApiToken',
                'token' => '4f1da012da9c921045358b3be6081c118fe8fab3bac24036054a58f9a8544d93',
                'abilities' => '["*"]',
                'last_used_at' => NULL,
                'created_at' => '2021-11-12 07:15:25',
                'updated_at' => '2021-11-12 07:15:25',
            ),
            3 => 
            array (
                'id' => 22,
                'tokenable_type' => 'App\\Models\\Customer',
                'tokenable_id' => 5,
                'name' => 'ApiToken',
                'token' => '14a735a958e31bfbe6caf3c24a0795ee7665fb03136c17ea394b7949dfe2971b',
                'abilities' => '["*"]',
                'last_used_at' => '2021-11-15 04:11:13',
                'created_at' => '2021-11-12 07:15:26',
                'updated_at' => '2021-11-15 04:11:13',
            ),
            4 => 
            array (
                'id' => 226,
                'tokenable_type' => 'App\\Models\\Customer',
                'tokenable_id' => 10,
                'name' => 'ApiToken',
                'token' => '0026ce6352e4555d0f9d9507dc4a7db002ac595b4b0c1f573ce6b8cdbad6997f',
                'abilities' => '["*"]',
                'last_used_at' => NULL,
                'created_at' => '2022-01-28 13:57:25',
                'updated_at' => '2022-01-28 13:57:25',
            ),
            5 => 
            array (
                'id' => 334,
                'tokenable_type' => 'App\\Models\\Customer',
                'tokenable_id' => 11,
                'name' => 'ApiToken',
                'token' => 'f44733fbe529db609f8f7fdc1d2a63ea9a0b8eaf42b97cb471160dc61123c52e',
                'abilities' => '["*"]',
                'last_used_at' => '2022-03-02 18:18:39',
                'created_at' => '2022-03-02 18:18:05',
                'updated_at' => '2022-03-02 18:18:39',
            ),
            6 => 
            array (
                'id' => 335,
                'tokenable_type' => 'App\\Models\\Customer',
                'tokenable_id' => 12,
                'name' => 'ApiToken',
                'token' => 'fc8fdb944c85d46dca6979564e143acbf6bae17f15fcc25b9a3dcedcc61d724f',
                'abilities' => '["*"]',
                'last_used_at' => '2022-03-02 18:34:06',
                'created_at' => '2022-03-02 18:33:58',
                'updated_at' => '2022-03-02 18:34:06',
            ),
            7 => 
            array (
                'id' => 336,
                'tokenable_type' => 'App\\Models\\Customer',
                'tokenable_id' => 12,
                'name' => 'ApiToken',
                'token' => '70980152da24296dff60cb7e6f8cab2c2c9e410c752c53e2b972638fa2c262d5',
                'abilities' => '["*"]',
                'last_used_at' => NULL,
                'created_at' => '2022-03-02 18:40:15',
                'updated_at' => '2022-03-02 18:40:15',
            ),
            8 => 
            array (
                'id' => 337,
                'tokenable_type' => 'App\\Models\\Customer',
                'tokenable_id' => 12,
                'name' => 'ApiToken',
                'token' => '1afdb0b459164c60d917766c76d45c938bc14b793f24c9bbb45abfda7338da10',
                'abilities' => '["*"]',
                'last_used_at' => '2022-03-02 18:40:23',
                'created_at' => '2022-03-02 18:40:16',
                'updated_at' => '2022-03-02 18:40:23',
            ),
            9 => 
            array (
                'id' => 338,
                'tokenable_type' => 'App\\Models\\Customer',
                'tokenable_id' => 12,
                'name' => 'ApiToken',
                'token' => '8707756cbe5c77620e00e62076e75193ad62c02b61bffa62bfc7852906a2580a',
                'abilities' => '["*"]',
                'last_used_at' => NULL,
                'created_at' => '2022-03-02 18:49:16',
                'updated_at' => '2022-03-02 18:49:16',
            ),
            10 => 
            array (
                'id' => 339,
                'tokenable_type' => 'App\\Models\\Customer',
                'tokenable_id' => 12,
                'name' => 'ApiToken',
                'token' => '7cf3f24d5a5766d119d11d4b027f8277e2b7efff90372cc7e627e0695ba08ebe',
                'abilities' => '["*"]',
                'last_used_at' => '2022-03-02 18:56:24',
                'created_at' => '2022-03-02 18:49:17',
                'updated_at' => '2022-03-02 18:56:24',
            ),
            11 => 
            array (
                'id' => 425,
                'tokenable_type' => 'App\\Models\\Customer',
                'tokenable_id' => 13,
                'name' => 'ApiToken',
                'token' => 'cb7af4480e3ec62f126e3427ada449edd5e7dd67ffa44d3fc0177f77bff3e5ba',
                'abilities' => '["*"]',
                'last_used_at' => NULL,
                'created_at' => '2022-03-13 20:22:53',
                'updated_at' => '2022-03-13 20:22:53',
            ),
            12 => 
            array (
                'id' => 426,
                'tokenable_type' => 'App\\Models\\Customer',
                'tokenable_id' => 13,
                'name' => 'ApiToken',
                'token' => '94b92c2eab2843155e996812b64eb93848ae4b2fd70715db9210f589b03e580e',
                'abilities' => '["*"]',
                'last_used_at' => '2022-03-13 20:22:55',
                'created_at' => '2022-03-13 20:22:54',
                'updated_at' => '2022-03-13 20:22:55',
            ),
            13 => 
            array (
                'id' => 437,
                'tokenable_type' => 'App\\Models\\Customer',
                'tokenable_id' => 4,
                'name' => 'ApiToken',
                'token' => 'ed03881dbe21f38a603a0d34f9bfa464ad81c3eb0dc385258f9d23390eaa48c1',
                'abilities' => '["*"]',
                'last_used_at' => NULL,
                'created_at' => '2022-03-17 17:14:57',
                'updated_at' => '2022-03-17 17:14:57',
            ),
            14 => 
            array (
                'id' => 438,
                'tokenable_type' => 'App\\Models\\Customer',
                'tokenable_id' => 4,
                'name' => 'ApiToken',
                'token' => 'ecf6f75c1230f6390a130af08728525256ccee79cb38bc7d792b5589efd4ef27',
                'abilities' => '["*"]',
                'last_used_at' => '2022-03-17 17:15:03',
                'created_at' => '2022-03-17 17:14:58',
                'updated_at' => '2022-03-17 17:15:03',
            ),
            15 => 
            array (
                'id' => 443,
                'tokenable_type' => 'App\\Models\\Customer',
                'tokenable_id' => 1,
                'name' => 'ApiToken',
                'token' => '139d221f118e2fca776bb7191b0d834bfe75db97960159b6cbdb931a4dfa5afd',
                'abilities' => '["*"]',
                'last_used_at' => '2022-03-18 22:03:20',
                'created_at' => '2022-03-18 22:03:17',
                'updated_at' => '2022-03-18 22:03:20',
            ),
            16 => 
            array (
                'id' => 445,
                'tokenable_type' => 'App\\Models\\Customer',
                'tokenable_id' => 14,
                'name' => 'ApiToken',
                'token' => '7225812be1370742fa1c72cbb54ae81e2d4e6708b8afbe97ca671d484fd5bbc9',
                'abilities' => '["*"]',
                'last_used_at' => '2022-03-18 22:06:22',
                'created_at' => '2022-03-18 22:06:00',
                'updated_at' => '2022-03-18 22:06:22',
            ),
            17 => 
            array (
                'id' => 447,
                'tokenable_type' => 'App\\Models\\Customer',
                'tokenable_id' => 16,
                'name' => 'ApiToken',
                'token' => '750b0ff34f9103e4fa004d0f2bff51e8e1e784ce246c92af2f00d6f08f5dc14d',
                'abilities' => '["*"]',
                'last_used_at' => '2022-03-24 22:30:47',
                'created_at' => '2022-03-24 21:55:27',
                'updated_at' => '2022-03-24 22:30:47',
            ),
            18 => 
            array (
                'id' => 448,
                'tokenable_type' => 'App\\Models\\Customer',
                'tokenable_id' => 16,
                'name' => 'ApiToken',
                'token' => 'f55981fdfabf5bd607fc1bcbadfa055d9cfa4efe15b4badbd2a9c81bb68c7a18',
                'abilities' => '["*"]',
                'last_used_at' => '2022-03-27 09:19:15',
                'created_at' => '2022-03-27 09:16:02',
                'updated_at' => '2022-03-27 09:19:15',
            ),
            19 => 
            array (
                'id' => 450,
                'tokenable_type' => 'App\\Models\\Customer',
                'tokenable_id' => 17,
                'name' => 'ApiToken',
                'token' => '2853ab6100e1d0934302b607ccf1f3750075770e13306b7a28eeb82e05275a16',
                'abilities' => '["*"]',
                'last_used_at' => '2022-03-29 15:16:41',
                'created_at' => '2022-03-29 15:16:37',
                'updated_at' => '2022-03-29 15:16:41',
            ),
        ));
        
        
    }
}