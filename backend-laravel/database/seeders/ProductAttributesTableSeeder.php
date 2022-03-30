<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductAttributesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('product_attributes')->delete();
        
        \DB::table('product_attributes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'attribute_id' => 1,
                'product_id' => 1,
                'value' => 'Besi',
                'created_at' => '2022-03-30 15:09:56',
                'updated_at' => '2022-03-30 15:09:56',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'attribute_id' => 2,
                'product_id' => 1,
                'value' => 'Hitam',
                'created_at' => '2022-03-30 15:09:56',
                'updated_at' => '2022-03-30 15:09:56',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'attribute_id' => 3,
                'product_id' => 1,
                'value' => 'https://www.tokopedia.com/metrojaya18/roof-drain-cast-iron-4-antasan',
                'created_at' => '2022-03-30 15:09:56',
                'updated_at' => '2022-03-30 15:09:56',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'attribute_id' => 1,
                'product_id' => 2,
                'value' => 'Besi',
                'created_at' => '2022-03-30 15:09:56',
                'updated_at' => '2022-03-30 15:09:56',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'attribute_id' => 2,
                'product_id' => 2,
                'value' => 'Hitam',
                'created_at' => '2022-03-30 15:09:56',
                'updated_at' => '2022-03-30 15:09:56',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'attribute_id' => 3,
                'product_id' => 2,
                'value' => 'https://www.tokopedia.com/metrojaya18/roof-drain-cast-irion-3-inchi-datar',
                'created_at' => '2022-03-30 15:09:56',
                'updated_at' => '2022-03-30 15:09:56',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'attribute_id' => 1,
                'product_id' => 3,
                'value' => 'Besi',
                'created_at' => '2022-03-30 15:09:56',
                'updated_at' => '2022-03-30 15:09:56',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'attribute_id' => 3,
                'product_id' => 3,
                'value' => 'https://www.tokopedia.com/metrojaya18/spring-knip-solid-379-sn-kunci-jendela-selot-kodok-selot-tekan',
                'created_at' => '2022-03-30 15:09:56',
                'updated_at' => '2022-03-30 15:09:56',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'attribute_id' => 1,
                'product_id' => 4,
                'value' => 'Besi',
                'created_at' => '2022-03-30 15:09:56',
                'updated_at' => '2022-03-30 15:09:56',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'attribute_id' => 3,
                'product_id' => 4,
                'value' => 'https://www.tokopedia.com/metrojaya18/floor-drain-san-ei-hn508-p-saringan-got-kamar-mandi',
                'created_at' => '2022-03-30 15:09:56',
                'updated_at' => '2022-03-30 15:09:56',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'attribute_id' => 3,
                'product_id' => 5,
                'value' => 'https://www.tokopedia.com/metrojaya18/gembok-master-lock-175d',
                'created_at' => '2022-03-30 15:09:56',
                'updated_at' => '2022-03-30 15:09:56',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'attribute_id' => 3,
                'product_id' => 6,
                'value' => 'https://www.tokopedia.com/metrojaya18/gembok-jaket-solid-60mm-gembok-pagar',
                'created_at' => '2022-03-30 15:09:56',
                'updated_at' => '2022-03-30 15:09:56',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'attribute_id' => 1,
                'product_id' => 7,
                'value' => 'ZINC ALLOY',
                'created_at' => '2022-03-30 15:09:56',
                'updated_at' => '2022-03-30 15:09:56',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'attribute_id' => 3,
                'product_id' => 7,
                'value' => 'https://www.tokopedia.com/metrojaya18/grendel-pintu-solid-627-2-selot-jendela-grendel-jendela',
                'created_at' => '2022-03-30 15:09:56',
                'updated_at' => '2022-03-30 15:09:56',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'attribute_id' => 1,
                'product_id' => 8,
                'value' => 'pola Propylene /Pp Plastic',
                'created_at' => '2022-03-30 15:09:56',
                'updated_at' => '2022-03-30 15:09:56',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'attribute_id' => 3,
                'product_id' => 8,
                'value' => 'https://www.tokopedia.com/metrojaya18/grease-trap-igt-30-bak-control-penyaring',
                'created_at' => '2022-03-30 15:09:56',
                'updated_at' => '2022-03-30 15:09:56',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'attribute_id' => 3,
                'product_id' => 9,
                'value' => 'https://www.tokopedia.com/metrojaya18/handle-pintu-solid-hre-61-41-handle-pintu-1-set-komplit-solid',
                'created_at' => '2022-03-30 15:09:56',
                'updated_at' => '2022-03-30 15:14:23',
                'deleted_at' => '2022-03-30 15:14:23',
            ),
            17 => 
            array (
                'id' => 18,
                'attribute_id' => 1,
                'product_id' => 10,
                'value' => 'Stainless Steel',
                'created_at' => '2022-03-30 15:09:56',
                'updated_at' => '2022-03-30 15:15:33',
                'deleted_at' => '2022-03-30 15:15:33',
            ),
            18 => 
            array (
                'id' => 19,
                'attribute_id' => 3,
                'product_id' => 10,
                'value' => 'https://www.tokopedia.com/metrojaya18/engsel-pintu-solid-4-inchi-engsel-solid-ek-17-4x3x2-5-bb-us-3d-engsel',
                'created_at' => '2022-03-30 15:09:56',
                'updated_at' => '2022-03-30 15:15:33',
                'deleted_at' => '2022-03-30 15:15:33',
            ),
            19 => 
            array (
                'id' => 20,
                'attribute_id' => 2,
                'product_id' => 11,
                'value' => 'Silver',
                'created_at' => '2022-03-30 15:09:56',
                'updated_at' => '2022-03-30 15:09:56',
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'attribute_id' => 3,
                'product_id' => 11,
                'value' => 'https://www.tokopedia.com/metrojaya18/fls-05-onda-floor-drain-saringan-air-kamar-mandi',
                'created_at' => '2022-03-30 15:09:56',
                'updated_at' => '2022-03-30 15:09:56',
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'attribute_id' => 2,
                'product_id' => 12,
                'value' => 'Chrome',
                'created_at' => '2022-03-30 15:09:56',
                'updated_at' => '2022-03-30 15:09:56',
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'attribute_id' => 3,
                'product_id' => 12,
                'value' => 'https://www.tokopedia.com/metrojaya18/roof-drain-san-ei-h01-4-inch',
                'created_at' => '2022-03-30 15:09:56',
                'updated_at' => '2022-03-30 15:09:56',
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'attribute_id' => 3,
                'product_id' => 13,
                'value' => 'https://docs.google.com/spreadsheets/d/1EylPtNs7GTBZN3YnogXEvne_aetyV88cJGBWcQbnSJU/edit#gid=1633092525',
                'created_at' => '2022-03-30 15:09:56',
                'updated_at' => '2022-03-30 15:09:56',
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'attribute_id' => 3,
                'product_id' => 14,
                'value' => 'https://www.tokopedia.com/metrojaya18/kran-wastafel-wasser-tl-060',
                'created_at' => '2022-03-30 15:09:56',
                'updated_at' => '2022-03-30 15:09:56',
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'attribute_id' => 3,
                'product_id' => 15,
                'value' => 'https://www.tokopedia.com/metrojaya18/roof-drain-3-inchi-saringan-talang-penyaring-dak-roof-drain',
                'created_at' => '2022-03-30 15:09:56',
                'updated_at' => '2022-03-30 15:09:56',
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'attribute_id' => 3,
                'product_id' => 16,
                'value' => 'https://www.tokopedia.com/metrojaya18/keran-bathub-toto-tx-467-sesbr-keran-mixer-bathub',
                'created_at' => '2022-03-30 15:09:56',
                'updated_at' => '2022-03-30 15:09:56',
                'deleted_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'attribute_id' => 3,
                'product_id' => 17,
                'value' => 'https://www.tokopedia.com/metrojaya18/clean-out-onda-fco-3-inchi-tutup-spitank',
                'created_at' => '2022-03-30 15:09:56',
                'updated_at' => '2022-03-30 15:09:56',
                'deleted_at' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'attribute_id' => 3,
                'product_id' => 18,
                'value' => 'https://www.tokopedia.com/metrojaya18/grendel-overpal-637ukuran-2-5-inci-solid',
                'created_at' => '2022-03-30 15:09:56',
                'updated_at' => '2022-03-30 15:09:56',
                'deleted_at' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'attribute_id' => 1,
                'product_id' => 19,
                'value' => 'Stainless',
                'created_at' => '2022-03-30 15:09:56',
                'updated_at' => '2022-03-30 15:09:56',
                'deleted_at' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'attribute_id' => 3,
                'product_id' => 19,
                'value' => 'https://www.tokopedia.com/metrojaya18/kunci-kamar-mandi-binoche-kunci-bulat-handle-putar',
                'created_at' => '2022-03-30 15:09:56',
                'updated_at' => '2022-03-30 15:09:56',
                'deleted_at' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'attribute_id' => 1,
                'product_id' => 20,
                'value' => 'Stainless',
                'created_at' => '2022-03-30 15:09:56',
                'updated_at' => '2022-03-30 15:09:56',
                'deleted_at' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'attribute_id' => 3,
                'product_id' => 20,
                'value' => 'https://www.tokopedia.com/metrojaya18/door-stop-keong-solid-stp-014-ganjalan-pintu',
                'created_at' => '2022-03-30 15:09:56',
                'updated_at' => '2022-03-30 15:09:56',
                'deleted_at' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
                'attribute_id' => 2,
                'product_id' => 21,
                'value' => 'Hitam',
                'created_at' => '2022-03-30 15:09:56',
                'updated_at' => '2022-03-30 15:09:56',
                'deleted_at' => NULL,
            ),
            34 => 
            array (
                'id' => 35,
                'attribute_id' => 3,
                'product_id' => 21,
                'value' => 'https://www.tokopedia.com/metrojaya18/floor-drain-fiorentino-hitam-saringan-got-afur-lantai',
                'created_at' => '2022-03-30 15:09:56',
                'updated_at' => '2022-03-30 15:09:56',
                'deleted_at' => NULL,
            ),
            35 => 
            array (
                'id' => 36,
                'attribute_id' => 3,
                'product_id' => 22,
                'value' => 'https://www.tokopedia.com/metrojaya18/door-closer-dorma-ts68',
                'created_at' => '2022-03-30 15:09:56',
                'updated_at' => '2022-03-30 15:09:56',
                'deleted_at' => NULL,
            ),
            36 => 
            array (
                'id' => 37,
                'attribute_id' => 2,
                'product_id' => 23,
                'value' => 'Hitam',
                'created_at' => '2022-03-30 15:09:56',
                'updated_at' => '2022-03-30 15:09:56',
                'deleted_at' => NULL,
            ),
            37 => 
            array (
                'id' => 38,
                'attribute_id' => 3,
                'product_id' => 23,
                'value' => 'https://www.tokopedia.com/metrojaya18/handle-pintu-hitam-handle-pintu-hitam-belocca',
                'created_at' => '2022-03-30 15:09:56',
                'updated_at' => '2022-03-30 15:09:56',
                'deleted_at' => NULL,
            ),
            38 => 
            array (
                'id' => 39,
                'attribute_id' => 3,
                'product_id' => 24,
                'value' => 'https://www.tokopedia.com/metrojaya18/floating-valve-onda-1-inch-pelampung-toren-air-onda-1-inch',
                'created_at' => '2022-03-30 15:09:56',
                'updated_at' => '2022-03-30 15:09:56',
                'deleted_at' => NULL,
            ),
            39 => 
            array (
                'id' => 40,
                'attribute_id' => 3,
                'product_id' => 25,
                'value' => 'https://www.tokopedia.com/metrojaya18/tempat-tissue-pw372-ivory-san-ei',
                'created_at' => '2022-03-30 15:09:56',
                'updated_at' => '2022-03-30 15:09:56',
                'deleted_at' => NULL,
            ),
            40 => 
            array (
                'id' => 41,
                'attribute_id' => 3,
                'product_id' => 9,
                'value' => 'https://www.tokopedia.com/metrojaya18/handle-pintu-solid-hre-61-41-handle-pintu-1-set-komplit-solid',
                'created_at' => NULL,
                'updated_at' => '2022-03-30 15:14:52',
                'deleted_at' => '2022-03-30 15:14:52',
            ),
            41 => 
            array (
                'id' => 42,
                'attribute_id' => 3,
                'product_id' => 9,
                'value' => 'https://www.tokopedia.com/metrojaya18/handle-pintu-solid-hre-61-41-handle-pintu-1-set-komplit-solid',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            42 => 
            array (
                'id' => 43,
                'attribute_id' => 1,
                'product_id' => 10,
                'value' => 'Stainless Steel',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            43 => 
            array (
                'id' => 44,
                'attribute_id' => 3,
                'product_id' => 10,
                'value' => 'https://www.tokopedia.com/metrojaya18/engsel-pintu-solid-4-inchi-engsel-solid-ek-17-4x3x2-5-bb-us-3d-engsel',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}