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
                'id' => 1,
                'products' => '["2","4","3","5","6","7"]',
                'title' => NULL,
                'code' => 'kejar_diskon',
                'order' => 1,
                'created_at' => '2022-02-02 11:05:33',
                'updated_at' => '2022-02-02 11:47:03',
            ),
            1 => 
            array (
                'id' => 2,
                'products' => '["5","6","7"]',
                'title' => 'Product Unggulan',
                'code' => 'product_unggulan',
                'order' => 2,
                'created_at' => '2022-02-02 11:06:07',
                'updated_at' => '2022-02-02 11:06:07',
            ),
            2 => 
            array (
                'id' => 3,
                'products' => '["8","9","10"]',
                'title' => 'Paling Banyak Dibeli',
                'code' => 'paling_banyak_dibeli',
                'order' => 3,
                'created_at' => '2022-02-02 11:06:49',
                'updated_at' => '2022-02-02 11:06:49',
            ),
            3 => 
            array (
                'id' => 4,
                'products' => '["11","12","13"]',
                'title' => 'Product Terbaru',
                'code' => 'product_terbaru',
                'order' => 4,
                'created_at' => '2022-02-02 11:07:17',
                'updated_at' => '2022-02-02 11:07:17',
            ),
        ));
        
        
    }
}