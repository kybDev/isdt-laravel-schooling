<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("genre")->insert([
            ['genre_name' => "Punk"],
            ['genre_name' => "Alternative Rock"],
            ['genre_name' => "Pop Rock"],
            ['genre_name' => "Metal"],
        ]);
    }
}
