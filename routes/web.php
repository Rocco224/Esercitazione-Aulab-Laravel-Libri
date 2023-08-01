<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;

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

// Route::resource('books', \App\Http\Controllers\BookController::class)->middleware('auth', ['exclude' => ['show']]);
Route::get('home', [HomeController::class, 'home'])->name('home');

Route::get('books-list', [BookController::class, 'books'])->name('books.list');
Route::get('books-list/{id}', [BookController::class, 'book'])->name('book');

Route::middleware('auth')->group(function () {
    Route::resource('books', BookController::class);
});

