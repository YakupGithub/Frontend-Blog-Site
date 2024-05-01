<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;

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

Route::get('/', [HomeController::class, 'CategoriesAndPosts'])->name('home');
Route::get('/post/{slug}', [PostController::class, 'post'])->name('post');
Route::post('/post/{slug}', [PostController::class, 'createComment'])->name('create.comment');
Route::get('/kategori/{slug}', [PostController::class, 'category'])->name('category');
Route::get('/register', [UserController::class, 'signup'])->name('user.signup');
Route::post('/register', [UserController::class, 'register'])->name('user.register');
Route::get ('/login', [UserController::class, 'signin'])->name('user.signin');
Route::post('/login', [UserController::class, 'login'])->name('user.login');
Route::get('/logout', [UserController::class, 'logout']);
Route::get('/profil', [UserController::class, 'user'])->name('user.edit');
Route::put('/profil', [UserController::class, 'update'])->name('user.update');
