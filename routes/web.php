<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::resource('book', BookController::class);
Route::get('/author', [AuthorController::class, 'index'])->name('author.index');
