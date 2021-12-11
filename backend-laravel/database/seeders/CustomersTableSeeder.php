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
                'token' => '164|F9ux99qhxTYymPEkbQGsA3ZvACSqhbPGb0Oop6bM',
                'first_name' => 'Jonathan',
                'last_name' => 'Jonathan',
                'phone' => '08988606069',
                'email_verified_at' => '2021-10-30 13:24:00',
                'phone_verified_at' => '2021-10-30 13:24:00',
                'created_at' => '2021-10-30 06:24:26',
                'updated_at' => '2021-12-11 04:27:35',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 4,
                'email' => 'jonathanchang962@gmail.com',
                'password' => '$2y$10$g8jIqZnlC.QfZQOuIOoGNeOy8Mbl4MMtLzoYyKq.s.BCZsYlOeT5O',
                'token' => NULL,
                'first_name' => 'Jonathan',
                'last_name' => 'Jonathan',
                'phone' => '08988606069',
                'email_verified_at' => NULL,
                'phone_verified_at' => NULL,
                'created_at' => '2021-10-30 08:30:28',
                'updated_at' => '2021-10-30 08:30:28',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 5,
                'email' => 'jonathan@dsgp.co.id',
                'password' => '$2y$10$wJ97jdGe/GglZlVNgqn5VOtw1AQM6p.NlMZR9hyopWu5mRel3z5ia',
                'token' => '22|aYAUqjJWIIMnJkRLG3ukDWQoBtH5gqFonzdz71xJ',
                'first_name' => 'Jonathan',
                'last_name' => 'Jonathan',
                'phone' => '08988606069',
                'email_verified_at' => NULL,
                'phone_verified_at' => NULL,
                'created_at' => '2021-11-07 10:50:07',
                'updated_at' => '2021-11-12 07:15:26',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 6,
                'email' => 'calvinputranirwana2001@gmail.com',
                'password' => '$2y$10$hMyI0ESG5SXsH7BRyavFS.yYqOg45JTLj/GUjsWn1IDQp5xYP5YqC',
                'token' => NULL,
                'first_name' => 'Calvin Putra',
                'last_name' => 'Nirwana',
                'phone' => '081234567890',
                'email_verified_at' => NULL,
                'phone_verified_at' => NULL,
                'created_at' => '2021-12-11 04:48:02',
                'updated_at' => '2021-12-11 04:48:16',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 7,
                'email' => 'jasonrenata01@gmail.com',
                'password' => '$2y$10$LykPF8D9Ie4wNVZqNABK9.Ka/cb1IP0mmrfRq9m0/dosrbPQD8yg2',
                'token' => NULL,
                'first_name' => 'Jason',
                'last_name' => 'Renata',
                'phone' => '081234567891',
                'email_verified_at' => NULL,
                'phone_verified_at' => NULL,
                'created_at' => '2021-12-11 04:49:35',
                'updated_at' => '2021-12-11 04:50:49',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}