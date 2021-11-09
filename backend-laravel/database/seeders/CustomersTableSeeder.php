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
                'password' => '$2y$10$toM.N6rPojAlGZvxjTjpo.eQtMsMZKxinMAxiv/L6B.sKdqWNduma',
                'token' => '16|7vmdg61CZYy9DHmTAx4jxA8ThTpP9a1kuS1LB85S',
                'first_name' => 'Jonathan',
                'last_name' => 'Jonathan',
                'phone' => '08988606069',
                'email_verified_at' => '2021-10-30 13:24:00',
                'phone_verified_at' => '2021-10-30 13:24:00',
                'created_at' => '2021-10-30 06:24:26',
                'updated_at' => '2021-11-08 14:59:29',
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
                'token' => '12|WsxFMOE3RDfJ8TUSEITJ0Y4vsqikuowo2Jzwo65n',
                'first_name' => 'Jonathan',
                'last_name' => 'Jonathan',
                'phone' => '08988606069',
                'email_verified_at' => NULL,
                'phone_verified_at' => NULL,
                'created_at' => '2021-11-07 10:50:07',
                'updated_at' => '2021-11-07 10:51:31',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}