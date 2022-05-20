<?php

use Illuminate\Support\Facades\Route;
//added below for about page
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\CommentController;
//added these two for about page
use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;

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

// Route::get('/', [PagesController::class, 'index']);
Route::get('/', [PagesController::class, 'index'])->name('index');

Route::resource('/blog', PostsController::class);
Route::resource('/about', AboutController::class);


Auth::routes();

    Route::get('/redirect', '\App\Http\Controllers\Auth\LoginController@redirectToProvider');

    Route::get('/callback', '\App\Http\Controllers\Auth\LoginController@handleProviderCallback');

// Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/about', [\App\Http\Controllers\AboutController::class, 'about'])->name('about');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');

Route::post('/blog/{post}/comments', [CommentController::class, 'storeComment']);
Route::delete('/comments/{comment}', [CommentController::class, 'destroy']);

// Google login
Route::get('login/google', [App\Http\Controllers\Auth\LoginController::class, 'redirectToGoogle'])->name('login.google');
Route::get('login/google/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleGoogleCallback']);
