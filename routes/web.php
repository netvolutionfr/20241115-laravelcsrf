<?php

use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/form', [UsersController::class, 'create']);
Route::post('/form', [UsersController::class, 'store']);
