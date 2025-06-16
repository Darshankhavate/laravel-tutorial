<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
use RangeException;


 class UserController extends Controller
{
  function studentUser(){
    $data =new \App\Models\Student;
    echo $data->dumfun();
    $students= \App\Models\Student::all();
      return view('home', ['data'=>$students]);
    
  }
  //   public  function formuser(Request $request){
  //     echo"$request->name". "<br>";
  //     echo"$request->email". "<br>";
  //     echo"$request->phone". "<br>";
  //   }
}