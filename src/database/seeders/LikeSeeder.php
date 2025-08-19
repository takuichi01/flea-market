<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LikeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $likes = [
            'user_id' => 1,
            'product_id' => 5,
            'created_at' => now(),
        ];
        DB::table('likes')->insert($likes);

        $likes = [
            'user_id' => 3,
            'product_id' => 5,
            'created_at' => now(),
        ];
        DB::table('likes')->insert($likes);

        $likes = [
            'user_id' => 4,
            'product_id' => 5,
            'created_at' => now(),
        ];
        DB::table('likes')->insert($likes);
    }
}
