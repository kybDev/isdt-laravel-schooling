<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QueryController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['prefix' => 'query'], function () {
    Route::get('/simple', [ QueryController::class, "simple" ]);
    Route::get('/album', [ QueryController::class, "album" ]);
    Route::get('/artist', [ QueryController::class, "artist"]);
    Route::get('/song', [ QueryController::class, "song" ]);
    Route::get('/pluck', [QueryController::class, "pluck" ]);
    Route::get('/pluck/artist', [ QueryController::class, "pluckArtist" ]);
    Route::get('/find', [ QueryController::class, "find" ]);
    Route::get('/join/song-album', [ QueryController::class, "joinSongAlbum" ]);
});

Route::group(['prefix' => 'aggregates'], function () {
    Route::get('count', [ QueryController::class, "count" ]);
    Route::get('sum', [ QueryController::class, "sum" ]);
});

Route::group(['prefix' => 'join'], function () {
    Route::get('sum', [ QueryController::class, "joinSum" ]);
});

Route::group(['prefix' => 'where'], function () {
    Route::get('simple/where', [ QueryController::class, "simpleWhere" ]);
    Route::get('simple/where2', [ QueryController::class, "simpleWhere2" ]);
    Route::get('simple/where3', [ QueryController::class, "simpleWhere3" ]);
    Route::get('simple/where4', [ QueryController::class, "simpleWhere4" ]);

    Route::get('simplier', [ QueryController::class, "simplier" ]);
    Route::get('orwhere', [ QueryController::class, "orWhere" ]);
    Route::get('where-between', [ QueryController::class, "whereBetween" ]);
    Route::get('where-not-between', [ QueryController::class, "whereNotBetween" ]);
    Route::get('where-in', [ QueryController::class, "whereIn" ]);
    Route::get('where-not-in', [ QueryController::class, "whereNotIn" ]);

    Route::get('where-null', [ QueryController::class, "whereNull" ]);
    Route::get('where-not-null', [ QueryController::class, "whereNotNull" ]);
    

});