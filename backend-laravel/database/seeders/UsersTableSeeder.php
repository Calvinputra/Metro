<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'avatar' => 'users/default.png',
                'created_at' => NULL,
                'deleted_at' => NULL,
                'email' => 'sycar.id@gmail.com',
                'email_verified_at' => NULL,
                'id' => '1',
                'name' => 'Admin',
                'password' => '$2y$10$6qTN5MnXqQCidcAk9nn4qOIkM/mCE5nP0OOn2ZspNq/wzPhMHn6BC',
                'remember_token' => 'GqXcNxWzc5bUEI5msVkpV1xIm8SjeaFMIlZYPeNBEQupjlkvuoOlOb60fSzw',
                'role_id' => '1',
                'settings' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}