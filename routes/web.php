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

Route::view('/', 'home')->name('home-page');
Route::view('/items','items')->name('items-page');
Route::view('/rentals','rentals')->name('rentals-page');
Route::view('/sets','sets')->name('sets-page');
Route::view('/account','account')->name('account-page');