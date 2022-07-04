<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\HtmlController;
use App\Http\Controllers\PresidentsController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\EventimgController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\ClassesController;
use App\Http\Controllers\PersonalCenterController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\JoinController;
use App\Http\Controllers\IndexImgController;
use App\Http\Controllers\ExcelExportController;
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
// Route::get('/', function () {
//     return view('welcome');
// });
// ------------------------------

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth','power'])->name('dashboard');

require __DIR__.'/auth.php';


Route::get('/', [IndexController::class,'index']);

Route::prefix('/people')->group(function () {
    Route::get('/{id}', [PeopleController::class,'index']);

    Route::post('/del/{id}', [PeopleController::class,'del']);
});

//excel export
Route::get('/excelexportsignlist/{id}', [ExcelExportController::class,'exportsignlist']);

// 不確定是否正確
Route::get('/about',[HtmlController::class,'about']);
Route::get('/personal-center',[PersonalCenterController::class,'index']);
Route::post('/personal-center/update/{id}', [PersonalCenterController::class,'update']);


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
    Route::delete('/delete_video/{video_id}', [EventController::class, 'delete_img']);
});

// 前台活動照片
Route::get('/album',[EventimgController::class,'album']);
// 活動照片內頁
Route::get('/photo/{id}', [EventimgController::class,'photo']);
// Route::get('/photo_swimming', [EventimgController::class,'photo_swimming']);
// Route::get('/photo_windsurfboard', [EventimgController::class,'photo_windsurfboard']);
// Route::get('/photo_lifesaving', [EventimgController::class,'photo_lifesaving']);
// Route::get('/photo_sup', [EventimgController::class,'photo_sup']);

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

    Route::get('/sup', [EventimgController::class,'sup']);
    Route::get('/sup/{id}', [EventimgController::class,'supevent']);
    Route::get('/sup/edit/{id}', [EventimgController::class,'supedit']);
    Route::post('/sup/update/{id}', [EventimgController::class,'supupdate']);
    Route::post('/sup/del/{id}', [EventimgController::class,'supdel']);

    Route::get('/swimming', [EventimgController::class,'swimming']);
    Route::get('/swimming/{id}', [EventimgController::class,'swimmingevent']);
    Route::get('/swimming/edit/{id}', [EventimgController::class,'swimmingedit']);
    Route::post('/swimming/update/{id}', [EventimgController::class,'swimmingupdate']);
    Route::post('/swimming/del/{id}', [EventimgController::class,'swimmingdel']);

    Route::get('/lifesaving', [EventimgController::class,'lifesaving']);
    Route::get('/lifesaving/{id}', [EventimgController::class,'lifesavingevent']);
    Route::get('/lifesaving/edit/{id}', [EventimgController::class,'lifesavingedit']);
    Route::post('/lifesaving/update/{id}', [EventimgController::class,'lifesavingupdate']);
    Route::post('/lifesaving/del/{id}', [EventimgController::class,'lifesavingdel']);

    Route::get('/other', [EventimgController::class,'other']);
    Route::get('/other/{id}', [EventimgController::class,'otherevent']);
    Route::get('/other/edit/{id}', [EventimgController::class,'otheredit']);
    Route::post('/other/update/{id}', [EventimgController::class,'otherupdate']);
    Route::post('/other/del/{id}', [EventimgController::class,'otherdel']);

    Route::get('/create', [EventimgController::class,'create']);
    Route::post('/store', [EventimgController::class,'store']);

    Route::delete('/delete_img/{img_id}', [EventimgController::class, 'delete_img']);
});

Route::prefix('/account')->group(function () {
    Route::get('/', [AccountController::class,'index']);

    Route::get('/create', [AccountController::class,'create']);
    Route::post('/store', [AccountController::class,'store']);

    Route::get('/edit/{id}', [AccountController::class,'edit']);
    Route::post('/update/{id}', [AccountController::class,'update']);

    Route::delete('/del/{id}', [AccountController::class,'del']);
});


Route::post('/signup1/{id}', [SignupController::class,'signup1']);
Route::post('/signup2/{id}', [SignupController::class,'signup2']);
Route::post('/signup3', [SignupController::class,'signup3']);
Route::get('/signup4/{id}', [SignupController::class,'signup4']);

Route::get('/classes', [ClassesController::class,'classes']);
Route::post('/changeclasses/{id}', [ClassesController::class,'changeclass']);


Route::get('/createAccount', [ClientController::class,'createAccount']);
Route::post('/createAccount/store', [ClientController::class,'store']);
// Route::post('/account/login', [ClientController::class,'login']);

Route::get('/organization', [HtmlController::class,'organ']);
Route::get('/Surf-Rescue', [HtmlController::class,'rescue']);


Route::get('/news', [NewsController::class,'news']);
Route::get('/event/{id}', [NewsController::class,'news_to_event']);

Route::prefix('/joinlist')->group(function () {
    Route::get('/', [JoinController::class,'index']);
    Route::get('/joinlist/{id}', [JoinController::class,'joinlist']);

    Route::get('/joinlist/addpeople/{id}', [JoinController::class,'addpeople']);
    Route::post('/joinlist/addpeople/{id}/addpeoplestore', [JoinController::class,'addpeoplestore']);

    Route::get('/edit/{id}', [JoinController::class,'edit']);
    Route::post('/update/{id}', [JoinController::class,'update']);

    Route::post('/del/{id}', [JoinController::class,'del']);
});

Route::prefix('/indeximg')->group(function () {
    Route::get('/', [IndexImgController::class,'index']);

    Route::get('/create', [IndexImgController::class,'create']);
    Route::post('/update/windsurf', [IndexImgController::class,'windsurfupdate']);

    Route::get('/edit/{id}', [IndexImgController::class,'edit']);
    Route::post('/update/{id}', [IndexImgController::class,'update']);

    Route::delete('/del/{id}', [IndexImgController::class,'del']);
});
