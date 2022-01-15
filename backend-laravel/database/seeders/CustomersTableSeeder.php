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
                'password' => '$2y$10$t.aSPPwL6SsRXI/xtpusQ.U6VPEMT4kAm7.uLtsW3dCqLXS7soSUy',
                'token' => '206|1q0BHE7KPOQNjb8rKRYPIvobPu7PHlpsC2ZieNFy',
                'first_name' => 'Jonathan',
                'last_name' => 'Jonathan',
                'phone' => '08988606069',
                'email_verified_at' => '2021-10-30 13:24:00',
                'phone_verified_at' => '2021-10-30 13:24:00',
                'created_at' => '2021-10-30 06:24:26',
                'updated_at' => '2022-01-15 15:46:09',
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
                'updated_at' => '2021-12-11 18:22:27',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 7,
                'email' => 'jasonrenata01@gmail.com',
                'password' => '$2y$10$LykPF8D9Ie4wNVZqNABK9.Ka/cb1IP0mmrfRq9m0/dosrbPQD8yg2',
                'token' => '170|gAOhhPjayMVcgqVbp2AByvfdhttAbCqszYAkZrG8',
                'first_name' => 'Jason',
                'last_name' => 'Renata',
                'phone' => '081234567891',
                'email_verified_at' => NULL,
                'phone_verified_at' => NULL,
                'created_at' => '2021-12-11 04:49:35',
                'updated_at' => '2021-12-11 18:23:26',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 8,
                'email' => 'jonathanchang961@gmail.com',
                'password' => '$2y$10$0Dn30dWkkJZj.V/bgx5I1uHwePkDVPcfIMuQR1a/lacxrYdquHRTu',
                'token' => NULL,
                'first_name' => 'Jonathan',
                'last_name' => 'Jonathan',
                'phone' => '081234567893',
                'email_verified_at' => '2021-12-13 16:24:07',
                'phone_verified_at' => NULL,
                'created_at' => '2021-12-13 16:23:07',
                'updated_at' => '2021-12-13 16:24:07',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}