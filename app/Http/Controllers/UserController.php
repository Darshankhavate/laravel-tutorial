<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    function GetMethod(){
        return "Get Route Method";
    }

    function PostMethod(){
        return "Post Route Method";
    }

    function PutMethod(){
        return "Put Route Method";
    }

    function PatchMethod(){
        return "Patch Route Method";
    }

    function DeleteMethod(){
        return "Delete Route Method";
    }
}
