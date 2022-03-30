<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('products')->delete();
        
        \DB::table('products')->insert(array (
            0 => 
            array (
                'id' => 1,
                'code' => 'RDC001',
                'name' => 'Roof Drain Cast Iron 4" Antasan',
                'description' => 'Roof drain cast irion / Besi Berfungsi untuk menyaring kotoran, Daun2 di atas Dak',
                'display_price' => 70000.0,
                'price' => 70000.0,
                'weight' => 1600.0,
                'dimension_width' => 1.0,
                'dimension_height' => 1.0,
                'dimension_depth' => 1.0,
                'stock' => 0.0,
                'images' => '["\\/products\\/\\/RDC001.jpg","\\/products\\/\\/RDC001_2.jpg","\\/products\\/\\/RDC001_3.jpg","\\/products\\/\\/RDC001_4.jpg"]',
                'category_id' => 1,
                'brand_id' => 1,
                'created_at' => '2022-03-30 15:09:56',
                'updated_at' => '2022-03-30 15:09:56',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'code' => 'RDC002',
                'name' => 'Roof Drain Cast Irin 3" Antasan',
                'description' => 'roof drain cast irion datar ukuran 3 inchi berfungsi untuk menyaring kotoran dan daun daun di atas',
                'display_price' => 65000.0,
                'price' => 65000.0,
                'weight' => 2000.0,
                'dimension_width' => 1.0,
                'dimension_height' => 1.0,
                'dimension_depth' => 1.0,
                'stock' => 0.0,
                'images' => '["\\/products\\/\\/RDC002.jpg"]',
                'category_id' => 1,
                'brand_id' => 1,
                'created_at' => '2022-03-30 15:09:56',
                'updated_at' => '2022-03-30 15:09:56',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'code' => 'SK379SN',
                'name' => 'Spring Knip Solid 379 SN/ Kunci Jendela/ Selot Kodok/ Selot Tekan',
            'description' => 'Spring knip Solid 379 (Kunci Jendela / Grendel Kodok)

SPRING KNIP 379 SN
Warna Finishing Satin Nickel (Khrom)
Bahan Zinc Alloy (Besi campuran dengan daya tahan terhadap karat lebih kuat)

Berfungsi untuk jendela rumah anda supaya dapat terkunci rapat

Tanyakan stock terlebih dahulu sebelum membeli.

Barang sesuai foto karena foto dari produk langsung',
                'display_price' => 28500.0,
                'price' => 28500.0,
                'weight' => 125.0,
                'dimension_width' => 1.0,
                'dimension_height' => 1.0,
                'dimension_depth' => 1.0,
                'stock' => 0.0,
                'images' => '["\\/products\\/\\/SK379SN.jpg","\\/products\\/\\/SK379SN_2.jpg"]',
                'category_id' => 2,
                'brand_id' => 2,
                'created_at' => '2022-03-30 15:09:56',
                'updated_at' => '2022-03-30 15:09:56',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'code' => 'HN508',
                'name' => 'Floor Drain San-ei HN508 P/Saringan got kamar mandi',
                'description' => 'Saringan got SAN-EI HN508P 

Plate Strainer: stainless steel 
Strainer outlet cover: PVC 
Strainer body: ABS finished with Chrome Plating 

Pertanyaan seputar produk ini bisa melalui Pesan atau Diskusi Produk',
                'display_price' => 160000.0,
                'price' => 160000.0,
                'weight' => 300.0,
                'dimension_width' => 1.0,
                'dimension_height' => 1.0,
                'dimension_depth' => 1.0,
                'stock' => 0.0,
                'images' => '["\\/products\\/\\/HN508.jpg","\\/products\\/\\/HN508_2.jpg"]',
                'category_id' => 3,
                'brand_id' => 3,
                'created_at' => '2022-03-30 15:09:56',
                'updated_at' => '2022-03-30 15:09:56',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'code' => 'ML175D',
                'name' => 'gembok master lock 175D',
                'description' => '',
                'display_price' => 250000.0,
                'price' => 250000.0,
                'weight' => 500.0,
                'dimension_width' => 1.0,
                'dimension_height' => 1.0,
                'dimension_depth' => 1.0,
                'stock' => 0.0,
                'images' => '["\\/products\\/\\/ML175D.jpg"]',
                'category_id' => 4,
                'brand_id' => 4,
                'created_at' => '2022-03-30 15:09:56',
                'updated_at' => '2022-03-30 15:09:56',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'code' => 'GJS60',
                'name' => 'Gembok Jaket Solid 60mm / Gembok pagar/',
                'description' => 'Gembok Jacket Solid 

Merk : SOLID 
Tipe : 808 Jacket 
Ukuran : 60mm 
Anak kunci : 4pcs',
                'display_price' => 86500.0,
                'price' => 86500.0,
                'weight' => 800.0,
                'dimension_width' => 1.0,
                'dimension_height' => 1.0,
                'dimension_depth' => 1.0,
                'stock' => 0.0,
                'images' => '["\\/products\\/\\/GJS60.jpg","\\/products\\/\\/GJS60_2.jpg"]',
                'category_id' => 4,
                'brand_id' => 2,
                'created_at' => '2022-03-30 15:09:56',
                'updated_at' => '2022-03-30 15:09:56',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'code' => 'GPS627',
                'name' => 'Grendel Pintu SOLID 627 2" / Selot jendela/ Grendel Jendela',
                'description' => 'BARREL BOLT / GRENDEL 627 3" SOLID 
MATERIL : ZINC ALLOY tahan terhadap karat lebih lama',
                'display_price' => 28500.0,
                'price' => 28500.0,
                'weight' => 100.0,
                'dimension_width' => 1.0,
                'dimension_height' => 1.0,
                'dimension_depth' => 1.0,
                'stock' => 0.0,
                'images' => '["\\/products\\/\\/GPS627.jpg","\\/products\\/\\/GPS627_2.jpg","\\/products\\/\\/GPS627_3.jpg"]',
                'category_id' => 2,
                'brand_id' => 2,
                'created_at' => '2022-03-30 15:09:56',
                'updated_at' => '2022-03-30 15:09:56',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'code' => 'IGT30',
                'name' => 'Grease Trap IGT 30/ Bak Control/ Penyaring',
                'description' => 'PRODUK YANG KAMI JUAL MERK IGT-30 PRODUKSI INDOGRREN YA BUKAN GT-30 " 


GREASE/lemak dari Dapur adalah salah satu limbah Domestik yang tidak bisa terurai secara alami 

Jika limbah Grease ini tidak tidak ditangani secara tepat, akan menyebabkan: 
- Saluran pipa akan Tersumbat oleh grease/Lemak yang membekukan serta menguras. 
-Jika sampai Keluar ke saluran, akan menyebabkan bau tidak sedap dan menimbulkan penyakit 
-Jika Sampai Masuk Kedalaman sepi tank akan pengganti proses septictank 

Grease Tap Portable ini dipasang dibawah Sink Dapur. 

Keunggulan Produk Grease Tap ini: 
1.Harga Murah 
2.Ramah lingkungan 
3*Design dan Bentuk yg membuat bau lemak tidak keluar karena menggunakan sistem vacumm/seperti pintu Kulkas 

TYPE IGT-30 
Dimensi (mm) : 
P x l x t : 43x 33x 31cm 
MATERIAL: pola Propylene /Pp Plastic 
Pipa & Fittings: PVC Diameter 1.1/2" 
Basket 
Pola Propylene /pp Plastic 
Ketebalan 3mm 
Tahan beban 70kg 
Tahan terhadap panas air dan minyak 

Di 
Kelengkapan 
-2 pasang knee sambung 
-baut 2 
-buku panduan',
                'display_price' => 305000.0,
                'price' => 305000.0,
                'weight' => 9000.0,
                'dimension_width' => 1.0,
                'dimension_height' => 1.0,
                'dimension_depth' => 1.0,
                'stock' => 0.0,
                'images' => '["\\/products\\/\\/IGT30.png","\\/products\\/\\/IGT30_2.png"]',
                'category_id' => 5,
                'brand_id' => 5,
                'created_at' => '2022-03-30 15:09:56',
                'updated_at' => '2022-03-30 15:09:56',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'code' => 'HRE61',
                'name' => 'Handle pintu Solid HRE.61.41 / handle pintu 1 set komplit solid',
                'description' => 'Sudah 1 set. Isi handle+body+cylinder. Semua merk Solid. Handle HRE61.41 + LC111 WL-40 + DC02-60',
                'display_price' => 225000.0,
                'price' => 225000.0,
                'weight' => 1500.0,
                'dimension_width' => 1.0,
                'dimension_height' => 1.0,
                'dimension_depth' => 1.0,
                'stock' => 0.0,
                'images' => '["products/HRE61.jpg"]',
                'category_id' => 6,
                'brand_id' => 2,
                'created_at' => '2022-03-30 15:09:56',
                'updated_at' => '2022-03-30 15:14:52',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'code' => 'ESEK17',
                'name' => 'Engsel pintu solid 4 inchi/ engsel solid EK 17 4x3x2.5 BB US 3D/engsel',
            'description' => 'Engsel Pintu Solid EK 17 _ 4" × 3" × 3mm x 4BB (terbaru) Deskripsi : Engsel kupu-kupu untuk Pintu Merk : SOLID Tipe : EK 17 _ 4"×3"×3mmx4 BB Ball Bearing = 4 Ball Bearing Kapasitas : 45-65 Kg (rekomendasi per 3 pcs) Material : Stainless Steel US 32 D (termasuk PIN & Screw) Satuan : 1 Pasang = 2 Pcs Tersedia Ukuran, Tipe, Warna, Merk & Produk Lainnya yang dapat disesuaikan dengan kebutuhan anda. Dapatkan Harga Grosir Untuk Pembelian dengan Jumlah Tertentu, hubungi kami di 081213710372 (Call/WA). Selamat berbelanja ya GAN dan makasih banyak ya 😁🙏🙏🙏.',
                'display_price' => 65000.0,
                'price' => 65000.0,
                'weight' => 500.0,
                'dimension_width' => 1.0,
                'dimension_height' => 1.0,
                'dimension_depth' => 1.0,
                'stock' => 0.0,
                'images' => '["products/ESEK17.jpg","products/ESEK17_2.jpg"]',
                'category_id' => 7,
                'brand_id' => 2,
                'created_at' => '2022-03-30 15:09:56',
                'updated_at' => '2022-03-30 15:15:33',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'code' => 'FLS05',
                'name' => 'FLS 05 Onda / Floor Drain / Saringan air kamar mandi',
                'description' => 'saringan got untuk penutup lubang wc/air dalam sanitary 
bahan kuningan anti karat 
dijamin 100% original ONDA 
barang ready 
stock banyak 

Saringan Lantai/Got ONDA 
- Tipe : FLS 05 ONDA 
- Merk : ONDA (TOP BRAND 2012 - 2017) 
- Warna : Silver 
- Ukuran : 1-1/2" (Panjang 98mm, Lebar 98mm, Tinggi 37,5mm) 
- Bahan : Kuningan anti karat 
- Japan Quality 
- original',
                'display_price' => 155000.0,
                'price' => 155000.0,
                'weight' => 500.0,
                'dimension_width' => 1.0,
                'dimension_height' => 1.0,
                'dimension_depth' => 1.0,
                'stock' => 0.0,
                'images' => '["\\/products\\/\\/FLS05.jpg","\\/products\\/\\/FLS05_2.jpg","\\/products\\/\\/FLS05_3.jpg"]',
                'category_id' => 3,
                'brand_id' => 6,
                'created_at' => '2022-03-30 15:09:56',
                'updated_at' => '2022-03-30 15:09:56',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'code' => 'RDH01',
                'name' => 'Roof Drain San-ei H01 4"inch',
                'description' => 'ROOF DRAIN 4 INCH 

SPESIFIKASI: 
Kegunaan: Saringan Air Pada Atap Bangunan 
Warna: Chrome 

KEUNGGULAN: 
- Triple Chroming 
(Lebih Tebal, Lebih Mengkilap, dan lebih Tahan Lama) 
- 100% High Quality Kuningan 
(Anti Karat Kualitas Terbaik, dan Ramah Lingkungan) 
- Japanese Design 
(Terbuat Dari Stainless Steel 304, dan Lebih Tahan Lama)',
                'display_price' => 207000.0,
                'price' => 207000.0,
                'weight' => 500.0,
                'dimension_width' => 1.0,
                'dimension_height' => 1.0,
                'dimension_depth' => 1.0,
                'stock' => 0.0,
                'images' => '["\\/products\\/\\/RDH01.jpg"]',
                'category_id' => 1,
                'brand_id' => 3,
                'created_at' => '2022-03-30 15:09:56',
                'updated_at' => '2022-03-30 15:09:56',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'code' => 'VTR-125BR',
                'name' => 'Pelampung Coklat VITARA / Pelampung kloset',
                'description' => 'BARANG YANG KAMI JUAL 100% BARU & ORIGINAL ! 

Pelampung kloset vitara VTR-125BR 
* Bisa di pakai di semua merek kloset duduk twopcs 
( model tangki ) 
ukuran drat inlet standard 1/2inchi',
                'display_price' => 90000.0,
                'price' => 90000.0,
                'weight' => 500.0,
                'dimension_width' => 1.0,
                'dimension_height' => 1.0,
                'dimension_depth' => 1.0,
                'stock' => 0.0,
                'images' => '["\\/products\\/\\/VTR-125BR.jpg","\\/products\\/\\/VTR-125BR_2.jpg","\\/products\\/\\/VTR-125BR_3.jpg","\\/products\\/\\/VTR-125BR_4.jpg"]',
                'category_id' => 8,
                'brand_id' => 7,
                'created_at' => '2022-03-30 15:09:56',
                'updated_at' => '2022-03-30 15:09:56',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'code' => 'TL060',
                'name' => 'kran wastafel wasser TL 060',
                'description' => '',
                'display_price' => 224000.0,
                'price' => 224000.0,
                'weight' => 1000.0,
                'dimension_width' => 1.0,
                'dimension_height' => 1.0,
                'dimension_depth' => 1.0,
                'stock' => 0.0,
                'images' => '["\\/products\\/\\/TL060.jpg","\\/products\\/\\/TL060_2.jpg","\\/products\\/\\/TL060_3.jpg"]',
                'category_id' => 9,
                'brand_id' => NULL,
                'created_at' => '2022-03-30 15:09:56',
                'updated_at' => '2022-03-30 15:09:56',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'code' => 'RD03',
                'name' => 'Roof Drain 3 inchi/ Saringan Talang/ Penyaring Dak/ Roof/ Drain',
                'description' => 'Roof Drain Kuningan 
Ukuran 3 inchi 
Berfungsi untuk menyaring kotoran d atas daak',
                'display_price' => 34000.0,
                'price' => 34000.0,
                'weight' => 300.0,
                'dimension_width' => 1.0,
                'dimension_height' => 1.0,
                'dimension_depth' => 1.0,
                'stock' => 0.0,
                'images' => '["\\/products\\/\\/RD03.jpg","\\/products\\/\\/RD03_2.jpg","\\/products\\/\\/RD03_3.jpg"]',
                'category_id' => 1,
                'brand_id' => NULL,
                'created_at' => '2022-03-30 15:09:56',
                'updated_at' => '2022-03-30 15:09:56',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'code' => 'TX467',
                'name' => 'Keran Bathub TOTO TX 467.SESBR/ Keran Mixer/ Bathub',
                'description' => 'Tipe : TX 467 SESBR 
100 % ORIGINAL TOTO DAN SEGEL DUS',
                'display_price' => 2700000.0,
                'price' => 2700000.0,
                'weight' => 2500.0,
                'dimension_width' => 1.0,
                'dimension_height' => 1.0,
                'dimension_depth' => 1.0,
                'stock' => 0.0,
                'images' => '["\\/products\\/\\/TX467.jpg","\\/products\\/\\/TX467_2.jpg"]',
                'category_id' => 10,
                'brand_id' => 8,
                'created_at' => '2022-03-30 15:09:56',
                'updated_at' => '2022-03-30 15:09:56',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'code' => 'FCO3',
                'name' => 'Clean Out ONDA FCO 3 inchi/ Tutup Spitank',
                'description' => 'Clean Out ONDA 
FCO 3 inchi 
Bahan Kuningan',
                'display_price' => 193000.0,
                'price' => 193000.0,
                'weight' => 260.0,
                'dimension_width' => 1.0,
                'dimension_height' => 1.0,
                'dimension_depth' => 1.0,
                'stock' => 0.0,
                'images' => '["\\/products\\/\\/FCO3.jpg","\\/products\\/\\/FCO3_2.jpg","\\/products\\/\\/FCO3_3.jpg","\\/products\\/\\/FCO3_4.jpg"]',
                'category_id' => 11,
                'brand_id' => 6,
                'created_at' => '2022-03-30 15:09:56',
                'updated_at' => '2022-03-30 15:09:56',
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'code' => 'GO637',
                'name' => 'Grendel overpal 637ukuran 2.5 inci solid',
                'description' => 'Grendel +kunci solid 
bahan stenlis',
                'display_price' => 43000.0,
                'price' => 43000.0,
                'weight' => 300.0,
                'dimension_width' => 1.0,
                'dimension_height' => 1.0,
                'dimension_depth' => 1.0,
                'stock' => 0.0,
                'images' => '["\\/products\\/\\/GO637.jpg"]',
                'category_id' => 2,
                'brand_id' => 2,
                'created_at' => '2022-03-30 15:09:56',
                'updated_at' => '2022-03-30 15:09:56',
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'code' => 'KMB01',
                'name' => 'kunci kamar mandi Binoche/ kunci bulat/ handle putar',
                'description' => 'kunci kamar mandi 
merk Binoche 
bahan stainless 
anak kunci kuningan',
                'display_price' => 50000.0,
                'price' => 50000.0,
                'weight' => 500.0,
                'dimension_width' => 1.0,
                'dimension_height' => 1.0,
                'dimension_depth' => 1.0,
                'stock' => 0.0,
                'images' => '["\\/products\\/\\/KMB01.jpg","\\/products\\/\\/KMB01_2.jpg"]',
                'category_id' => 6,
                'brand_id' => 9,
                'created_at' => '2022-03-30 15:09:56',
                'updated_at' => '2022-03-30 15:09:56',
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'code' => 'STP014',
                'name' => 'Door Stop Keong SOLID STP 014/ Ganjalan Pintu',
                'description' => 'Door Stoper SOLID STP 014, penahan pintu untuk dipasangkan dilantai ( gunanya untuk menahan pintu terhadap benturan ke tembok/dinding yg akan menyebabkan kerusakan pada handel pintu atau dinding/tembok 
rumah) 

Material : stainless steel',
                'display_price' => 28500.0,
                'price' => 28500.0,
                'weight' => 100.0,
                'dimension_width' => 1.0,
                'dimension_height' => 1.0,
                'dimension_depth' => 1.0,
                'stock' => 0.0,
                'images' => '["\\/products\\/\\/STP014.jpg","\\/products\\/\\/STP014_2.jpg"]',
                'category_id' => 12,
                'brand_id' => 2,
                'created_at' => '2022-03-30 15:09:56',
                'updated_at' => '2022-03-30 15:09:56',
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'code' => 'FDF01',
                'name' => 'Floor Drain Fiorentino Hitam/ Saringan Got/ Afur Lantai',
                'description' => 'Floor Drain Fiorentino 
Warna Hitam 
Bisa di gunakhan di ukuran pipa 
2 dan 3 inchi',
                'display_price' => 61000.0,
                'price' => 61000.0,
                'weight' => 300.0,
                'dimension_width' => 1.0,
                'dimension_height' => 1.0,
                'dimension_depth' => 1.0,
                'stock' => 0.0,
                'images' => '["\\/products\\/\\/FDF01.jpg","\\/products\\/\\/FDF01_2.jpg","\\/products\\/\\/FDF01_3.jpg","\\/products\\/\\/FDF01_4.jpg"]',
                'category_id' => 3,
                'brand_id' => NULL,
                'created_at' => '2022-03-30 15:09:56',
                'updated_at' => '2022-03-30 15:09:56',
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'code' => 'TS68',
                'name' => 'door closer Dorma ts68',
                'description' => 'DORMA Door closer TS68, standard Arm 
-Beban Max 80Kg 
-2 Valve penyetelan 80 derajat dan 20 derajat 
-Kekuatan spring EN 2-6 
-Standard Arm 
-Lengkap dengan baut tutup, tinggal pasang 

Barang ASlI DORMA, kami tidak jualan barang kw.',
                'display_price' => 330000.0,
                'price' => 330000.0,
                'weight' => 2000.0,
                'dimension_width' => 1.0,
                'dimension_height' => 1.0,
                'dimension_depth' => 1.0,
                'stock' => 0.0,
                'images' => '["\\/products\\/\\/TS68.jpg","\\/products\\/\\/TS68_2.jpg"]',
                'category_id' => 12,
                'brand_id' => 10,
                'created_at' => '2022-03-30 15:09:56',
                'updated_at' => '2022-03-30 15:09:56',
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'code' => 'HPH01',
                'name' => 'Handle pintu hitam / handle pintu hitam belocca',
                'description' => 'handle pintu ss hitam 
belocca',
                'display_price' => 155000.0,
                'price' => 155000.0,
                'weight' => 1000.0,
                'dimension_width' => 1.0,
                'dimension_height' => 1.0,
                'dimension_depth' => 1.0,
                'stock' => 0.0,
                'images' => '["\\/products\\/\\/HPH01.jpg"]',
                'category_id' => 6,
                'brand_id' => 11,
                'created_at' => '2022-03-30 15:09:56',
                'updated_at' => '2022-03-30 15:09:56',
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'code' => 'FVO01',
                'name' => 'floating Valve Onda 1" inch /pelampung toren air Onda 1 inch',
                'description' => 'Pelampung air ONDA 1" Inch / Tangki toren 

Fungsi : pelampung air digunakan pada toren / tangki penampungan air dengan tujuan untuk mengatur volume air agar tidak meluap. 
Merk Onda ukuran 1 inch. Bahan pelampung plastik, dengan gagang dan sambungan kuningan 

tersedia ukuran 1/2" 
',
                'display_price' => 250000.0,
                'price' => 250000.0,
                'weight' => 500.0,
                'dimension_width' => 1.0,
                'dimension_height' => 1.0,
                'dimension_depth' => 1.0,
                'stock' => 0.0,
                'images' => '["\\/products\\/\\/FVO01.jpg"]',
                'category_id' => 13,
                'brand_id' => 6,
                'created_at' => '2022-03-30 15:09:56',
                'updated_at' => '2022-03-30 15:09:56',
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'code' => 'PW372',
            'name' => 'Tempat tissue PW372 (Ivory) San-ei',
                'description' => 'Product Description : 

San Ei Paper Holder 
Tempat gantungan tissue 
stok tersedia warna ivory',
                'display_price' => 110000.0,
                'price' => 110000.0,
                'weight' => 500.0,
                'dimension_width' => 1.0,
                'dimension_height' => 1.0,
                'dimension_depth' => 1.0,
                'stock' => 0.0,
                'images' => '["\\/products\\/\\/PW372.jpg","\\/products\\/\\/PW372_2.jpg"]',
                'category_id' => 14,
                'brand_id' => 3,
                'created_at' => '2022-03-30 15:09:56',
                'updated_at' => '2022-03-30 15:09:56',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}