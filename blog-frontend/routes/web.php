<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

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

Route::get('/', [HomeController::class, 'CategoriesAndPosts']);
Route::get('/post/{id}', [HomeController::class, 'post'])->name('post');
Route::post('/post/{id}', [HomeController::class, 'createComment'])->name('create.comment');

Route::get('/register', [UserController::class, 'signup'])->name('user.signup');
Route::post('/register', [UserController::class, 'register'])->name('user.register');
Route::get ('login', [UserController::class, 'signin'])->name('user.signin');
Route::post('login', [UserController::class, 'login'])->name('user.login');

