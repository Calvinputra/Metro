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
                'created_at' => '2021-10-30 08:30:28',
                'deleted_at' => NULL,
                'email' => 'jonathanchang962@gmail.com',
                'email_verified_at' => NULL,
                'first_name' => 'Jonathan',
                'id' => '4',
                'last_name' => 'Jonathan',
                'password' => '$2y$10$g8jIqZnlC.QfZQOuIOoGNeOy8Mbl4MMtLzoYyKq.s.BCZsYlOeT5O',
                'phone' => '08988606069',
                'phone_verified_at' => NULL,
                'token' => '438|WAdx4a5FFYu8RHoDN7MRcHjvTEdqa3MRoUQvG9Ir',
                'updated_at' => '2022-03-17 17:14:58',
            ),
            1 => 
            array (
                'created_at' => '2021-11-07 10:50:07',
                'deleted_at' => NULL,
                'email' => 'jonathan@dsgp.co.id',
                'email_verified_at' => NULL,
                'first_name' => 'Jonathan',
                'id' => '5',
                'last_name' => 'Jonathan',
                'password' => '$2y$10$wJ97jdGe/GglZlVNgqn5VOtw1AQM6p.NlMZR9hyopWu5mRel3z5ia',
                'phone' => '08988606068
',
                'phone_verified_at' => NULL,
                'token' => '22|aYAUqjJWIIMnJkRLG3ukDWQoBtH5gqFonzdz71xJ',
                'updated_at' => '2021-11-12 07:15:26',
            ),
            2 => 
            array (
                'created_at' => '2021-12-11 04:48:02',
                'deleted_at' => NULL,
                'email' => 'calvinputranirwana2001@gmail.com',
                'email_verified_at' => NULL,
                'first_name' => 'Calvin Putra',
                'id' => '6',
                'last_name' => 'Nirwana',
                'password' => '$2y$10$hMyI0ESG5SXsH7BRyavFS.yYqOg45JTLj/GUjsWn1IDQp5xYP5YqC',
                'phone' => '081234567890',
                'phone_verified_at' => NULL,
                'token' => NULL,
                'updated_at' => '2022-03-29 22:25:27',
            ),
            3 => 
            array (
                'created_at' => '2021-12-11 04:49:35',
                'deleted_at' => NULL,
                'email' => 'jasonrenata01@gmail.com',
                'email_verified_at' => NULL,
                'first_name' => 'Jason',
                'id' => '7',
                'last_name' => 'Renata',
                'password' => '$2y$10$LykPF8D9Ie4wNVZqNABK9.Ka/cb1IP0mmrfRq9m0/dosrbPQD8yg2',
                'phone' => '081234567891',
                'phone_verified_at' => NULL,
                'token' => NULL,
                'updated_at' => '2022-03-27 21:03:08',
            ),
            4 => 
            array (
                'created_at' => '2021-12-13 16:23:07',
                'deleted_at' => NULL,
                'email' => 'jonathanchang961@gmail.com',
                'email_verified_at' => '2021-12-13 16:24:07',
                'first_name' => 'Jonathan',
                'id' => '8',
                'last_name' => 'Jonathan',
                'password' => '$2y$10$0Dn30dWkkJZj.V/bgx5I1uHwePkDVPcfIMuQR1a/lacxrYdquHRTu',
                'phone' => '081234567893',
                'phone_verified_at' => NULL,
                'token' => NULL,
                'updated_at' => '2021-12-13 16:24:07',
            ),
            5 => 
            array (
                'created_at' => '2022-01-25 23:11:50',
                'deleted_at' => NULL,
                'email' => 'jonathan@grahacitrapratama.co.id',
                'email_verified_at' => NULL,
                'first_name' => 'algania',
                'id' => '9',
                'last_name' => 'kurniawan',
                'password' => '$2y$10$0Vwr7mL.IvNtSyD5kHpsZORwYLawGtc/Ef7aiMeh0d4jK8oF4J4Ru',
                'phone' => '08123578120938',
                'phone_verified_at' => NULL,
                'token' => NULL,
                'updated_at' => '2022-03-18 21:54:14',
            ),
            6 => 
            array (
                'created_at' => '2022-01-28 13:57:21',
                'deleted_at' => NULL,
                'email' => 'sugianto210671@gmail.com',
                'email_verified_at' => NULL,
                'first_name' => 'vel',
                'id' => '10',
                'last_name' => 'vel',
                'password' => '$2y$10$kyHvVKBf8SFUY1idtX2eDe57eQSuBpqqLrmdM2dEwcqHE3twHgfQ.',
                'phone' => '0812368741203',
                'phone_verified_at' => NULL,
                'token' => NULL,
                'updated_at' => '2022-01-28 13:58:53',
            ),
            7 => 
            array (
                'created_at' => '2022-03-02 18:18:04',
                'deleted_at' => NULL,
                'email' => 'metrojayaindonesia@gmail.com',
                'email_verified_at' => NULL,
                'first_name' => 'lia',
                'id' => '11',
                'last_name' => 'jaya',
                'password' => '$2y$10$xhNDNczv0TNthDPBE9/71e.C.AHQ1FUHm.jF9wiyEkmQ45zW8uh6a',
                'phone' => '085691408632',
                'phone_verified_at' => NULL,
                'token' => NULL,
                'updated_at' => '2022-03-02 18:18:39',
            ),
            8 => 
            array (
                'created_at' => '2022-03-02 18:33:56',
                'deleted_at' => NULL,
                'email' => 'calvinputranirwana@gmail.com',
                'email_verified_at' => NULL,
                'first_name' => 'lia',
                'id' => '12',
                'last_name' => 'Nirwana',
                'password' => '$2y$10$67P0slp21zajx6JEMBf1IOGqEeOV5QeAxn23LInaD/mpd/qkwO0yy',
                'phone' => '082111392108',
                'phone_verified_at' => NULL,
                'token' => NULL,
                'updated_at' => '2022-03-02 18:56:24',
            ),
            9 => 
            array (
                'created_at' => '2022-03-02 18:58:05',
                'deleted_at' => NULL,
                'email' => 'calvin@gmail.com',
                'email_verified_at' => NULL,
                'first_name' => 'Lia',
                'id' => '13',
                'last_name' => 'Lai',
                'password' => '$2y$10$3PJPm50X7fEJiISifzp0wuoONGzECDwWz6lTO8aoaKp9SxGXg7rzS',
                'phone' => '0821221544545',
                'phone_verified_at' => NULL,
                'token' => '426|3vIId6mYkcwM3148tjeoLeGCVYy7mjTI9Udd9TdK',
                'updated_at' => '2022-03-13 20:22:54',
            ),
            10 => 
            array (
                'created_at' => '2022-03-18 22:06:00',
                'deleted_at' => NULL,
                'email' => 'sycar.id@gmail.com',
                'email_verified_at' => NULL,
                'first_name' => 'Sycar',
                'id' => '14',
                'last_name' => 'id',
                'password' => '$2y$10$7IdRi015p.5BQEjiDFawuuMe5tm2JUpKy2xEv9kgWRH4gFXlO.TX6',
                'phone' => NULL,
                'phone_verified_at' => NULL,
                'token' => '445|tkq3D1p32BdElFYqg7cfvGUe6b2f91VLEXZLzvQz',
                'updated_at' => '2022-03-18 22:06:00',
            ),
            11 => 
            array (
                'created_at' => '2022-03-18 22:14:25',
                'deleted_at' => NULL,
                'email' => 'nikoosetiawan28@gmail.com',
                'email_verified_at' => '2022-03-18 22:17:50',
                'first_name' => 'Niko',
                'id' => '15',
                'last_name' => 'Setiawan',
                'password' => '$2y$10$mszjdUpc22j327RicUGFrui13KnIYOQjqxczllqyVqEh5VQ4vv5di',
                'phone' => '087887460528',
                'phone_verified_at' => NULL,
                'token' => NULL,
                'updated_at' => '2022-03-18 22:18:37',
            ),
            12 => 
            array (
                'created_at' => '2022-03-24 21:55:26',
                'deleted_at' => NULL,
                'email' => 'jonathanchang96@gmail.com',
                'email_verified_at' => '2022-03-24 22:46:13',
                'first_name' => 'Jonathan',
                'id' => '16',
                'last_name' => 'Jonathan',
                'password' => '$2y$10$Gqi6rHMoB7mHL6uyqhx.POSUtLJImJ0NPRSSinFXXvoijtwapUEx2',
                'phone' => '08988606067',
                'phone_verified_at' => NULL,
                'token' => '448|klF2S9hYI6si7gAPCW7oY4j56jpIaTUV7mBE7eq7',
                'updated_at' => '2022-03-27 09:18:12',
            ),
            13 => 
            array (
                'created_at' => '2022-03-29 15:16:37',
                'deleted_at' => NULL,
                'email' => 'yohanestkg25@gmail.com',
                'email_verified_at' => NULL,
                'first_name' => 'Yohanes',
                'id' => '17',
                'last_name' => 'Peggy Limesa',
                'password' => '$2y$10$yb.CBo5.Ifej19yWd6Myke4EF9n.lnYo6QUt15Di8ghN4UdgGCwMG',
                'phone' => NULL,
                'phone_verified_at' => NULL,
                'token' => '450|Sx5sXYmEZkiOn0n3vxfMyhGYB4IHKtCU59XG3UuV',
                'updated_at' => '2022-03-29 15:16:37',
            ),
        ));
        
        
    }
}