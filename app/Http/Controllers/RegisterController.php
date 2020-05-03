<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    
   public function registerPage(){
        return view('register');
    }

    public function create_user(Request $request){

        $username = $request->username;
        $email = $request->email;

        $check = User::where('email', $email)
                    ->get();
        //echo $check[0]->username; exit;
        if (count($check)>0){
            
            $msg = "Email Already Registered";

            return view('register', ['errMsg'=> $msg]);

            exit;

        }
        $check = User::where('username', $username)
        ->get();
                if (count($check)>0){

                $msg = "Username Already Registered";

                return view('register', ['errMsg'=> $msg]);

                exit;

                }
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
