<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RentalsController;

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
Route::view('/sets','sets')->name('sets-page');

Route::view('/account','account')->name('account-page');
Route::get('account-edit/{id}', [UserController::class, 'edit']);
Route::post('account-update', [UserController::class, 'update'])->name('account-update');

Route::get('rentals', [RentalsController::class, 'rentals'])->name('rentals-page');
Route::post('rental-return/{id}', [RentalsController::class, 'setReturnDate'])->name('rentals-return');

Route::view('/item-new','item-new')->name('new-item-page');
Route::get('items', [ItemController::class, 'items'])->name('items-page');
Route::post('item-add', [ItemController::class, 'add']);
Route::get('item-edit/{id}', [ItemController::class, 'edit']);
Route::post('item-update', [ItemController::class, 'update'])->name('item-update');
Route::get('item-delete/{id}', [ItemController::class, 'delete']);

require __DIR__.'/auth.php';