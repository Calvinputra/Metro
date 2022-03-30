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
                'created_at' => '2022-01-25 22:57:52',
                'email' => 'Jonathanchang96@gmail.com',
                'first_name' => 'Jonathan',
                'id' => '1',
                'last_name' => 'Jonathan',
                'message' => 'asdasdasd',
                'phone' => '08988606069',
                'updated_at' => '2022-01-25 22:57:52',
            ),
            1 => 
            array (
                'created_at' => '2022-01-25 22:57:53',
                'email' => 'Jonathanchang96@gmail.com',
                'first_name' => 'Jonathan',
                'id' => '2',
                'last_name' => 'Jonathan',
                'message' => 'asdasdasd',
                'phone' => '08988606069',
                'updated_at' => '2022-01-25 22:57:53',
            ),
            2 => 
            array (
                'created_at' => '2022-01-25 22:57:53',
                'email' => 'Jonathanchang96@gmail.com',
                'first_name' => 'Jonathan',
                'id' => '3',
                'last_name' => 'Jonathan',
                'message' => 'asdasdasd',
                'phone' => '08988606069',
                'updated_at' => '2022-01-25 22:57:53',
            ),
            3 => 
            array (
                'created_at' => '2022-01-25 22:57:54',
                'email' => 'Jonathanchang96@gmail.com',
                'first_name' => 'Jonathan',
                'id' => '4',
                'last_name' => 'Jonathan',
                'message' => 'asdasdasd',
                'phone' => '08988606069',
                'updated_at' => '2022-01-25 22:57:54',
            ),
            4 => 
            array (
                'created_at' => '2022-01-25 22:57:54',
                'email' => 'Jonathanchang96@gmail.com',
                'first_name' => 'Jonathan',
                'id' => '5',
                'last_name' => 'Jonathan',
                'message' => 'asdasdasd',
                'phone' => '08988606069',
                'updated_at' => '2022-01-25 22:57:54',
            ),
            5 => 
            array (
                'created_at' => '2022-01-25 22:57:54',
                'email' => 'Jonathanchang96@gmail.com',
                'first_name' => 'Jonathan',
                'id' => '6',
                'last_name' => 'Jonathan',
                'message' => 'asdasdasd',
                'phone' => '08988606069',
                'updated_at' => '2022-01-25 22:57:54',
            ),
            6 => 
            array (
                'created_at' => '2022-01-25 23:03:41',
                'email' => 'Jonathanchang96@gmail.com',
                'first_name' => 'Jonathan',
                'id' => '7',
                'last_name' => 'Jonathan',
                'message' => 'test',
                'phone' => '08988606069',
                'updated_at' => '2022-01-25 23:03:41',
            ),
            7 => 
            array (
                'created_at' => '2022-03-06 14:50:46',
                'email' => 'Metrojayaindonesia@gmail.com',
                'first_name' => 'metro',
                'id' => '8',
                'last_name' => '085691408632',
                'message' => 'asrasrasras',
                'phone' => '085691408632',
                'updated_at' => '2022-03-06 14:50:46',
            ),
        ));
        
        
    }
}