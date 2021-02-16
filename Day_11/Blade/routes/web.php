<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/template', function () {
    return view('template');
});

// MAIN LAYOUT
Route::get('/main', function () {
    return view('layout.main');
});

// PAGES   
Route::get('/department', function () {
    return view('pages.department');
})->name('department');

Route::get('/employee', function () {
    return view('pages.employee');
})->name('employee');

Route::get('/leaves', function () {
    return view('pages.leaves');
})->name('leaves');
