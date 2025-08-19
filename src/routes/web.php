<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\Auth\LoginController;

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

Route::controller(ProductController::class)->group(function () {
    Route::get('/', 'index')->name('product.index');
    Route::get('/sell', 'listing')->name('product.listing')->middleware('auth');
    Route::post('/sell', 'store')->name('product.store')->middleware('auth');
    Route::get('/item/{id}', 'show')->name('product.show');
    Route::post('/item/{id}/like', 'like')->name('product.like')->middleware('auth');
    Route::post('/item/{id}/comment', 'comment')->name('comment.store')->middleware('auth');
});

Route::controller(UserController::class)->middleware('auth')->group(function () {
    Route::get('/mypage', 'profile')->name('user.profile');
    Route::get('/mypage/profile', 'edit')->name('user.edit');
    Route::post('/mypage/profile', 'update')->name('user.update');
});

Route::controller(PurchaseController::class)->middleware('auth')->group(function () {
    Route::get('/purchase/{id}', 'show')->name('purchase.show');
    Route::post('/purchase/{id}', 'store')->name('purchase.store');
});


Route::post('/login', [LoginController::class, 'login'])->name('login');