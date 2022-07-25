<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Models\Post;
use App\Http\Controllers\CommentController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', [PostController::class,'index']);
Route::get('/login', [LoginController::class,'index']);
Route::post('/login', [LoginController::class,'store']);
Route::get('/add-post',[PostController::class,'add']);
Route::post('/add-post',[PostController::class,'store']);
Route::get('/post/{id}',[PostController::class,'show']);
Route::get('/edit/{id}',[PostController::class,'edit']);
Route::post('/edit/{id}',[PostController::class,'update']);
Route::post('/add-comment/{id}',[CommentController::class,'store']);
