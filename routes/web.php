<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});


// Route::view('formuser', 'formuser');
// Route::post('/fromuser',[UserController::class, 'addUser']);

Route::view('/urlgenrate', 'urlgenrate');
Route::view('/about', 'about');
Route::view('/user', 'about');
