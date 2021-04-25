<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;

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

Route::get('posts/{id}',[PostsController::class,'getPost']);
Route::get('posts',[PostsController::class,'getAllPosts']);

Route::get('postsdatabase/{id}',[PostsController::class,'getPostDatabase']);
Route::get('postsdatabase',[PostsController::class,'getAllPostsDatabase']);
