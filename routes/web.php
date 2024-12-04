<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BookController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [BookController::class, 'index'])->name('books.index');
Route::get('books/{id}/detail', [BookController::class, 'detail'])->name('books.detail');
Route::get('books/create',[BookController::class, 'create'])->name('books.create');

Route::post('books', [BookController::class, 'store'])->name('books.store');
