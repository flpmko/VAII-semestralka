<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\RentalsController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\UserController;

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

//HOME
Route::get('/', [RentalsController::class, 'getRentalsForHome'])->name('home-page');

//INVENTORY
Route::get('items', [ItemsController::class, 'index'])->name('items-page');
Route::get('item-new', [ItemsController::class, 'create'])->name('new-item-page');
Route::post('item-add', [ItemsController::class, 'store']);
Route::get('item-edit/{id}', [ItemsController::class, 'edit']);
Route::post('item-update/{id}', [ItemsController::class, 'update'])->name('item-update');
Route::get('item-delete/{id}', [ItemsController::class, 'destroy']);

//RENTALS
Route::get('rentals', [RentalsController::class, 'index'])->name('rentals-page');
Route::post('rental-return/{id}', [RentalsController::class, 'returnRental'])->name('rentals-return');
Route::get('rental-new', [RentalsController::class, 'create'])->name('new-rental-page');
Route::post('rental-add', [RentalsController::class, 'store'])->name('rental-add');

//HELP
Route::get('help', [ArticlesController::class, 'index'])->name('help-page');
Route::get('article-new', [ArticlesController::class, 'create'])->name('new-article-page');
Route::post('article-add', [ArticlesController::class, 'store']);
Route::get('article-edit/{id}', [ArticlesController::class, 'edit']);
Route::post('article-update/{id}', [ArticlesController::class, 'update'])->name('article-update');
Route::get('article-delete/{id}', [ArticlesController::class, 'destroy']);

//ACCOUNT
Route::view('/account','account')->name('account-page');
Route::get('account-edit/{id}', [UserController::class, 'edit']);
Route::post('account-update', [UserController::class, 'update'])->name('account-update');

require __DIR__.'/auth.php';