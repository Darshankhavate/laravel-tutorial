<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use PHPUnit\Framework\Attributes\Group;


Route::get('/', function () {
    return view('welcome');
});
