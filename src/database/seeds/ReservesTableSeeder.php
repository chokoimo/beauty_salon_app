<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class ReservesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

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


        Model::reguard();
    }
}
