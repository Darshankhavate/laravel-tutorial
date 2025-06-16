<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use PHPUnit\Framework\Attributes\Group;
use Illuminate\Support\Facades\DB;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/user', [UserController::class, 'GetMethod']);
Route::view('/form', 'user');
Route::post('/user', [UserController::class, 'PostMethod']);
Route::put('/user', [UserController::class, 'PutMethod']);
Route::patch('/patch', [UserController::class, 'PatchMethod']);
Route::delete('/user', [UserController::class, 'DeleteMethod']);



