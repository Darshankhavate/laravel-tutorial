<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


 class UserController extends Controller
{
   public function addUser(Request $request)
{
    $request->validate([
        'name' => 'required|min:3|max:10',
        'email' => 'required|email',
        'city' => 'required |uppsercase',
        'language' => 'required',
    ],[
      'name.required'=>'User name can not be empty',
      'name.min'=>"User name have to be at least 3 char",
      'name.max'=>'user name have to maximum 15 char allow',
      'email.required'=>'User E-mail most require',
      'name.city'=>'User city is option'

    ]);
     return $request;
   }

}
