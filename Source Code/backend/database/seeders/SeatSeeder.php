<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SeatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('seats')->insert([
            [
                'movie_id' => 1,
                'seat_number' => 1,
                'reserved' => false
            ],
            [
                'movie_id' => 1,
                'seat_number' => 2,
                'reserved' => false
            ],
            [
                'movie_id' => 1,
                'seat_number' => 3,
                'reserved' => false
            ],
            [
                'movie_id' => 1,
                'seat_number' => 4,
                'reserved' => false
            ],
            [
                'movie_id' => 1,
                'seat_number' => 5,
                'reserved' => false
            ],
        ]);
    }
}
