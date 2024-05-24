<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', [ProductsController::class, 'index']);

// Route::get('/products/{id}', [ProductsController::class, 'show']);

// Route::get('/products/{id}', [ProductsController::class, 'show'])->where('id', '[0-9]+');

// Route::get('/products/{str}', [ProductsController::class, 'showString'])->where('str', '[a-z]+');

Route::get('/products/{id}/{str}', [ProductsController::class, 'showStringAndInt'])->where([
    'id', '[0-9]+',
    'str', '[a-zA-Z]+'
]);
