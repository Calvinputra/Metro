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
                'token' => 'e26c7738e6a9e650795c5fdee74218037884a99aa9e3b2e3eedb017ba9364a26',
                'abilities' => '["*"]',
                'last_used_at' => NULL,
                'created_at' => '2021-10-30 06:35:34',
                'updated_at' => '2021-10-30 06:35:34',
            ),
        ));
        
        
    }
}