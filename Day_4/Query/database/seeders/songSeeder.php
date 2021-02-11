<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class songSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("song")->insert([
            ['song_name' => "Petix", 'genre_id' => 1, 'artist_id' => 1, 'album_id' => 1 ],
            ['song_name' => "The Fight is Over", 'genre_id' => 2, 'artist_id' => 2, 'album_id' => 2 ],
            ['song_name' => "Boston Drama", 'genre_id' => 3, 'artist_id' => 3, 'album_id' => 3 ],
            ['song_name' => "Pause", 'genre_id' => 4, 'artist_id' => 4, 'album_id' => 4 ],
        ]);
    }
}
