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

// Route::get('/', [HomeController::class, 'blog'])->name('user.index');
Route::get('/', [HomeController::class, 'category']);

Route::get('/register', [UserController::class, 'signup']);
Route::post('/register', [UserController::class, 'register'])->name('user.register');
Route::get ('login', [UserController::class, 'signin'])->name('user.signin');
Route::post('login', [UserController::class, 'login'])->name('user.login');

Route::get('/post', [HomeController::class, 'post'])->name('user.post');
Route::post('/post', [HomeController::class, 'post']);
