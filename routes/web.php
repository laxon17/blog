<?php

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


Route::get('/', [App\Http\Controllers\PagesController::class, 'index']);

Route::get('/about', [App\Http\Controllers\PagesController::class, 'about']);

Route::get('/services', [App\Http\Controllers\PagesController::class, 'services']);

Route::resources(['posts' => App\Http\Controllers\PostsController::class]);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
