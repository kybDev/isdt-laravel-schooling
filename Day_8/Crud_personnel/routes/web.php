<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\CrudPersonnelController;
use App\Http\Controllers\CrudStatisticsController;
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

Route::get('/', [ CrudPersonnelController::class, "index" ])->name('personnel');
Route::group(['prefix' => 'create'], function () {
    
    # CREATE
    Route::get('/', [ 
        CrudPersonnelController::class, "create_form" 
    ])->name('crud.create');

    Route::post('/save', [ 
        CrudPersonnelController::class, "create_save" 
    ])->name('crud.create.save');


    # UPDATE
    Route::get('/edit/{id}', [ 
        CrudPersonnelController::class, "update_form" 
    ])->name('crud.update');

    Route::post('/edit/save/{id}', [ 
        CrudPersonnelController::class, "update_save" 
    ])->name('crud.update.save');


    #DELETE
    Route::get('/delete/{id}', [ 
        CrudPersonnelController::class, "delete" 
    ])->name('crud.delete');
});


Route::group(['prefix' => 'bmi'], function () {

    Route::get('/{id}', [ 
        CrudStatisticsController::class, "index" 
    ])->name('crud.bmi');

    Route::post('create/{id}', [ 
        CrudStatisticsController::class, "create" 
    ])->name('crud.bmi.create');

    Route::post('update/{id}', [ 
        CrudStatisticsController::class, "update" 
    ])->name('crud.bmi.update');

});
