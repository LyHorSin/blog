<?php

use App\Http\Controllers\CommentsController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\RegisterController;
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

// Post Route
Route::get('/', [PostsController::class, 'show']);
Route::get('/posts/{post}', [PostsController::class, 'showPost']);
Route::get('/posts/create/post', [PostsController::class, 'create']);
Route::post('/posts', [PostsController::class, 'store']);

// Comment Route
Route::get('/comments/create',[CommentsController::class, 'create']);
Route::post('/comments/{id}',[CommentsController::class, 'store']);


Route::get('/register/create',[RegisterController::class, 'create']);
Route::post('/register',[RegisterController::class, 'store']);