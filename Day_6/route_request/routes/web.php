<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\RequestController;

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

Route::get('/', [
    RouteController::class, 'index'
])->name('home.get');

Route::post('/', [
    RouteController::class, 'post'
])->name('home.post');

Route::get('/home', [
    RouteController::class, 'home'
])->name('home');

Route::get('/about', [
    RouteController::class, 'about'
])->name('about');

Route::get('/contact/{contact}', [
    RouteController::class, 'contact'
])->name('contact');


Route::group(['prefix' => 'test'], function () {
    Route::get('/simple',        [       TestController::class, 'simple'       ])->name('test.simple');
    Route::get('/redirect',      [       TestController::class, 'redirect'     ])->name('test.redirect');
    Route::get('/landing',       [       TestController::class, 'landing'      ])->name('test.landing');
    Route::get('/update/{id}',   [       TestController::class, 'update'       ])->name('test.update');
    Route::get('/submit',        [       TestController::class, 'submit'       ])->name('test.submit');
    Route::get('/create/{id?}',  [       TestController::class, 'create'       ])->name('test.create');
});


Route::group(['prefix' => 'request'], function () {
    Route::post('/name',          [       RequestController::class, 'name'         ])->name('request.name');
    Route::get('/form',           [       RequestController::class, 'form'         ])->name('request.form');
});


