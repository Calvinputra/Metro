<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('customers')->delete();
        
        \DB::table('customers')->insert(array (
            0 => 
            array (
                'id' => 1,
                'email' => 'Jonathanchang96@gmail.com',
                'password' => '$2y$10$toM.N6rPojAlGZvxjTjpo.eQtMsMZKxinMAxiv/L6B.sKdqWNduma',
                'first_name' => 'Jonathan',
                'last_name' => 'Jonathan',
                'phone' => '08988606069',
                'email_verified_at' => '2021-10-30 13:24:00',
                'phone_verified_at' => '2021-10-30 13:24:00',
                'created_at' => '2021-10-30 06:24:26',
                'updated_at' => '2021-11-06 11:51:15',
                'deleted_at' => NULL,
                'token' => '10|VK6B1m6tMZSn1Pv44Q35CWKqrRSYkyczdjdat0oT',
            ),
            1 => 
            array (
                'id' => 4,
                'email' => 'jonathanchang962@gmail.com',
                'password' => '$2y$10$g8jIqZnlC.QfZQOuIOoGNeOy8Mbl4MMtLzoYyKq.s.BCZsYlOeT5O',
                'first_name' => 'Jonathan',
                'last_name' => 'Jonathan',
                'phone' => '08988606069',
                'email_verified_at' => NULL,
                'phone_verified_at' => NULL,
                'created_at' => '2021-10-30 08:30:28',
                'updated_at' => '2021-10-30 08:30:28',
                'deleted_at' => NULL,
                'token' => NULL,
            ),
        ));
        
        
    }
}