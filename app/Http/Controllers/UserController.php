<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


 class UserController extends Controller
{
  // function show(){
  //   return to_route('index');
  // }

  function show(){
    return "list of controller";
  }

  function add(){
    return "list of add student";
  }

  function delete(){
    return "list of student delete data";
  }

  function about($name){
    return $name;
  }
}
