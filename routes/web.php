<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use PHPUnit\Framework\Attributes\Group;



Route::get('/', function () {
    return view('welcome');
});

// Route::get('/users', [UserController::class,'users']);
Route::view('/formuser','formuser');
Route::POST('/formuser', [UserController::class, 'formuser']);

