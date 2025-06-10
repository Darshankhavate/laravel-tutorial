<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

// Route::view('/home','home');
Route::get('/about/{name}', function ($name){
    echo  "$name";
    return view('about',['name' =>$name]);
});
