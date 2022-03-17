<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->insert([
            [
                'name' => 'action',
                'description' => 'action desciption',
                'image_url' => 'action image url',
            ],
            [
                'name' => 'drama',
                'description' => 'drama desciption',
                'image_url' => 'drama image url',
            ],
            [
                'name' => 'romance',
                'description' => 'romance desciption',
                'image_url' => 'romance image url',
            ],
        ]);
    }
}