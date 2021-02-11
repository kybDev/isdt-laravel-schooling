<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExamController;
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



Route::group(['prefix' => 'exam'], function () {
    Route::get('1', [ ExamController::class, "exam1" ]);
    Route::get('2', [ ExamController::class, "exam2" ]);
    Route::get('3', [ ExamController::class, "exam3" ]);
    Route::get('4', [ ExamController::class, "exam4" ]);
    Route::get('5', [ ExamController::class, "exam5" ]);
    Route::get('6', [ ExamController::class, "exam6" ]);
    Route::get('7', [ ExamController::class, "exam7" ]);
    Route::get('8', [ ExamController::class, "exam8" ]);

    Route::get('9', [ ExamController::class, "exam9" ]);
    Route::get('10', [ ExamController::class, "exam10" ]);
    Route::get('11', [ ExamController::class, "exam11" ]);
    Route::get('12', [ ExamController::class, "exam12" ]);
    Route::get('13', [ ExamController::class, "exam13" ]);
    Route::get('14', [ ExamController::class, "exam14" ]);
    Route::get('15', [ ExamController::class, "exam15" ]);

});

Route::group(['prefix' => 'orderby'], function () {
    Route::get('asc', [ ExamController::class, "asc" ]);
    Route::get('desc', [ ExamController::class, "desc" ]);
});