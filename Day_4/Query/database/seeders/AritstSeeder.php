<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class AritstSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("artist")->insert([
            ['artist_name' => "Kamikazee"],
            ['artist_name' => "Urbandub"],
            ['artist_name' => "Typecast"],
            ['artist_name' => "Kjwan"],
        ]);
    }
}
