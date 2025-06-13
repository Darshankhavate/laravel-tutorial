<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


 class UserController extends Controller
{
  // function show(){
  //   return to_route('index');
  // }

  function show(){
    return "Student list";
  }
  function add(){
    return "add new student";
  }
}
