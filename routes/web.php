<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\HtmlController;
use App\Http\Controllers\PresidentsController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\EventimgController;

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

Route::prefix('/new')->group(function () {
    Route::get('/', [EventController::class,'index']);

    Route::get('/create', [EventController::class,'create']);
    Route::post('/store', [EventController::class,'store']);

    Route::get('/edit/{id}', [EventController::class,'edit']);
    Route::post('/update/{id}', [EventController::class,'update']);

    Route::post('/del/{id}', [EventController::class,'del']);
    Route::delete('/delete_img/{img_id}', [EventController::class, 'delete_img']);
});

Route::prefix('/eventimg')->group(function () {
    Route::get('/', [EventimgController::class,'index']);

    Route::get('/windsurf', [EventimgController::class,'windsurf']);
    Route::get('/windsurf/{id}', [EventimgController::class,'windsurfevent']);
    Route::get('/windsurf/edit/{id}', [EventimgController::class,'windsurfedit']);
    Route::post('/windsurf/update/{id}', [EventimgController::class,'windsurfupdate']);
    Route::post('/windsurf/del/{id}', [EventimgController::class,'windsurfdel']);

    Route::get('/diving', [EventimgController::class,'diving']);
    Route::get('/diving/{id}', [EventimgController::class,'divingevent']);
    Route::get('/diving/edit/{id}', [EventimgController::class,'divingedit']);
    Route::post('/diving/update/{id}', [EventimgController::class,'divingupdate']);
    Route::post('/diving/del/{id}', [EventimgController::class,'divingdel']);

    Route::get('/create', [EventimgController::class,'create']);
    Route::post('/store', [EventimgController::class,'store']);

    Route::get('/edit/{id}', [EventimgController::class,'edit']);
    Route::post('/update/{id}', [EventimgController::class,'update']);

    Route::post('/del/{id}', [EventimgController::class,'del']);
    Route::delete('/delete_img/{img_id}', [EventimgController::class, 'delete_img']);
});


