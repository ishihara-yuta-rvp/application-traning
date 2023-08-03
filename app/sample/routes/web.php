<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/books', 'App\Http\Controllers\BookController@index');

///ブレード基礎
Route::get('/blade', [App\Http\Controllers\BladeController::class, 'input']);
///ブレード基礎
Route::post('/blade', [App\Http\Controllers\BladeController::class, 'output']);

///Controller基礎
Route::get('/vc', [App\Http\Controllers\VcController::class, 'input']);
///Controller基礎
Route::post('/vc', [App\Http\Controllers\VcController::class, 'output']);

///MVC基礎
Route::get('/mvc', [App\Http\Controllers\MvcController::class, 'input']);
///MVC基礎
Route::post('/mvc', [App\Http\Controllers\MvcController::class, 'output']);

///MVC基礎
Route::get('/comprehensive', [App\Http\Controllers\MvcController::class, 'input']);
///MVC基礎
Route::post('/mvc', [App\Http\Controllers\MvcController::class, 'output']);

//総合課題
Route::group(['prefix' => 'comprehensive', 'as' => 'comprehensive.'], function () {
    ///ログインページ
    Route::get('/', [App\Http\Controllers\LoginController::class, 'index']);
    //home 勤怠入力画面
    Route::post('/login', [App\Http\Controllers\LoginController::class, 'login']);

    //一覧画面
    Route::get('/work', [App\Http\Controllers\WorkController::class, 'show']);
    //勤務登録
    Route::post('/work', [App\Http\Controllers\WorkController::class, 'create']);
});