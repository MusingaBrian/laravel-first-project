<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Route Return - String
Route::get('/string', function () {
    return 'Hello Laravel';
});

//Route Return - Array
Route::get('/array', function () {
    return ['HTML', 'CSS', 'PHP'];
});

//Route Return - JSON
Route::get('/array', function () {
    return response()->json([
        'name' => 'Brian',
        'Framework' => "Laravel"
    ]);
});

//Route Return - Function
Route::get('/function', function () {
    return redirect('/');
});
