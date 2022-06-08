<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\HtmlController;
use App\Http\Controllers\PresidentsController;
use App\Http\Controllers\EventController;

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

//先不要動
Route::get('/', function () {
    return view('welcome');
});
// ------------------------------

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth','power'])->name('dashboard');

require __DIR__.'/auth.php';


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

Route::prefix('/event')->group(function () {
    Route::get('/', [EventController::class,'index']);

    Route::get('/create', [EventController::class,'create']);
    Route::post('/store', [EventController::class,'store']);

    Route::get('/edit/{id}', [EventController::class,'edit']);
    Route::post('/update/{id}', [EventController::class,'update']);

    Route::post('/del/{id}', [EventController::class,'del']);
    Route::delete('/delete_img/{img_id}', [EventController::class, 'delete_img']);
});


