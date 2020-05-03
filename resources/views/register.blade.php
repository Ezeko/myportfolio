@extends('template')

@section('title', 'E-Folio :: Register Account')

@section('content')

<link rel="stylesheet" href="{{URL::asset('css/styles2.css') }}" >
<div class="container">
    <span>REGISTER</span>
    <form method="POST" action='/register/createuser'>
   
        <div class="first">
        <div id="form"> 
            {{$msg ?? ''}}
            {{@csrf_field()}}
        <div id="user">
        <label for='username'>YOUR NAME</label>
        <input type="text" class="user" name="name"  placeholder=" Enter Your name" required />
        </div>

        <div id="user">
        <label for='username'>USERNAME</label>
        <input type="text" class="user" name="username"  placeholder=" Enter Your Username" required />
        </div>

        <div id="user">
        <label for='username'>EMAIL</label>
        <input type="email" class="user" name="email"  placeholder=" Enter Email" required />
        </div>


        <div>
            <label for="password">PASSWORD</label>
        <input type="password" name="password" placeholder="Enter Password" required />
        </div>

        <div>
            <input type="checkbox" name="remember"  checked> AGREE TO TERMS AND CONDITIONS
        </div>

        <button type="submit" id="sub"><div ><i class="fa fa-arrow-right"></i></div></button>


        </div>
        </div>
    </form>
        <div class="second">
            <p>Already Have an account?? </p><br>
            <div id="signup">
            <a  href="/"> SIGN IN </a>
            </div>
        </div>
</div>



@endsection