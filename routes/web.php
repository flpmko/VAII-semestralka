<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ItemsController;
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

Route::get('/', [RentalsController::class, 'getRentalsForHome'])->name('home-page');
Route::view('/help','help')->name('help-page');

Route::view('/account','account')->name('account-page');
Route::get('account-edit/{id}', [UserController::class, 'edit']);
Route::post('account-update', [UserController::class, 'update'])->name('account-update');

Route::get('rentals', [RentalsController::class, 'index'])->name('rentals-page');
Route::post('rental-return/{id}', [RentalsController::class, 'returnRental'])->name('rentals-return');
Route::get('rental-new', [RentalsController::class, 'create'])->name('new-rental-page');
Route::post('rental-add', [RentalsController::class, 'store'])->name('rental-add');

Route::get('items', [ItemsController::class, 'index'])->name('items-page');
Route::get('item-new', [ItemsController::class, 'create'])->name('new-item-page');
Route::post('item-add', [ItemsController::class, 'store']);
Route::get('item-edit/{id}', [ItemsController::class, 'edit']);
Route::post('item-update/{id}', [ItemsController::class, 'update'])->name('item-update');
Route::get('item-delete/{id}', [ItemsController::class, 'destroy']);

// Route::resource('/items', ItemsController::class)->name(ItemsController::index(), 'items-page');

require __DIR__.'/auth.php';