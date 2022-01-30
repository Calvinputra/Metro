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
                'id' => 2,
                'customer_id' => 1,
                'token' => '9e8KvRzPK0Z3vp9gHadFQcPsUIcgWeyGbwEWPMh9',
                'type' => 'RESET PASSWORD TOKEN',
                'used' => 0,
                'expired_at' => '2022-01-28 23:26:21',
                'created_at' => '2022-01-25 23:26:21',
                'updated_at' => '2022-01-25 23:26:21',
            ),
            2 => 
            array (
                'id' => 3,
                'customer_id' => 1,
                'token' => 'kxy3gl31hOnFeoCHz0W3djYnffhje7HoBJxcQr2c',
                'type' => 'RESET PASSWORD TOKEN',
                'used' => 0,
                'expired_at' => '2022-01-28 23:27:03',
                'created_at' => '2022-01-25 23:27:03',
                'updated_at' => '2022-01-25 23:27:03',
            ),
            3 => 
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
            4 => 
            array (
                'id' => 5,
                'customer_id' => 1,
                'token' => '5HXLrNbV4KvDKFttd5K0B538dcVvN0P6EL19YR1O',
                'type' => 'REGISTER CONFIRMATION TOKEN',
                'used' => 0,
                'expired_at' => '2022-02-01 16:18:04',
                'created_at' => '2022-01-29 16:18:04',
                'updated_at' => '2022-01-29 16:18:04',
            ),
            5 => 
            array (
                'id' => 6,
                'customer_id' => 1,
                'token' => 'yDXgbxqOyLrefUO50oLWDZhiEhR5l3OaBoG4Rbq0',
                'type' => 'REGISTER CONFIRMATION TOKEN',
                'used' => 0,
                'expired_at' => '2022-02-01 16:18:11',
                'created_at' => '2022-01-29 16:18:11',
                'updated_at' => '2022-01-29 16:18:11',
            ),
            6 => 
            array (
                'id' => 7,
                'customer_id' => 1,
                'token' => 'XrdxCj1zoVzjO5lEcKY2G3sdcydCpgyvPAapUxhu',
                'type' => 'REGISTER CONFIRMATION TOKEN',
                'used' => 0,
                'expired_at' => '2022-02-01 16:18:12',
                'created_at' => '2022-01-29 16:18:12',
                'updated_at' => '2022-01-29 16:18:12',
            ),
            7 => 
            array (
                'id' => 8,
                'customer_id' => 1,
                'token' => 'DhKc5kKmVyFGxCoQX7uAF6anauHxsB0N5HQRZ1QF',
                'type' => 'REGISTER CONFIRMATION TOKEN',
                'used' => 0,
                'expired_at' => '2022-02-01 16:18:12',
                'created_at' => '2022-01-29 16:18:12',
                'updated_at' => '2022-01-29 16:18:12',
            ),
            8 => 
            array (
                'id' => 9,
                'customer_id' => 1,
                'token' => 'OoQRkq5PYxzEzV7YtMpmrAfY4y7mKtC9THcePXHY',
                'type' => 'REGISTER CONFIRMATION TOKEN',
                'used' => 0,
                'expired_at' => '2022-02-01 16:18:12',
                'created_at' => '2022-01-29 16:18:12',
                'updated_at' => '2022-01-29 16:18:12',
            ),
            9 => 
            array (
                'id' => 10,
                'customer_id' => 1,
                'token' => 'toIfmFivClZKBx2jsQQdjDLBBhA4iE3sqtM3lQnx',
                'type' => 'REGISTER CONFIRMATION TOKEN',
                'used' => 0,
                'expired_at' => '2022-02-01 16:18:13',
                'created_at' => '2022-01-29 16:18:13',
                'updated_at' => '2022-01-29 16:18:13',
            ),
            10 => 
            array (
                'id' => 11,
                'customer_id' => 1,
                'token' => 'lf1fHTx6N5YGXJzARzWAudeHbiEIx6yQ7PdILYsJ',
                'type' => 'REGISTER CONFIRMATION TOKEN',
                'used' => 0,
                'expired_at' => '2022-02-01 16:18:13',
                'created_at' => '2022-01-29 16:18:13',
                'updated_at' => '2022-01-29 16:18:13',
            ),
            11 => 
            array (
                'id' => 12,
                'customer_id' => 1,
                'token' => '6yecGJuKCfn5wwHCglJTWqlgJPxbC7LEZ7eWqO4k',
                'type' => 'REGISTER CONFIRMATION TOKEN',
                'used' => 0,
                'expired_at' => '2022-02-01 16:18:13',
                'created_at' => '2022-01-29 16:18:13',
                'updated_at' => '2022-01-29 16:18:13',
            ),
            12 => 
            array (
                'id' => 13,
                'customer_id' => 1,
                'token' => 'FAPiSR9Wz9mhbYWJH2N2hDAWkuZRArL2c1uHegJG',
                'type' => 'REGISTER CONFIRMATION TOKEN',
                'used' => 0,
                'expired_at' => '2022-02-01 16:18:47',
                'created_at' => '2022-01-29 16:18:47',
                'updated_at' => '2022-01-29 16:18:47',
            ),
            13 => 
            array (
                'id' => 14,
                'customer_id' => 1,
                'token' => 'e8QIEmE4876rYbwjyfGcdB4CEsvJnnapZ6yzHRW4',
                'type' => 'REGISTER CONFIRMATION TOKEN',
                'used' => 0,
                'expired_at' => '2022-02-01 16:23:02',
                'created_at' => '2022-01-29 16:23:02',
                'updated_at' => '2022-01-29 16:23:02',
            ),
            14 => 
            array (
                'id' => 15,
                'customer_id' => 1,
                'token' => 'o5le19IQhhP9kh1wKAJz0Plsfujwk23OwPscHNVo',
                'type' => 'REGISTER CONFIRMATION TOKEN',
                'used' => 0,
                'expired_at' => '2022-02-01 16:23:37',
                'created_at' => '2022-01-29 16:23:37',
                'updated_at' => '2022-01-29 16:23:37',
            ),
            15 => 
            array (
                'id' => 16,
                'customer_id' => 1,
                'token' => 'UUFNt7pPxEd2HYUpQFISlHxAmFknktbpyWZvTF4G',
                'type' => 'REGISTER CONFIRMATION TOKEN',
                'used' => 0,
                'expired_at' => '2022-02-01 16:24:14',
                'created_at' => '2022-01-29 16:24:14',
                'updated_at' => '2022-01-29 16:24:14',
            ),
            16 => 
            array (
                'id' => 17,
                'customer_id' => 1,
                'token' => 'IGBgAsio6AWYP0xWbQHMmojYQ55Zabn2mGzlKswS',
                'type' => 'REGISTER CONFIRMATION TOKEN',
                'used' => 1,
                'expired_at' => '2022-02-01 16:25:29',
                'created_at' => '2022-01-29 16:25:29',
                'updated_at' => '2022-01-29 16:25:46',
            ),
            17 => 
            array (
                'id' => 18,
                'customer_id' => 1,
                'token' => 'jPb5KOz1wf3nqrkNxCpHaZ0hZdmIkGaHbt5ve2j8',
                'type' => 'RESET PASSWORD TOKEN',
                'used' => 1,
                'expired_at' => '2022-02-01 16:39:57',
                'created_at' => '2022-01-29 16:39:57',
                'updated_at' => '2022-01-29 17:14:30',
            ),
            18 => 
            array (
                'id' => 19,
                'customer_id' => 1,
                'token' => '2sBUqmyBpeYMtQGg7efrWO4a4VvDgVMnLnkkJqsv',
                'type' => 'RESET PASSWORD TOKEN',
                'used' => 1,
                'expired_at' => '2022-02-01 17:16:27',
                'created_at' => '2022-01-29 17:16:27',
                'updated_at' => '2022-01-29 17:16:47',
            ),
        ));
        
        
    }
}