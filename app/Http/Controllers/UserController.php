<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // //
    // function getuser(){
    //     return "User Controller";
    // }

    // function getView(){
    //     return view('home');
    // }

    // function getViewDta($name){
    //     return view('getuser', ['name' =>$name]);
    // }

    // function adminLogin(){
    //     return view('admin.login');
    // }

    function about(){
        return view('about');
    }

    function home(){
        return view('home');
    }

//     function Userhome(){
//         $name = "Darshan";
//         $user = ['darshan', 'sammed', 'nikhil', 'sagar'];
//         return view('admin.home', ['name' => $name, 'user'=>$user]);
//     }
}
