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
                'id' => 1,
                'customer_id' => 9,
                'token' => 'OzZpqBliJ78h7J56FbSgySKCQlZYMPPTGnVGfv1d',
                'type' => 'REGISTER CONFIRMATION TOKEN',
                'used' => 0,
                'expired_at' => '2022-01-28 23:11:50',
                'created_at' => '2022-01-25 23:11:50',
                'updated_at' => '2022-01-25 23:11:50',
            ),
            1 => 
            array (
                'id' => 4,
                'customer_id' => 10,
                'token' => 'a3iPXP6hljXYikVJtBRKpkpwTKbtlNAWA9JnJ1I3',
                'type' => 'REGISTER CONFIRMATION TOKEN',
                'used' => 0,
                'expired_at' => '2022-01-31 13:57:21',
                'created_at' => '2022-01-28 13:57:21',
                'updated_at' => '2022-01-28 13:57:21',
            ),
            2 => 
            array (
                'id' => 20,
                'customer_id' => 11,
                'token' => 'dFh098auaoggtRDsqqJ91XpFsDeQMsBHGnrNmHxq',
                'type' => 'REGISTER CONFIRMATION TOKEN',
                'used' => 0,
                'expired_at' => '2022-03-05 18:18:04',
                'created_at' => '2022-03-02 18:18:04',
                'updated_at' => '2022-03-02 18:18:04',
            ),
            3 => 
            array (
                'id' => 21,
                'customer_id' => 12,
                'token' => 'sDjXJEjB2SLCYSrRs1aiwG4cIs3xjuPyUYlk6WwK',
                'type' => 'REGISTER CONFIRMATION TOKEN',
                'used' => 0,
                'expired_at' => '2022-03-05 18:33:57',
                'created_at' => '2022-03-02 18:33:57',
                'updated_at' => '2022-03-02 18:33:57',
            ),
            4 => 
            array (
                'id' => 22,
                'customer_id' => 12,
                'token' => 'XlzepxH7nghtvDBW9fZJDiaFKwDyKmDmead3jOtn',
                'type' => 'RESET PASSWORD TOKEN',
                'used' => 0,
                'expired_at' => '2022-03-05 18:43:15',
                'created_at' => '2022-03-02 18:43:15',
                'updated_at' => '2022-03-02 18:43:15',
            ),
            5 => 
            array (
                'id' => 23,
                'customer_id' => 6,
                'token' => 'mwaaZLaaea5oUfluESWskINeTpdgY8UgZOv5n9cS',
                'type' => 'RESET PASSWORD TOKEN',
                'used' => 0,
                'expired_at' => '2022-03-05 18:43:37',
                'created_at' => '2022-03-02 18:43:37',
                'updated_at' => '2022-03-02 18:43:37',
            ),
            6 => 
            array (
                'id' => 24,
                'customer_id' => 13,
                'token' => 'JY95Q1Wlgs615f65VLbEeG7vrHoEOk1yHpszCJJO',
                'type' => 'REGISTER CONFIRMATION TOKEN',
                'used' => 0,
                'expired_at' => '2022-03-05 18:58:05',
                'created_at' => '2022-03-02 18:58:05',
                'updated_at' => '2022-03-02 18:58:05',
            ),
            7 => 
            array (
                'id' => 25,
                'customer_id' => 13,
                'token' => 'xUtL7F0S7jdwMnPuZWndkA0zG1tibdg16xdZNSh2',
                'type' => 'REGISTER CONFIRMATION TOKEN',
                'used' => 0,
                'expired_at' => '2022-03-05 18:59:21',
                'created_at' => '2022-03-02 18:59:21',
                'updated_at' => '2022-03-02 18:59:21',
            ),
            8 => 
            array (
                'id' => 26,
                'customer_id' => 15,
                'token' => 'OeG6nRYHEQf5jfCe8bcgQ1x4OIZXTUSVpQbZjw2x',
                'type' => 'REGISTER CONFIRMATION TOKEN',
                'used' => 1,
                'expired_at' => '2022-03-21 22:17:39',
                'created_at' => '2022-03-18 22:17:39',
                'updated_at' => '2022-03-18 22:17:50',
            ),
            9 => 
            array (
                'id' => 27,
                'customer_id' => 16,
                'token' => '29xYSAwPUWNjoxTJ7L9H0B9DEPKaYX9VNl4WAGEP',
                'type' => 'REGISTER CONFIRMATION TOKEN',
                'used' => 0,
                'expired_at' => '2022-03-27 21:55:26',
                'created_at' => '2022-03-24 21:55:26',
                'updated_at' => '2022-03-24 21:55:26',
            ),
            10 => 
            array (
                'id' => 28,
                'customer_id' => 16,
                'token' => 'r0OvvWZPrzs9vE6FtJheWYE13EpX30LuT5HNOPRe',
                'type' => 'REGISTER CONFIRMATION TOKEN',
                'used' => 1,
                'expired_at' => '2022-03-27 21:59:11',
                'created_at' => '2022-03-24 21:59:11',
                'updated_at' => '2022-03-24 22:27:49',
            ),
            11 => 
            array (
                'id' => 29,
                'customer_id' => 16,
                'token' => 'xzBjp2OlSdNzuVgnBeFNKIz9NQyzyHl8t76OEy6p',
                'type' => 'REGISTER CONFIRMATION TOKEN',
                'used' => 1,
                'expired_at' => '2022-03-27 22:30:30',
                'created_at' => '2022-03-24 22:30:30',
                'updated_at' => '2022-03-24 22:30:46',
            ),
            12 => 
            array (
                'id' => 30,
                'customer_id' => 16,
                'token' => 'TboRzVoe432GlYLJTUM8pAiR2XHe0U8f6W2K1ws7',
                'type' => 'REGISTER CONFIRMATION TOKEN',
                'used' => 1,
                'expired_at' => '2022-03-27 22:40:35',
                'created_at' => '2022-03-24 22:40:35',
                'updated_at' => '2022-03-24 22:46:13',
            ),
        ));
        
        
    }
}