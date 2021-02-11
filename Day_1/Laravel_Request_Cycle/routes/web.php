<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaravelRequest;
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
    LaravelRequest::class,
    "indexsView"
])->middleware('privacy');

Route::get('/about-us', [
    LaravelRequest::class,
    "aboutUsView"
]);

Route::get('/contact', [
    LaravelRequest::class,
    "contactView"
]);

Route::get('/services', [
    LaravelRequest::class,
    "servicesView"
]);

Route::get('/gallery', [
    LaravelRequest::class,
    "galleryView"
]);


// Route::get('/', 'LaravelRequest@indexsView');
// Route::get('/about-us', 'LaravelRequest@aboutUsView');
// Route::get('/contact', 'LaravelRequest@contactView');
// Route::get('/services', 'LaravelRequest@servicesView');
// Route::get('/gallery', 'LaravelRequest@galleryView');

