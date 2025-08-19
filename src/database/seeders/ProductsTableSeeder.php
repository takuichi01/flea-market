<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => '腕時計',
            'seller_id' => 1, // Assuming user with ID 1 exists
            'product_image' => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/Armani+Mens+Clock.jpg',
            'brand' => 'Sample Brand',
            'price' => 15000,
            'description' => 'スタイリッシュなデザインのメンズ腕時計',
            'category' => 'Sample Category',
            'condition' => '良好',
            'sold_flag' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('products')->insert($param);

        $param = [
            'name' => 'HDD',
            'seller_id' => 1, // Assuming user with ID 1 exists
            'product_image' => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/HDD+Hard+Disk.jpg',
            'brand' => 'Sample Brand',
            'price' => 5000,
            'description' => '高速で信頼性の高いハードディスク',
            'category' => 'Sample Category',
            'condition' => '目立った傷や汚れなし',
            'sold_flag' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('products')->insert($param);

        $param = [
            'name' => '玉ねぎ3束',
            'seller_id' => 1, // Assuming user with ID 1 exists
            'product_image' => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/iLoveIMG+d.jpg',
            'brand' => 'Sample Brand',
            'price' => 300,
            'description' => '新鮮な玉ねぎ3束のセット',
            'category' => 'Sample Category',
            'condition' => 'やや傷や汚れあり',
            'sold_flag' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('products')->insert($param);

        $param = [
            'name' => '革靴',
            'seller_id' => 2, // Assuming user with ID 2 exists
            'product_image' => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/Leather+Shoes+Product+Photo.jpg',
            'brand' => 'Sample Brand',
            'price' => 4000,
            'description' => 'クラシックなデザインの革靴',
            'category' => 'Sample Category',
            'condition' => '状態が悪い',
            'sold_flag' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('products')->insert($param);

        $param = [
            'name' => 'ノートPC',
            'seller_id' => 2, // Assuming user with ID 2 exists
            'product_image' => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/Living+Room+Laptop.jpg',
            'brand' => 'Sample Brand',
            'price' => 45000,
            'description' => '高性能なノートパソコン',
            'category' => 'PC,ノートPC,高性能',
            'condition' => '良好',
            'sold_flag' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('products')->insert($param);

        $param = [
            'name' => 'マイク',
            'seller_id' => 2, // Assuming user with ID 2 exists
            'product_image' => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/Music+Mic+4632231.jpg',
            'brand' => 'Sample Brand',
            'price' => 8000,
            'description' => '高音質のレコーディング用マイク',
            'category' => 'Sample Category',
            'condition' => '目立った傷や汚れなし',
            'sold_flag' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('products')->insert($param);

        $param = [
            'name' => 'ショルダーバッグ',
            'seller_id' => 3, // Assuming user with ID 3 exists
            'product_image' => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/Purse+fashion+pocket.jpg',
            'brand' => 'Sample Brand',
            'price' => 3500,
            'description' => 'おしゃれなショルダーバッグ',
            'category' => 'Sample Category',
            'condition' => 'やや傷や汚れあり',
            'sold_flag' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('products')->insert($param);

        $param = [
            'name' => 'タンブラー',
            'seller_id' => 3, // Assuming user with ID 3 exists
            'product_image' => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/Tumbler+souvenir.jpg',
            'brand' => 'Sample Brand',
            'price' => 500,
            'description' => '使いやすいタンブラー',
            'category' => 'Sample Category',
            'condition' => '状態が悪い',
            'sold_flag' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('products')->insert($param);

        $param = [
            'name' => 'コーヒーミル',
            'seller_id' => 4, // Assuming user with ID 4 exists
            'product_image' => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/Waitress+with+Coffee+Grinder.jpg',
            'brand' => 'Sample Brand',
            'price' => 4000,
            'description' => '手動のコーヒーミル',
            'category' => 'Sample Category',
            'condition' => '良好',
            'sold_flag' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('products')->insert($param);

        $param = [
            'name' => 'メイクセット',
            'seller_id' => 4, // Assuming user with ID 4 exists
            'product_image' => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/%E5%A4%96%E5%87%BA%E3%83%A1%E3%82%A4%E3%82%AF%E3%82%A2%E3%83%83%E3%83%95%E3%82%9A%E3%82%BB%E3%83%83%E3%83%88.jpg',
            'brand' => 'Sample Brand',
            'price' => 2500,
            'description' => '便利なメイクアップセット',
            'category' => 'Sample Category',
            'condition' => '目立った傷や汚れなし',
            'sold_flag' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('products')->insert($param);
    }
}
