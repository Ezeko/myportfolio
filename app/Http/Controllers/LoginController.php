<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Authenticate;
use App\User;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
            if (password_verify($password, $check[0]->password)){
               $id =  $check[0]->id;
               $user = $check[0]->name;
               $username = $check[0]->username;
               Session()->put(['id' => $id, 'username' => $username]);
            
               return redirect('/' .$username);
              // return view('dashboard')->with( ['user' => $user]);
            }else {
                $msg = "Password Is not correct";

                return view('signin', ['errMsg'=> $msg, 'email' => $email]);
            }
        }else{
             $msg = "$email Is not correct";

                return view('signin', ['errMsg'=> $msg]);
        }


    }

    public function dashboard ($username)
    {
        $user = '';
        $findUser = User::where('username', $username)
        ->get();
        if (count($findUser) > 0 ){
            $user = $findUser[0]->name;
            $session_id = Session()->get('id');
            $session_username = Session()->get('username');
            return view('dashboard')->with(
                [
                'user' => $user, 
                'session_id' => $session_id,
                'username' => $username,
                'session_username' => $session_username
                ]
            );
        }
        else{
            echo "<script>alert( '$username is not a valid user'); window.location='/';</script>";
    
        }

    }

    //logout 
    public function logout ()
    {
        Session()->flush();
        return redirect('/');

    }
}
