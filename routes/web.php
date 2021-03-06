<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//POSTS ADMIN
Route::group(['prefix' => 'admin'], function (){ //adicionar middleware admin
    Route::resource('post',PostController::class)->except('index', 'show');
    Route::get('post', [PostController::class, 'indexAdmin'])->name('post.indexAdmin');
});

//CATEGORY ADMIN
Route::group(['prefix' => 'admin'], function (){ //adicionar middleware admin
    Route::resource('category',CategoryController::class);
});

//ADMIN INDEX
Route::get('home',[AdminController::class, 'index'])->prefix('admin');



//SITE (PUBLIC)
Route::get('/', [PageController::class, 'index'])->name('index');
Route::get('/{post}',[PageController::class, 'show'])->name('show')->prefix('post');
Route::get('about', [PageController::class, 'about'])->name('about');
Route::get('schedule', [PageController::class, 'schedule'])->name('schedule');
Route::get('announcers', [PageController::class, 'announcers'])->name('announcers');

