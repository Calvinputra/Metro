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
                'email' => 'jon@gmail.com',
                'first_name' => 'Jonathan',
                'last_name' => 'Jonathan',
                'phone' => '08123123123',
                'message' => 'website perlu pengembangan',
                'created_at' => '2021-12-15 11:44:36',
                'updated_at' => '2021-12-15 11:44:36',
            ),
        ));
        
        
    }
}