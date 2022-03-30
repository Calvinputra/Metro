<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class HomepageContentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('homepage_contents')->delete();
        
        \DB::table('homepage_contents')->insert(array (
            0 => 
            array (
                'code' => 'kejar_diskon',
                'created_at' => '2022-02-02 11:05:33',
                'id' => '1',
                'order' => '1',
                'products' => '["2", "4", "3", "5", "6", "7"]',
                'title' => NULL,
                'updated_at' => '2022-02-02 11:47:03',
            ),
            1 => 
            array (
                'code' => 'product_unggulan',
                'created_at' => '2022-02-02 11:06:07',
                'id' => '2',
                'order' => '2',
                'products' => '["5", "6", "7"]',
                'title' => 'Product Unggulan',
                'updated_at' => '2022-02-02 11:06:07',
            ),
            2 => 
            array (
                'code' => 'paling_banyak_dibeli',
                'created_at' => '2022-02-02 11:06:49',
                'id' => '3',
                'order' => '3',
                'products' => '["8", "9", "10"]',
                'title' => 'Paling Banyak Dibeli',
                'updated_at' => '2022-02-02 11:06:49',
            ),
            3 => 
            array (
                'code' => 'product_terbaru',
                'created_at' => '2022-02-02 11:07:17',
                'id' => '4',
                'order' => '4',
                'products' => '["11", "12", "13"]',
                'title' => 'Product Terbaru',
                'updated_at' => '2022-02-02 11:07:17',
            ),
        ));
        
        
    }
}