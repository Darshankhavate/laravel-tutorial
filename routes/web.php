<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

// Route::view('/home/user', 'home')->name('index');
// Route::get('/show', [UserController::class, 'show']);

Route::view('/student/home', 'home');
Route::get('/student/show', [UserController::class,'show']);
Route::get('/student/add',[UserController::class, 'add']);

Route::prefix('student')->group(function(){
    Route::view('/home', 'home');
    Route::get('/show', [UserController::class,'show']);
    Route::get('/add',[UserController::class, 'add']);

});




