<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
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
    return view('home');
});

Route::get('/user', [UserController::class, 'getDataUser']);
Route::get('/user/{user:id}', [UserController::class, 'show']);

Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{slug:id}', [PostController::class, 'show']);

Route::get('/posts/user/{userId}', [PostController::class, 'showPostsByUser']);

Route::get('/post/tanggal/{date}', [PostController::class, 'showPostsByDate']);

Route::get('/posts/{postId}/comments', [PostController::class, 'showComments']);

Route::get('/posts/kesehatan/{slug:id}', [PostController::class, 'showPostsByCategory']);
