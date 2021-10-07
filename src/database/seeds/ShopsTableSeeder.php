<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShopsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shops')->insert([
            [
                'id' => 1,
                'name' => 'hoge',
                'address' => '大分県',
                'tel' => '08012345678',
                'user_id' => 1
            ],
            [
                'id' => 2,
                'name' => 'hoge2',
                'address' => '宮崎県',
                'tel' => '08023455678',
                'user_id' => 2
            ],
            [
                'id' => 3,
                'name' => 'hoge3',
                'address' => '鹿児島県',
                'tel' => '08034565678',
                'user_id' => 3
            ],
        ]);
    }
}
