<?php

use App\Http\Controllers\articleController;
use Illuminate\Support\Facades\Route;

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

Route::get('/article',[articleController::class,'index']);
Route::get('/article/{article_id}',[articleController::class,'show']);
Route::get('/article/create/post',[articleController::class,'create']);
Route::post('/article/create/post',[articleController::class, 'store']);
