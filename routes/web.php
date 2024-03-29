<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\OrderController;
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

Route::get('/', [IndexController::class, 'index'])->name('main');
Route::get('/services', [IndexController::class, 'services']);
Route::get('/contacts', [IndexController::class, 'contacts']);
Route::get('/blog', [BlogController::class, 'list']);
Route::get('/blog/{slug}', [BlogController::class, 'item']);
Route::get('/order', [OrderController::class, 'showForm']);
Route::get('/ordering', [OrderController::class, 'ordering']);

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
