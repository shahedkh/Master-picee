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
                'name' => "The Batman",
                'description' =>
                "The darkness in “The Batman” is pervasive and literal. Gotham City in the week after Halloween, when this long chapter unfolds, sees about as much sunshine as northern Finland in mid-December. The ambience of urban demoralization extends to the light bulbs, which flicker weakly in the gloom. Bats, cats, penguins and other resident creatures are mostly nocturnal.",
                'image_url' => "https://m.media-amazon.com/images/M/MV5BOGE2NWUwMDItMjA4Yi00N2Y3LWJjMzEtMDJjZTMzZTdlZGE5XkEyXkFqcGdeQXVyODk4OTc3MTY@._V1_.jpg",
                'image_url2' => "https://www.glamsham.com/wp-content/uploads/2022/03/Robert-Pattinson-Zoe-Kravitz-in-Matt-Reeves-The-Batman-_-pic-courtesy-instagram.jpg",
                'trailer_url' => "https://www.youtube.com/watch?v=mqqft2x_Aa4",
                'day' => '1/4/2022',
                'time' => '20:00'
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
