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
                'id' => 165,
                'tokenable_type' => 'App\\Models\\Customer',
                'tokenable_id' => 6,
                'name' => 'ApiToken',
                'token' => '0f20459d1b5a0462b9a3c8d93a367183bdee39972b7e019b8af3c486ff9bf9d5',
                'abilities' => '["*"]',
                'last_used_at' => '2021-12-11 04:48:16',
                'created_at' => '2021-12-11 04:48:04',
                'updated_at' => '2021-12-11 04:48:16',
            ),
            5 => 
            array (
                'id' => 166,
                'tokenable_type' => 'App\\Models\\Customer',
                'tokenable_id' => 7,
                'name' => 'ApiToken',
                'token' => 'fb652446076e2270e05fcafb950dbdabbbad9cf47d383acceb3fd0e4658a7c42',
                'abilities' => '["*"]',
                'last_used_at' => '2021-12-11 04:50:49',
                'created_at' => '2021-12-11 04:49:37',
                'updated_at' => '2021-12-11 04:50:49',
            ),
            6 => 
            array (
                'id' => 167,
                'tokenable_type' => 'App\\Models\\Customer',
                'tokenable_id' => 6,
                'name' => 'ApiToken',
                'token' => 'b7c69f3311ac155d9afeb17a2d3f24a748f5bfd1b7eb1bb6d3ee2c0f86a94710',
                'abilities' => '["*"]',
                'last_used_at' => NULL,
                'created_at' => '2021-12-11 18:18:13',
                'updated_at' => '2021-12-11 18:18:13',
            ),
            7 => 
            array (
                'id' => 168,
                'tokenable_type' => 'App\\Models\\Customer',
                'tokenable_id' => 6,
                'name' => 'ApiToken',
                'token' => 'aa9da12df510ba6ee6ec294059ac05fc6260103c290ef1a39d0f616edf7ac273',
                'abilities' => '["*"]',
                'last_used_at' => '2021-12-11 18:22:27',
                'created_at' => '2021-12-11 18:18:15',
                'updated_at' => '2021-12-11 18:22:27',
            ),
            8 => 
            array (
                'id' => 169,
                'tokenable_type' => 'App\\Models\\Customer',
                'tokenable_id' => 7,
                'name' => 'ApiToken',
                'token' => 'b41603035eb4b175f4c3d53cdc0e2ec6eab98e8f8185d0ccd0aaed0742b4ab25',
                'abilities' => '["*"]',
                'last_used_at' => NULL,
                'created_at' => '2021-12-11 18:23:24',
                'updated_at' => '2021-12-11 18:23:24',
            ),
            9 => 
            array (
                'id' => 170,
                'tokenable_type' => 'App\\Models\\Customer',
                'tokenable_id' => 7,
                'name' => 'ApiToken',
                'token' => 'd77f74ec8157e4f1c8fc8f38a3364c96665a8bd8a3be6bd8bc6f96642ede5274',
                'abilities' => '["*"]',
                'last_used_at' => '2022-02-17 16:09:03',
                'created_at' => '2021-12-11 18:23:26',
                'updated_at' => '2022-02-17 16:09:03',
            ),
            10 => 
            array (
                'id' => 223,
                'tokenable_type' => 'App\\Models\\Customer',
                'tokenable_id' => 9,
                'name' => 'ApiToken',
                'token' => 'a6c5cc876cd448091ace9aba9a9b2b5f2c64437be41c03c1059567ad7d62040c',
                'abilities' => '["*"]',
                'last_used_at' => NULL,
                'created_at' => '2022-01-25 23:11:53',
                'updated_at' => '2022-01-25 23:11:53',
            ),
            11 => 
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
            12 => 
            array (
                'id' => 357,
                'tokenable_type' => 'App\\Models\\Customer',
                'tokenable_id' => 11,
                'name' => 'ApiToken',
                'token' => '6cec107816cba6550bbcdc4e887cd0214e222f0411fa2d9bae786eefab287d85',
                'abilities' => '["*"]',
                'last_used_at' => '2022-03-01 11:47:46',
                'created_at' => '2022-03-01 11:38:11',
                'updated_at' => '2022-03-01 11:47:46',
            ),
            13 => 
            array (
                'id' => 358,
                'tokenable_type' => 'App\\Models\\Customer',
                'tokenable_id' => 12,
                'name' => 'ApiToken',
                'token' => '7df87033bdc61bdbaa04c63823d23adbea916e2ac087da08ed881b9ede11b625',
                'abilities' => '["*"]',
                'last_used_at' => '2022-03-01 11:49:49',
                'created_at' => '2022-03-01 11:49:31',
                'updated_at' => '2022-03-01 11:49:49',
            ),
            14 => 
            array (
                'id' => 359,
                'tokenable_type' => 'App\\Models\\Customer',
                'tokenable_id' => 13,
                'name' => 'ApiToken',
                'token' => '72617ea8f1d38ff117573c0b1ec91208d4def659b96e2417c72b2677ce8e8299',
                'abilities' => '["*"]',
                'last_used_at' => '2022-03-01 11:58:54',
                'created_at' => '2022-03-01 11:53:30',
                'updated_at' => '2022-03-01 11:58:54',
            ),
        ));
        
        
    }
}