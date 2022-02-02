<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SlidersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sliders')->delete();
        
        \DB::table('sliders')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => NULL,
                'description' => NULL,
                'image' => 'sliders\\February2022\\oIMMznHKvRUYiIFwS4QQ.jpg',
                'order' => 1,
                'created_at' => '2022-02-02 11:05:07',
                'updated_at' => '2022-02-02 11:05:07',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => NULL,
                'description' => NULL,
                'image' => 'sliders\\February2022\\BQahJia8a49Uf1CjreQf.jpg',
                'order' => 2,
                'created_at' => '2022-02-02 11:05:16',
                'updated_at' => '2022-02-02 11:05:16',
            ),
        ));
        
        
    }
}