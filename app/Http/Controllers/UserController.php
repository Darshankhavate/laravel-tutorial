<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function getuser(){
        return "User Controller";
    }

    function getView(){
        return view('home');
    }

    function getViewDta($name){
        return view('getuser', ['name' =>$name]);
    }

    function adminLogin(){
        return view('admin.login');
    }
}
