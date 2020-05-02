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
        //echo $check; exit;
        //echo $check[0]->username; exit;
        if (count($check)>0){
            if (($check[0]->password) == $password){
               $id =  $check[0]->id;
               $user = $check[0]->name;
               $username = $check[0]->username;
               return redirect('/dashboard/' .$username);
              // return view('dashboard')->with( ['user' => $user]);
            }else {
                $msg = "Password Is not correct";

                return view('signin', ['errMsg'=> $msg]);
            }
        }else{
             $msg = "$email Is not correct";

                return view('signin', ['errMsg'=> $msg]);
        }


    }

    public function dashboard ($username)
    {
        $user = User::where('username', $username)
        ->get()[0]->name;
        return view('dashboard')->with(['user' => $user]);
    }
}
