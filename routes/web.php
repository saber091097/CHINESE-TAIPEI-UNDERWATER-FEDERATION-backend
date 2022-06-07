<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\HtmlController;
use App\Http\Controllers\PresidentsController;

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

Route::get('/index', [IndexController::class,'index']);

Route::get('/Past-presidents', [HtmlController::class,'Pastpresidents']);

Route::prefix('/presidents')->group(function () {
    Route::get('/', [PresidentsController::class,'index']);

    Route::get('/create', [PresidentsController::class,'create']);
    Route::post('/store', [PresidentsController::class,'store']);

    Route::get('/edit/{id}', [PresidentsController::class,'edit']);
    Route::post('/update/{id}', [PresidentsController::class,'update']);

    Route::post('/del/{id}', [PresidentsController::class,'del']);
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
