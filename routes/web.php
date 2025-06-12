<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});


Route::view('/userform', 'userform');
Route::post('/userform', [UserController::class, 'addUser']);