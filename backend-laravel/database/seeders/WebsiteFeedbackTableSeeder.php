<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class WebsiteFeedbackTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('website_feedback')->delete();
        
        \DB::table('website_feedback')->insert(array (
            0 => 
            array (
                'id' => 1,
                'email' => 'Jonathanchang96@gmail.com',
                'first_name' => 'Jonathan',
                'last_name' => 'Jonathan',
                'phone' => '08988606069',
                'message' => 'asdasdasd',
                'created_at' => '2022-01-25 22:57:52',
                'updated_at' => '2022-01-25 22:57:52',
            ),
            1 => 
            array (
                'id' => 2,
                'email' => 'Jonathanchang96@gmail.com',
                'first_name' => 'Jonathan',
                'last_name' => 'Jonathan',
                'phone' => '08988606069',
                'message' => 'asdasdasd',
                'created_at' => '2022-01-25 22:57:53',
                'updated_at' => '2022-01-25 22:57:53',
            ),
            2 => 
            array (
                'id' => 3,
                'email' => 'Jonathanchang96@gmail.com',
                'first_name' => 'Jonathan',
                'last_name' => 'Jonathan',
                'phone' => '08988606069',
                'message' => 'asdasdasd',
                'created_at' => '2022-01-25 22:57:53',
                'updated_at' => '2022-01-25 22:57:53',
            ),
            3 => 
            array (
                'id' => 4,
                'email' => 'Jonathanchang96@gmail.com',
                'first_name' => 'Jonathan',
                'last_name' => 'Jonathan',
                'phone' => '08988606069',
                'message' => 'asdasdasd',
                'created_at' => '2022-01-25 22:57:54',
                'updated_at' => '2022-01-25 22:57:54',
            ),
            4 => 
            array (
                'id' => 5,
                'email' => 'Jonathanchang96@gmail.com',
                'first_name' => 'Jonathan',
                'last_name' => 'Jonathan',
                'phone' => '08988606069',
                'message' => 'asdasdasd',
                'created_at' => '2022-01-25 22:57:54',
                'updated_at' => '2022-01-25 22:57:54',
            ),
            5 => 
            array (
                'id' => 6,
                'email' => 'Jonathanchang96@gmail.com',
                'first_name' => 'Jonathan',
                'last_name' => 'Jonathan',
                'phone' => '08988606069',
                'message' => 'asdasdasd',
                'created_at' => '2022-01-25 22:57:54',
                'updated_at' => '2022-01-25 22:57:54',
            ),
            6 => 
            array (
                'id' => 7,
                'email' => 'Jonathanchang96@gmail.com',
                'first_name' => 'Jonathan',
                'last_name' => 'Jonathan',
                'phone' => '08988606069',
                'message' => 'test',
                'created_at' => '2022-01-25 23:03:41',
                'updated_at' => '2022-01-25 23:03:41',
            ),
            7 => 
            array (
                'id' => 8,
                'email' => 'Metrojayaindonesia@gmail.com',
                'first_name' => 'metro',
                'last_name' => '085691408632',
                'phone' => '085691408632',
                'message' => 'asrasrasras',
                'created_at' => '2022-03-06 14:50:46',
                'updated_at' => '2022-03-06 14:50:46',
            ),
        ));
        
        
    }
}