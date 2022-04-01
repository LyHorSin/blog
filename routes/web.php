<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Posts\PostsController;
use App\Http\Controllers\Auths\LoginController;
use App\Http\Controllers\Auths\ProfileController;
use App\Http\Controllers\Auths\RegisterController;
use App\Http\Controllers\Comments\CommentsController;
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

// Register User
Route::get('/register/create',[RegisterController::class, 'create']);
Route::post('/register',[RegisterController::class, 'store']);

// Login User
Route::get('/login/create',[LoginController::class, 'create']);
Route::post('/login',[LoginController::class, 'store']);

// Profile 
Route::get('/profile',[ProfileController::class, 'show']);