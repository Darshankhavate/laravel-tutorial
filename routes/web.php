<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use PHPUnit\Framework\Attributes\Group;
use Illuminate\Support\Facades\DB;



Route::get('/', function () {
    return view('welcome');
});

// Route::post('/form', [UserController::class, 'login']);
// Route::view('/user','user');

Route::view('login','login');
Route::view('profile', 'profile');
Route::post('/login', [UserController::class, 'login']);
Route::get('/logout', [UserController::class, 'logout']);


