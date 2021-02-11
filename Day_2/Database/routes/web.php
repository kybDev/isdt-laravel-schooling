<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DaysController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/day/2',[
    DaysController::class,
    'dayTwo'
])->middleware('content');

Route::get('/day/3',[
    DaysController::class,
    'dayThree'
]);

