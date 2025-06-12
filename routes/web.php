<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/home', function (){
//     return view('home');
// });

//Redirect from
// Route::redirect('/home', '/about');

// Route::get('/about', function (){
//     return view('about');
// });

//Pass Data with Route
// Route::get('/about/{name}', function ($name) {
//     return view('about', ['name' => $name]);
// });

// Route::get('/user', [UserController::class, 'getUser']);
// Route::get('/view', [UserController::class, 'getView']);
// Route::get('namedata/{name}', [UserController::class, 'getViewDta']);
// Route::get('/admin', [UserController::class, 'adminLogin']);

Route::get('/about', [UserController::class, 'about']);
// //Call View to Controller
// Route::get('/userabout/{name}', [UserController::class, 'about']);

//nested views
// Route::get('/userhome', [UserController::class, 'home']);


Route::get('/home', [UserController::class, 'home']);
