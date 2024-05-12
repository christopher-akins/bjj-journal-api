<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return Auth::user()->id;
// });

// Route::get('/user', function (Request $request) {
//     return $_REQUEST;
// })->middleware('auth:sanctum');

// Route::get('/user', function (Request $request) {
//     return auth()->user();
// });

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');