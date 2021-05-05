<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

Route::get('/', [AuthController::class, 'loginPage'])->middleware('guest')->name('login');
Route::post('/login', [AuthController::class, 'verify'])->middleware('guest')->name('login.verify');
Route::get('/dashboard', [AuthController::class, 'adminPage'])->middleware('admin')->name('dashboard');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


