<?php

use Cron\HoursField;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->insert([
            [
                'name' => 'カット',
                'price' => 5000,
                'time' => 1,
            ],
            [
                'name' => 'パーマ',
                'price' => 7000,
                'time' => 1.5,
            ],
            [
                'name' => 'ストレート',
                'price' => 10000,
                'time' => 2,
            ],
        ]);
    }
}
