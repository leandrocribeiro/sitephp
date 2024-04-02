<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::resource('/books',BookController::class);

//Route::get('/books', [BookController::class, 'index']);
//Route::get('/books/create', [BookController::class, 'create']);
//Route::get('/books/{id}', [BookController::class, 'show']);






