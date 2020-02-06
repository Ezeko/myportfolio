<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    function registerPage(){
        return view('register');
    }

    function create_user(Request $request){
        $user = new User();
        $user->email = $request->email;
        $user->name = $request->name;
        $user->username = $request->username;
        $user->password = $request->password;

        $save = $user->save();

        if(!$save){

            $msg = "Something Went Wrong";

            return view('register', ['errMsg'=> $msg]);

        }
        else{
            return redirect('/');
        }
    }
}
