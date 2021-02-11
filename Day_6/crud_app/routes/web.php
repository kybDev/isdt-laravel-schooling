<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;

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


Route::group(['prefix' => 'crud'], function () {
    Route::get('/', [CrudController::class, 'index'])->name('crud.index');

    // CREATE
    Route::get('/create-form', [CrudController::class, 'createForm'])->name('crud.form');
    Route::post('/save', [CrudController::class, 'save'])->name('crud.save');

    // UPDATE
    Route::get('/update-form/{id}', [CrudController::class, 'updateForm'])->name('crud.update');
    Route::post('/update/{id}', [CrudController::class, 'update'])->name('update.record');
    
    // DELETE
    Route::get('/delete/{id}', [CrudController::class, 'delete'])->name('crud.delete');

    
    
});