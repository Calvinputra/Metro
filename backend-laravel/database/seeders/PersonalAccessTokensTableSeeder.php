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
                'abilities' => '["*"]',
                'created_at' => '2021-11-07 10:51:29',
                'id' => '11',
                'last_used_at' => NULL,
                'name' => 'ApiToken',
                'token' => '14ad18ff07c6bb102206d10bfa52d4d23f16565502862aa3baf43d40ac57fbe4',
                'tokenable_id' => '5',
                'tokenable_type' => 'App\\Models\\Customer',
                'updated_at' => '2021-11-07 10:51:29',
            ),
            1 => 
            array (
                'abilities' => '["*"]',
                'created_at' => '2021-11-07 10:51:31',
                'id' => '12',
                'last_used_at' => '2021-11-15 04:10:16',
                'name' => 'ApiToken',
                'token' => '72277b8a61c99dd3bb4e6f33346a433e082aba5e7e5085fa5bab47a99bf07caa',
                'tokenable_id' => '5',
                'tokenable_type' => 'App\\Models\\Customer',
                'updated_at' => '2021-11-15 04:10:16',
            ),
            2 => 
            array (
                'abilities' => '["*"]',
                'created_at' => '2021-11-12 07:15:25',
                'id' => '21',
                'last_used_at' => NULL,
                'name' => 'ApiToken',
                'token' => '4f1da012da9c921045358b3be6081c118fe8fab3bac24036054a58f9a8544d93',
                'tokenable_id' => '5',
                'tokenable_type' => 'App\\Models\\Customer',
                'updated_at' => '2021-11-12 07:15:25',
            ),
            3 => 
            array (
                'abilities' => '["*"]',
                'created_at' => '2021-11-12 07:15:26',
                'id' => '22',
                'last_used_at' => '2021-11-15 04:11:13',
                'name' => 'ApiToken',
                'token' => '14a735a958e31bfbe6caf3c24a0795ee7665fb03136c17ea394b7949dfe2971b',
                'tokenable_id' => '5',
                'tokenable_type' => 'App\\Models\\Customer',
                'updated_at' => '2021-11-15 04:11:13',
            ),
            4 => 
            array (
                'abilities' => '["*"]',
                'created_at' => '2022-01-28 13:57:25',
                'id' => '226',
                'last_used_at' => NULL,
                'name' => 'ApiToken',
                'token' => '0026ce6352e4555d0f9d9507dc4a7db002ac595b4b0c1f573ce6b8cdbad6997f',
                'tokenable_id' => '10',
                'tokenable_type' => 'App\\Models\\Customer',
                'updated_at' => '2022-01-28 13:57:25',
            ),
            5 => 
            array (
                'abilities' => '["*"]',
                'created_at' => '2022-03-02 18:18:05',
                'id' => '334',
                'last_used_at' => '2022-03-02 18:18:39',
                'name' => 'ApiToken',
                'token' => 'f44733fbe529db609f8f7fdc1d2a63ea9a0b8eaf42b97cb471160dc61123c52e',
                'tokenable_id' => '11',
                'tokenable_type' => 'App\\Models\\Customer',
                'updated_at' => '2022-03-02 18:18:39',
            ),
            6 => 
            array (
                'abilities' => '["*"]',
                'created_at' => '2022-03-02 18:33:58',
                'id' => '335',
                'last_used_at' => '2022-03-02 18:34:06',
                'name' => 'ApiToken',
                'token' => 'fc8fdb944c85d46dca6979564e143acbf6bae17f15fcc25b9a3dcedcc61d724f',
                'tokenable_id' => '12',
                'tokenable_type' => 'App\\Models\\Customer',
                'updated_at' => '2022-03-02 18:34:06',
            ),
            7 => 
            array (
                'abilities' => '["*"]',
                'created_at' => '2022-03-02 18:40:15',
                'id' => '336',
                'last_used_at' => NULL,
                'name' => 'ApiToken',
                'token' => '70980152da24296dff60cb7e6f8cab2c2c9e410c752c53e2b972638fa2c262d5',
                'tokenable_id' => '12',
                'tokenable_type' => 'App\\Models\\Customer',
                'updated_at' => '2022-03-02 18:40:15',
            ),
            8 => 
            array (
                'abilities' => '["*"]',
                'created_at' => '2022-03-02 18:40:16',
                'id' => '337',
                'last_used_at' => '2022-03-02 18:40:23',
                'name' => 'ApiToken',
                'token' => '1afdb0b459164c60d917766c76d45c938bc14b793f24c9bbb45abfda7338da10',
                'tokenable_id' => '12',
                'tokenable_type' => 'App\\Models\\Customer',
                'updated_at' => '2022-03-02 18:40:23',
            ),
            9 => 
            array (
                'abilities' => '["*"]',
                'created_at' => '2022-03-02 18:49:16',
                'id' => '338',
                'last_used_at' => NULL,
                'name' => 'ApiToken',
                'token' => '8707756cbe5c77620e00e62076e75193ad62c02b61bffa62bfc7852906a2580a',
                'tokenable_id' => '12',
                'tokenable_type' => 'App\\Models\\Customer',
                'updated_at' => '2022-03-02 18:49:16',
            ),
            10 => 
            array (
                'abilities' => '["*"]',
                'created_at' => '2022-03-02 18:49:17',
                'id' => '339',
                'last_used_at' => '2022-03-02 18:56:24',
                'name' => 'ApiToken',
                'token' => '7cf3f24d5a5766d119d11d4b027f8277e2b7efff90372cc7e627e0695ba08ebe',
                'tokenable_id' => '12',
                'tokenable_type' => 'App\\Models\\Customer',
                'updated_at' => '2022-03-02 18:56:24',
            ),
            11 => 
            array (
                'abilities' => '["*"]',
                'created_at' => '2022-03-13 20:22:53',
                'id' => '425',
                'last_used_at' => NULL,
                'name' => 'ApiToken',
                'token' => 'cb7af4480e3ec62f126e3427ada449edd5e7dd67ffa44d3fc0177f77bff3e5ba',
                'tokenable_id' => '13',
                'tokenable_type' => 'App\\Models\\Customer',
                'updated_at' => '2022-03-13 20:22:53',
            ),
            12 => 
            array (
                'abilities' => '["*"]',
                'created_at' => '2022-03-13 20:22:54',
                'id' => '426',
                'last_used_at' => '2022-03-13 20:22:55',
                'name' => 'ApiToken',
                'token' => '94b92c2eab2843155e996812b64eb93848ae4b2fd70715db9210f589b03e580e',
                'tokenable_id' => '13',
                'tokenable_type' => 'App\\Models\\Customer',
                'updated_at' => '2022-03-13 20:22:55',
            ),
            13 => 
            array (
                'abilities' => '["*"]',
                'created_at' => '2022-03-17 17:14:57',
                'id' => '437',
                'last_used_at' => NULL,
                'name' => 'ApiToken',
                'token' => 'ed03881dbe21f38a603a0d34f9bfa464ad81c3eb0dc385258f9d23390eaa48c1',
                'tokenable_id' => '4',
                'tokenable_type' => 'App\\Models\\Customer',
                'updated_at' => '2022-03-17 17:14:57',
            ),
            14 => 
            array (
                'abilities' => '["*"]',
                'created_at' => '2022-03-17 17:14:58',
                'id' => '438',
                'last_used_at' => '2022-03-17 17:15:03',
                'name' => 'ApiToken',
                'token' => 'ecf6f75c1230f6390a130af08728525256ccee79cb38bc7d792b5589efd4ef27',
                'tokenable_id' => '4',
                'tokenable_type' => 'App\\Models\\Customer',
                'updated_at' => '2022-03-17 17:15:03',
            ),
            15 => 
            array (
                'abilities' => '["*"]',
                'created_at' => '2022-03-18 22:03:17',
                'id' => '443',
                'last_used_at' => '2022-03-18 22:03:20',
                'name' => 'ApiToken',
                'token' => '139d221f118e2fca776bb7191b0d834bfe75db97960159b6cbdb931a4dfa5afd',
                'tokenable_id' => '1',
                'tokenable_type' => 'App\\Models\\Customer',
                'updated_at' => '2022-03-18 22:03:20',
            ),
            16 => 
            array (
                'abilities' => '["*"]',
                'created_at' => '2022-03-18 22:06:00',
                'id' => '445',
                'last_used_at' => '2022-03-18 22:06:22',
                'name' => 'ApiToken',
                'token' => '7225812be1370742fa1c72cbb54ae81e2d4e6708b8afbe97ca671d484fd5bbc9',
                'tokenable_id' => '14',
                'tokenable_type' => 'App\\Models\\Customer',
                'updated_at' => '2022-03-18 22:06:22',
            ),
            17 => 
            array (
                'abilities' => '["*"]',
                'created_at' => '2022-03-24 21:55:27',
                'id' => '447',
                'last_used_at' => '2022-03-24 22:30:47',
                'name' => 'ApiToken',
                'token' => '750b0ff34f9103e4fa004d0f2bff51e8e1e784ce246c92af2f00d6f08f5dc14d',
                'tokenable_id' => '16',
                'tokenable_type' => 'App\\Models\\Customer',
                'updated_at' => '2022-03-24 22:30:47',
            ),
            18 => 
            array (
                'abilities' => '["*"]',
                'created_at' => '2022-03-27 09:16:02',
                'id' => '448',
                'last_used_at' => '2022-03-27 09:19:15',
                'name' => 'ApiToken',
                'token' => 'f55981fdfabf5bd607fc1bcbadfa055d9cfa4efe15b4badbd2a9c81bb68c7a18',
                'tokenable_id' => '16',
                'tokenable_type' => 'App\\Models\\Customer',
                'updated_at' => '2022-03-27 09:19:15',
            ),
            19 => 
            array (
                'abilities' => '["*"]',
                'created_at' => '2022-03-29 15:16:37',
                'id' => '450',
                'last_used_at' => '2022-03-29 15:16:41',
                'name' => 'ApiToken',
                'token' => '2853ab6100e1d0934302b607ccf1f3750075770e13306b7a28eeb82e05275a16',
                'tokenable_id' => '17',
                'tokenable_type' => 'App\\Models\\Customer',
                'updated_at' => '2022-03-29 15:16:41',
            ),
        ));
        
        
    }
}