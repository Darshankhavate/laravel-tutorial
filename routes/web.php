<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use PHPUnit\Framework\Attributes\Group;
use App\Http\Middleware\AgeCheck;
use App\Http\Middleware\CountryCheck;

Route::get('/', function () {
    return view('welcome');
});

// Route::view('/home/user', 'home')->name('index');
// Route::get('/show', [UserController::class, 'show']);

// Route::get('show',[UserController::class,'show']);
// Route::get('add',[UserController::class,'add']);
// Route::get('delete',[UserController::class,'delete']);


// Route::controller(UserController::class)->group(function(){
//     Route::get('show','show');
//     Route::get('add','add');
//     Route::get('delete','delete');
//     Route::get('/about/{name}','about');

// });

// Route::view('/about','about');

// Route::view('home', 'home')->middleware('check1');

// Route::middleware('check')->group(function(){
//     Route::view('about', 'about');
//     Route::view('contact', 'about');
//     Route::view('view', 'about');
//     Route::view('list', 'about');

// });

Route::view('/home', 'home')->middleware(AgeCheck::class, CountryCheck::class);
Route::view('/about', 'about');
