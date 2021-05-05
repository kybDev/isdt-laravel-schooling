<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnalyticController;

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

Route::get('/',              [ AnalyticController::class, 'index'   ])->name('analytic_index');
Route::get('/create',        [ AnalyticController::class, 'create'  ])->name('analytic_create');
Route::post('/store',        [ AnalyticController::class, 'store'   ])->name('analytic_store');
Route::get('/edit/{id}',     [ AnalyticController::class, 'edit'    ])->name('analytic_edit');
Route::post('/update/{id}',  [ AnalyticController::class, 'update'  ])->name('analytic_update');
Route::get('/destroy/{id}',  [ AnalyticController::class, 'destroy' ])->name('analytic_destroy');


