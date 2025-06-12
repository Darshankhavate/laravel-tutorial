<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


 class UserController extends Controller
{
   public function addUser(Request $request){
    echo "user name is:- $request->name";
    echo "<br>";
    echo "user email is:- $request->email";
    echo "<br>";
    echo "user city:- $request->city";
   }

}
