<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class AlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("album")->insert([
            ['album_name' => "Kamikazee_album"],
            ['album_name' => "Urbandub_album"],
            ['album_name' => "Typecast_album"],
            ['album_name' => "Kjwan_album"],
        ]);
    }
}
