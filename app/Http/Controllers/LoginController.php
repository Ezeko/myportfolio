<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function log_user(Request $request){
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
                echo "<script>alert('Incorrect Password'); window.location='/'</script>";
            }
        }else{
            echo "<script>alert('$email is not registered'); window.location='/'</script>";
        }


    }
}
