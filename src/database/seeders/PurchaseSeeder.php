<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PurchaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $purchases = [
            'buyer_id' => 1,
            'product_id' => 4,
            'price' => 4000,
            'postcode' => '123-4567',
            'address' => '東京都新宿区1-2-3',
            'building' => '新宿ビル101',
            'created_at' => now(),
        ];
        DB::table('purchases')->insert($purchases);

        $purchases = [
            'buyer_id' => 1,
            'product_id' => 7,
            'price' => 3500,
            'postcode' => '123-4567',
            'address' => '東京都新宿区1-2-3',
            'building' => '新宿ビル101',
            'created_at' => now(),
        ];
        DB::table('purchases')->insert($purchases);

        $purchases = [
            'buyer_id' => 1,
            'product_id' => 9,
            'price' => 4000,
            'postcode' => '123-4567',
            'address' => '東京都新宿区1-2-3',
            'building' => '新宿ビル101',
            'created_at' => now(),
        ];
        DB::table('purchases')->insert($purchases);
    }
}
