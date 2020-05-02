<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Authenticate;
use App\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function log_user(Request $request){

            $this->validate($request, [
                'password' => 'required',
                'email' => 'required | email',
            ]);
        
        
        $password = $request->password;
        $email = $request->email;

        $check = User::where('email', $email)
                    ->get();
        //echo $check[0]->username; exit;
        if (count($check)>0){
            if (($check[0]->password) == $password){
               $id = session(['id', $check[0]->id]);
   
               return view('dashboard', ['session_id', $id]);
            }else {
                $msg = "Password Is not correct";

                return view('signin', ['errMsg'=> $msg]);
            }
        }else{
             $msg = "$email Is not correct";

                return view('signin', ['errMsg'=> $msg]);
        }


    }
}
