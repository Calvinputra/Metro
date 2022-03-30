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
                'id' => 4,
                'email' => 'jonathanchang962@gmail.com',
                'password' => '$2y$10$g8jIqZnlC.QfZQOuIOoGNeOy8Mbl4MMtLzoYyKq.s.BCZsYlOeT5O',
                'token' => '438|WAdx4a5FFYu8RHoDN7MRcHjvTEdqa3MRoUQvG9Ir',
                'first_name' => 'Jonathan',
                'last_name' => 'Jonathan',
                'phone' => '08988606069',
                'email_verified_at' => NULL,
                'phone_verified_at' => NULL,
                'created_at' => '2021-10-30 08:30:28',
                'updated_at' => '2022-03-17 17:14:58',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 5,
                'email' => 'jonathan@dsgp.co.id',
                'password' => '$2y$10$wJ97jdGe/GglZlVNgqn5VOtw1AQM6p.NlMZR9hyopWu5mRel3z5ia',
                'token' => '22|aYAUqjJWIIMnJkRLG3ukDWQoBtH5gqFonzdz71xJ',
                'first_name' => 'Jonathan',
                'last_name' => 'Jonathan',
                'phone' => '08988606068
',
                'email_verified_at' => NULL,
                'phone_verified_at' => NULL,
                'created_at' => '2021-11-07 10:50:07',
                'updated_at' => '2021-11-12 07:15:26',
                'deleted_at' => NULL,
            ),
            2 => 
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
                'updated_at' => '2022-03-29 22:25:27',
                'deleted_at' => NULL,
            ),
            3 => 
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
                'updated_at' => '2022-03-27 21:03:08',
                'deleted_at' => NULL,
            ),
            4 => 
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
            5 => 
            array (
                'id' => 9,
                'email' => 'jonathan@grahacitrapratama.co.id',
                'password' => '$2y$10$0Vwr7mL.IvNtSyD5kHpsZORwYLawGtc/Ef7aiMeh0d4jK8oF4J4Ru',
                'token' => NULL,
                'first_name' => 'algania',
                'last_name' => 'kurniawan',
                'phone' => '08123578120938',
                'email_verified_at' => NULL,
                'phone_verified_at' => NULL,
                'created_at' => '2022-01-25 23:11:50',
                'updated_at' => '2022-03-18 21:54:14',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 10,
                'email' => 'sugianto210671@gmail.com',
                'password' => '$2y$10$kyHvVKBf8SFUY1idtX2eDe57eQSuBpqqLrmdM2dEwcqHE3twHgfQ.',
                'token' => NULL,
                'first_name' => 'vel',
                'last_name' => 'vel',
                'phone' => '0812368741203',
                'email_verified_at' => NULL,
                'phone_verified_at' => NULL,
                'created_at' => '2022-01-28 13:57:21',
                'updated_at' => '2022-01-28 13:58:53',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 11,
                'email' => 'metrojayaindonesia@gmail.com',
                'password' => '$2y$10$xhNDNczv0TNthDPBE9/71e.C.AHQ1FUHm.jF9wiyEkmQ45zW8uh6a',
                'token' => NULL,
                'first_name' => 'lia',
                'last_name' => 'jaya',
                'phone' => '085691408632',
                'email_verified_at' => NULL,
                'phone_verified_at' => NULL,
                'created_at' => '2022-03-02 18:18:04',
                'updated_at' => '2022-03-02 18:18:39',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 12,
                'email' => 'calvinputranirwana@gmail.com',
                'password' => '$2y$10$67P0slp21zajx6JEMBf1IOGqEeOV5QeAxn23LInaD/mpd/qkwO0yy',
                'token' => NULL,
                'first_name' => 'lia',
                'last_name' => 'Nirwana',
                'phone' => '082111392108',
                'email_verified_at' => NULL,
                'phone_verified_at' => NULL,
                'created_at' => '2022-03-02 18:33:56',
                'updated_at' => '2022-03-02 18:56:24',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 13,
                'email' => 'calvin@gmail.com',
                'password' => '$2y$10$3PJPm50X7fEJiISifzp0wuoONGzECDwWz6lTO8aoaKp9SxGXg7rzS',
                'token' => '426|3vIId6mYkcwM3148tjeoLeGCVYy7mjTI9Udd9TdK',
                'first_name' => 'Lia',
                'last_name' => 'Lai',
                'phone' => '0821221544545',
                'email_verified_at' => NULL,
                'phone_verified_at' => NULL,
                'created_at' => '2022-03-02 18:58:05',
                'updated_at' => '2022-03-13 20:22:54',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 14,
                'email' => 'sycar.id@gmail.com',
                'password' => '$2y$10$7IdRi015p.5BQEjiDFawuuMe5tm2JUpKy2xEv9kgWRH4gFXlO.TX6',
                'token' => '445|tkq3D1p32BdElFYqg7cfvGUe6b2f91VLEXZLzvQz',
                'first_name' => 'Sycar',
                'last_name' => 'id',
                'phone' => NULL,
                'email_verified_at' => NULL,
                'phone_verified_at' => NULL,
                'created_at' => '2022-03-18 22:06:00',
                'updated_at' => '2022-03-18 22:06:00',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 15,
                'email' => 'nikoosetiawan28@gmail.com',
                'password' => '$2y$10$mszjdUpc22j327RicUGFrui13KnIYOQjqxczllqyVqEh5VQ4vv5di',
                'token' => NULL,
                'first_name' => 'Niko',
                'last_name' => 'Setiawan',
                'phone' => '087887460528',
                'email_verified_at' => '2022-03-18 22:17:50',
                'phone_verified_at' => NULL,
                'created_at' => '2022-03-18 22:14:25',
                'updated_at' => '2022-03-18 22:18:37',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 16,
                'email' => 'jonathanchang96@gmail.com',
                'password' => '$2y$10$Gqi6rHMoB7mHL6uyqhx.POSUtLJImJ0NPRSSinFXXvoijtwapUEx2',
                'token' => '448|klF2S9hYI6si7gAPCW7oY4j56jpIaTUV7mBE7eq7',
                'first_name' => 'Jonathan',
                'last_name' => 'Jonathan',
                'phone' => '08988606067',
                'email_verified_at' => '2022-03-24 22:46:13',
                'phone_verified_at' => NULL,
                'created_at' => '2022-03-24 21:55:26',
                'updated_at' => '2022-03-27 09:18:12',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 17,
                'email' => 'yohanestkg25@gmail.com',
                'password' => '$2y$10$yb.CBo5.Ifej19yWd6Myke4EF9n.lnYo6QUt15Di8ghN4UdgGCwMG',
                'token' => '450|Sx5sXYmEZkiOn0n3vxfMyhGYB4IHKtCU59XG3UuV',
                'first_name' => 'Yohanes',
                'last_name' => 'Peggy Limesa',
                'phone' => NULL,
                'email_verified_at' => NULL,
                'phone_verified_at' => NULL,
                'created_at' => '2022-03-29 15:16:37',
                'updated_at' => '2022-03-29 15:16:37',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}