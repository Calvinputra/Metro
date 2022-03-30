<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CustomerTokensTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('customer_tokens')->delete();
        
        \DB::table('customer_tokens')->insert(array (
            0 => 
            array (
                'created_at' => '2022-01-25 23:11:50',
                'customer_id' => '9',
                'expired_at' => '2022-01-28 23:11:50',
                'id' => '1',
                'token' => 'OzZpqBliJ78h7J56FbSgySKCQlZYMPPTGnVGfv1d',
                'type' => 'REGISTER CONFIRMATION TOKEN',
                'updated_at' => '2022-01-25 23:11:50',
                'used' => '0',
            ),
            1 => 
            array (
                'created_at' => '2022-01-28 13:57:21',
                'customer_id' => '10',
                'expired_at' => '2022-01-31 13:57:21',
                'id' => '4',
                'token' => 'a3iPXP6hljXYikVJtBRKpkpwTKbtlNAWA9JnJ1I3',
                'type' => 'REGISTER CONFIRMATION TOKEN',
                'updated_at' => '2022-01-28 13:57:21',
                'used' => '0',
            ),
            2 => 
            array (
                'created_at' => '2022-03-02 18:18:04',
                'customer_id' => '11',
                'expired_at' => '2022-03-05 18:18:04',
                'id' => '20',
                'token' => 'dFh098auaoggtRDsqqJ91XpFsDeQMsBHGnrNmHxq',
                'type' => 'REGISTER CONFIRMATION TOKEN',
                'updated_at' => '2022-03-02 18:18:04',
                'used' => '0',
            ),
            3 => 
            array (
                'created_at' => '2022-03-02 18:33:57',
                'customer_id' => '12',
                'expired_at' => '2022-03-05 18:33:57',
                'id' => '21',
                'token' => 'sDjXJEjB2SLCYSrRs1aiwG4cIs3xjuPyUYlk6WwK',
                'type' => 'REGISTER CONFIRMATION TOKEN',
                'updated_at' => '2022-03-02 18:33:57',
                'used' => '0',
            ),
            4 => 
            array (
                'created_at' => '2022-03-02 18:43:15',
                'customer_id' => '12',
                'expired_at' => '2022-03-05 18:43:15',
                'id' => '22',
                'token' => 'XlzepxH7nghtvDBW9fZJDiaFKwDyKmDmead3jOtn',
                'type' => 'RESET PASSWORD TOKEN',
                'updated_at' => '2022-03-02 18:43:15',
                'used' => '0',
            ),
            5 => 
            array (
                'created_at' => '2022-03-02 18:43:37',
                'customer_id' => '6',
                'expired_at' => '2022-03-05 18:43:37',
                'id' => '23',
                'token' => 'mwaaZLaaea5oUfluESWskINeTpdgY8UgZOv5n9cS',
                'type' => 'RESET PASSWORD TOKEN',
                'updated_at' => '2022-03-02 18:43:37',
                'used' => '0',
            ),
            6 => 
            array (
                'created_at' => '2022-03-02 18:58:05',
                'customer_id' => '13',
                'expired_at' => '2022-03-05 18:58:05',
                'id' => '24',
                'token' => 'JY95Q1Wlgs615f65VLbEeG7vrHoEOk1yHpszCJJO',
                'type' => 'REGISTER CONFIRMATION TOKEN',
                'updated_at' => '2022-03-02 18:58:05',
                'used' => '0',
            ),
            7 => 
            array (
                'created_at' => '2022-03-02 18:59:21',
                'customer_id' => '13',
                'expired_at' => '2022-03-05 18:59:21',
                'id' => '25',
                'token' => 'xUtL7F0S7jdwMnPuZWndkA0zG1tibdg16xdZNSh2',
                'type' => 'REGISTER CONFIRMATION TOKEN',
                'updated_at' => '2022-03-02 18:59:21',
                'used' => '0',
            ),
            8 => 
            array (
                'created_at' => '2022-03-18 22:17:39',
                'customer_id' => '15',
                'expired_at' => '2022-03-21 22:17:39',
                'id' => '26',
                'token' => 'OeG6nRYHEQf5jfCe8bcgQ1x4OIZXTUSVpQbZjw2x',
                'type' => 'REGISTER CONFIRMATION TOKEN',
                'updated_at' => '2022-03-18 22:17:50',
                'used' => '1',
            ),
            9 => 
            array (
                'created_at' => '2022-03-24 21:55:26',
                'customer_id' => '16',
                'expired_at' => '2022-03-27 21:55:26',
                'id' => '27',
                'token' => '29xYSAwPUWNjoxTJ7L9H0B9DEPKaYX9VNl4WAGEP',
                'type' => 'REGISTER CONFIRMATION TOKEN',
                'updated_at' => '2022-03-24 21:55:26',
                'used' => '0',
            ),
            10 => 
            array (
                'created_at' => '2022-03-24 21:59:11',
                'customer_id' => '16',
                'expired_at' => '2022-03-27 21:59:11',
                'id' => '28',
                'token' => 'r0OvvWZPrzs9vE6FtJheWYE13EpX30LuT5HNOPRe',
                'type' => 'REGISTER CONFIRMATION TOKEN',
                'updated_at' => '2022-03-24 22:27:49',
                'used' => '1',
            ),
            11 => 
            array (
                'created_at' => '2022-03-24 22:30:30',
                'customer_id' => '16',
                'expired_at' => '2022-03-27 22:30:30',
                'id' => '29',
                'token' => 'xzBjp2OlSdNzuVgnBeFNKIz9NQyzyHl8t76OEy6p',
                'type' => 'REGISTER CONFIRMATION TOKEN',
                'updated_at' => '2022-03-24 22:30:46',
                'used' => '1',
            ),
            12 => 
            array (
                'created_at' => '2022-03-24 22:40:35',
                'customer_id' => '16',
                'expired_at' => '2022-03-27 22:40:35',
                'id' => '30',
                'token' => 'TboRzVoe432GlYLJTUM8pAiR2XHe0U8f6W2K1ws7',
                'type' => 'REGISTER CONFIRMATION TOKEN',
                'updated_at' => '2022-03-24 22:46:13',
                'used' => '1',
            ),
        ));
        
        
    }
}