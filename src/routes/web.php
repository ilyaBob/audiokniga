<?php

use Domain\Book\BookController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hi', [BookController::class, 'index']);

Route::get('/admin', function () {
    return view('admin.main');
});

Route::as('admin.')->group(function () {
    Route::resource('admin/books', BookController::class);
});
