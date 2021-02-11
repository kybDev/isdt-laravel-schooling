<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;

class QueryController extends Controller
{
    public function simple(){
        $data = DB::table('song')
        ->get();
        return $data;
    }

    public function album(){
        $data = DB::table('album')
        ->get();
        return $data;
    }

    public function artist(){
        $data = DB::table('artist')
        ->get();
        return $data;
    }

    public function song(){
        $data = DB::table('song')
        ->get();
        return $data;
    }

    public function pluck(){
        $data = DB::table('album')
        ->pluck('album_name');
        dd($data);
    }

    public function pluckArtist(){
        $data = DB::table('artist')
        ->pluck('artist_name');
        dd($data);
    }

    public function find(){
        $data = DB::table('song')->find(666);
        dd($data);
    }

    public function joinSongAlbum(){
        $data = DB::table('song')

        # GENRE
        ->join('genre', 'genre.id', '=', 'song.genre_id')

        # ARTIST
        ->join('artist', 'artist.id', '=', 'song.artist_id')

        # ARTIST
        ->join('album', 'album.id', '=', 'song.album_id')

        
        ->select(
            'song.song_name AS Title',
            'album.album_name AS Album',
            'artist.artist_name AS Single',
            'genre.genre_name AS Genre',
        )

        ->get();
        dd($data);
    }


    public function count(){
        $data = DB::table('song')->count();
        dd($data);
    }

    public function sum(){
        $data = DB::table('song')->sum('id');
        dd($data);
    }

    public function joinSum(){
        $data = DB::table('song')

        # GENRE
        ->join('genre', 'genre.id', '=', 'song.genre_id')

        ->select(DB::raw('AVG(song.id) + AVG(genre.id) AS count '))->first();
        
        dd($data);
    }

    # SEARCH EQUAL VALUE
    public function simpleWhere(){
        $data = DB::table('song')
        ->where('genre_id', '=', 2)
        ->first();

        
        dd($data);
    }

    # SEARCH NOT EQUAL VALUE
    public function simpleWhere2(){
        $data = DB::table('album') ->where('id', '!=', 2) ->get();
        dd($data);
    }

    # SEARCH GREATER THAN OR LESSTHAN  VALUE
    public function simpleWhere3(){
        $data = DB::table('artist') ->where('id', '<', 2) ->get();
        dd($data);
    }

    # SEARCH LIKE ANY VALUE
    public function simpleWhere4(){
        $data = DB::table('genre') ->where('genre_name', 'LIKE', "%AL%") ->get();
        dd($data);
    }

    public function simplier(){
        $data = DB::table('song') ->whereGenre_id(1)->get();
        dd($data);
    }

    public function orWhere(){
        $data = DB::table('song') 
        ->whereGenre_id(1)
        ->orWhere('genre_id', '=', 2)
        ->get();
        dd($data);
    }

    public function whereBetween(){
        $data = DB::table('song') 
        ->whereBetween('id', [2, 3])
        ->get();
        dd($data);
    }

    public function whereNotBetween(){
        $data = DB::table('song') 
        ->whereNotBetween('id', [2, 3])
        ->get();
        dd($data);
    }

    public function whereIn(){
        $data = DB::table('song') 
        ->whereIn('id', [2, 3])
        ->get();
        dd($data);
    }

    public function whereNotIn(){
        $data = DB::table('song') 
        ->whereNotIn('id', [2, 3])
        ->get();
        dd($data);
    }

    public function whereNull(){
        $data = DB::table('song')
        ->whereNull('updated_at')
        ->get();
        dd($data);
    }

    public function whereNotNull(){
        $data = DB::table('song')
        ->whereNotNull('updated_at')
        ->get();
        dd($data);
    }

}
