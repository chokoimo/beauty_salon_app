<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReservesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reserves')->insert([
            [
                'reservation_date' => 20211011,
                'user_id' => 1,
                'menu_id' => 1,
            ],
            [

                'reservation_date' => 20211012,
                'user_id' => 2,
                'menu_id' => 2,
            ],
            [

                'reservation_date' => 20211013,
                'user_id' => 3,
                'menu_id' => 3,
            ],
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        DB::statement('SET FOREIGN_KEY_CHECKS=2;');
    }
}
