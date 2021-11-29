<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaravelCrud;
use App\Http\Controllers\ItemController;

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
// Route::view('/items','items')->name('items-page');
Route::view('/rentals','rentals')->name('rentals-page');
Route::view('/sets','sets')->name('sets-page');
Route::view('/account','account')->name('account-page');
Route::view('/new-item','new-item')->name('new-item-page');

Route::get('items', [ItemController::class, 'items'])->name('items-page');
Route::post('add', [ItemController::class, 'add']);
Route::get('edit/{id}', [ItemController::class, 'edit']);
Route::post('update', [ItemController::class, 'update'])->name('update');

Route::get('crud', [LaravelCrud::class, 'index']);
// Route::post('add', [LaravelCrud::class, 'add']);
// Route::get('edit/{id}', [LaravelCrud::class, 'edit']);
// Route::post('update', [LaravelCrud::class, 'update'])->name('update');
Route::get('delete/{id}', [LaravelCrud::class, 'delete']);

require __DIR__.'/auth.php';