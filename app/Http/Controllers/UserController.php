<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;


class UserController extends Controller
{
    //
    function queries(){
        $response = user::all();
        // $response = User::where('phone', '1234')->first();
        // $response = User::find(1);
        // $response = [$response];

        // $response = User::insert([
        //     'name'=>'soham',
        //     'email'=> 'soham@gmail.com',
        //     'phone'=>'8542658541',
        // ]);
        //     if($response){
        //         return "user data inserted sucessfull";
        //     }else{
        //         return "user data not inserted";
        //     }

        // $response = user::where('name','nikhil')->update(['phone'=>'4587521465']);
        // if($response){
        //     return "User Data Updated Succesfull";
        // }else{
        //     return "User Data Not Updated";
        // }

        //  $response = user::where('name', 'swapnil')->delete();
        // if($response){
        //     return "User Data Updated Succesfull";
        // }else{
        //     return "User Data Not Updated";
        // }

       
        return view('user', ['users'=>$response]);
    }
   
}
