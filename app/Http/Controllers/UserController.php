<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class UserController extends Controller
{
    //
    function login(Request $request){
        echo "Request Method is". $request->method();
        echo "<br>";
        echo "Request Method is". $request->path();
        echo "<br>";
        echo "Request url is". $request->url();
        echo "<br>";
        echo "Request name is". $request->input('name');
        echo "<br>";
        echo "Request name is". $request->name;
        echo "<br>";
        print_r($request->input());
        echo "<br>";
        print_r($request->collect());
        echo "<br>";

        if($request->isMethod('post')){
            echo "execute code for post request";
        }else{
            echo "excute code of other";
        }
        echo"<br>";
        if($request->is('user')){
            echo "execute code for post request";
        }else{
            echo "excute code of other";
        }
        echo "name is" . $request->ip();
        echo"<br>";
    }
   
}
