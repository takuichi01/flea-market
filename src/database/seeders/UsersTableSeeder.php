<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            'name' => 'test1',
            'email' => 'test1@example.com',
            'password' => bcrypt('password1'),
            'postcode' => '123-4567',
            'address' => '東京都新宿区1-2-3',
            'building' => '新宿ビル101',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('users')->insert($users);

        $users = [
            'name' => 'test2',
            'email' => 'test2@example.com',
            'password' => bcrypt('password2'),
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('users')->insert($users);

        $users = [
            'name' => 'test3',
            'email' => 'test3@example.com',
            'password' => bcrypt('password3'),
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('users')->insert($users);

        $users = [
            'name' => 'test4',
            'email' => 'test4@example.com',
            'password' => bcrypt('password4'),
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('users')->insert($users);
    }
}

