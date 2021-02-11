<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StorageController;
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
    StorageController::class, 'index'
])->name('index');



Route::get('/add', [
    StorageController::class, 'add'
])->name('add');


Route::post('/add/save', [
    StorageController::class, 'add_save'
])->name('add_save');
