<?php

use App\Http\Controllers\WorkTypeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
Route::get('/', function () {
    return view('home');
});

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/client/dashboard', function () {
    return view('client.dashboard');
});
Route::resource('types', WorkTypeController::class);
Route::resource('authors', AuthorController::class);
