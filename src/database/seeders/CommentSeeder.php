<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comments = [
            'user_id' => 1,
            'product_id' => 5,
            'content' => 'Great product!',
            'created_at' => now(),
        ];
        DB::table('comments')->insert($comments);

        $comments = [
            'user_id' => 3,
            'product_id' => 5,
            'content' => 'uum, not bad',
            'created_at' => now(),
        ];
        DB::table('comments')->insert($comments);

        $comments = [
            'user_id' => 4,
            'product_id' => 5,
            'content' => 'omg, I love it!',
            'created_at' => now(),
        ];
        DB::table('comments')->insert($comments);
    }
}
