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
                'password' => '$2y$10$ME/qRzYWq3C/qqWGccd5beQPdiNUfW3SA/FasFka1pT6IvWrqsfc6',
                'token' => NULL,
                'first_name' => 'Jonathan',
                'last_name' => 'Jonathan',
                'phone' => '08988606067',
                'email_verified_at' => '2022-01-29 16:25:46',
                'phone_verified_at' => '2021-10-30 13:24:00',
                'created_at' => '2021-10-30 06:24:26',
                'updated_at' => '2022-03-04 16:03:14',
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
                'phone' => '08988606068
',
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
                'email' => 'jonathanchang96@grahacitrapratama.co.id',
                'password' => '$2y$10$.xTEeByO5/lS35qeo4Xep.8KpFSQ45wy.4CrYfT7upHB0yzrm8H0C',
                'token' => NULL,
                'first_name' => 'Jonathan',
                'last_name' => 'Jonathan',
                'phone' => '089886060691',
                'email_verified_at' => NULL,
                'phone_verified_at' => NULL,
                'created_at' => '2022-03-01 11:38:06',
                'updated_at' => '2022-03-01 11:47:46',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 12,
                'email' => 'jonathanchang@grahacitrapratama.co.id',
                'password' => '$2y$10$6sAJDeYzAVQJzl0ZyprxY.wCBQV08bpf8See0QUBkQm7lVZ4vMhPa',
                'token' => NULL,
                'first_name' => 'Jonathan',
                'last_name' => 'Jonathan',
                'phone' => '089886060692',
                'email_verified_at' => NULL,
                'phone_verified_at' => NULL,
                'created_at' => '2022-03-01 11:49:27',
                'updated_at' => '2022-03-01 11:49:49',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 13,
                'email' => 'jonathan@grahacitrapratama.co.id',
                'password' => '$2y$10$007T0KpBl3eZPcIljIg/COmZ0xnWKiGF4Yxdlmz.nLu.Ak4dqe6IW',
                'token' => NULL,
                'first_name' => 'Jonathan',
                'last_name' => 'Jonathan',
                'phone' => '089886060693',
                'email_verified_at' => '2022-03-01 11:57:52',
                'phone_verified_at' => NULL,
                'created_at' => '2022-03-01 11:53:28',
                'updated_at' => '2022-03-01 11:58:54',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}