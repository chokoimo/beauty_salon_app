<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
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
        DB::table('users')->insert([
            [
                'name' => 'hoge',
                'email' => 'hoge@hoge.com',
                'password' => Hash::make('password'),
                'sex' => 1,
                'address' => '大分県',
                'image_path' => 'test',
                'role' => 2,

            ],
            [
                'name' => 'hoge2',
                'email' => 'hoge2@hoge.com',
                'password' => Hash::make('password'),
                'sex' => 2,
                'address' => '大分県',
                'image_path' => 'test',
                'role' => 2,
            ],
            [
                'name' => 'hoge3',
                'email' => 'hoge3@hoge.com',
                'password' => Hash::make('password'),
                'sex' => 1,
                'address' => '大分県',
                'image_path' => 'test',
                'role' => 2,
            ],
        ]);
    }
}
