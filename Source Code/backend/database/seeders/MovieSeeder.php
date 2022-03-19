<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('movies')->insert([
            [
                'category_id' =>1,
                'name' => "movie 1",
                'description' =>
                "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id dolor id nibh ultricies vehicula ut id elit. Nullam id dolor id nibh ultricies vehicula ut id elit.",
                'image_url' => "/images/Aviator-Classic.jpg",
                'image_url2' => "/images/Aviator-Classic.jpg",
                'trailer_url' => "/images/Aviator-Classic.jpg",
                'day' => '1/4/2022',
                'time' => '20:00:00'
            ],
            [
                'category_id' => 2,
                'name' => "movie 2",
                'description' =>
                "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id dolor id nibh ultricies vehicula ut id elit. Nullam id dolor id nibh ultricies vehicula ut id elit.",
                'image_url' => "/images/Aviator-Classic.jpg",
                'image_url2' => "/images/Aviator-Classic.jpg",
                'trailer_url' => "/images/Aviator-Classic.jpg",
                'day' => '2/4/2022',
                'time' => '20:00:00'
            ],
            [
                'category_id' => 3,
                'name' => "movie 3",
                'description' =>
                "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id dolor id nibh ultricies vehicula ut id elit. Nullam id dolor id nibh ultricies vehicula ut id elit.",
                'image_url' => "/images/Aviator-Classic.jpg",
                'image_url2' => "/images/Aviator-Classic.jpg",
                'trailer_url' => "/images/Aviator-Classic.jpg",
                'day' => '3/4/2022',
                'time' => '20:00:00'
            ],
        ]);
    }

}
