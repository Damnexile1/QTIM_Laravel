<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', HomeController::class . '@index');

Route::get('/posts', PostController::class . '@index')->name('post.index');


Route::get('/posts/create', PostController::class . '@create')->name('post.create');
Route::post('/posts', PostController::class . '@store')->name('post.store');
Route::get('/posts/{post}', PostController::class . '@show')->name('post.show');
Route::get('/posts/{post}/edit', PostController::class . '@edit')->name('post.edit');
Route::patch('/posts/{post}', PostController::class . '@update')->name('post.update');
Route::delete('/posts/{post}', PostController::class . '@destroy')->name('post.delete');


Route::get('/posts/update', PostController::class . '@update');
Route::get('/posts/delete', PostController::class . '@delete');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
