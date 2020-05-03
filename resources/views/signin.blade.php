@extends('template')

@section('title', 'E-Folio :: Sign in')

@section('content')


<div class="container">
    <span>LOGIN</span>
    <form action="/loguser" method="POST">
        
        {{@csrf_field()}}
   
        <div class="first">
        <h2 style="background: #4776E6;">{{$msg ?? ''}}</h2>
        <div id="form"> 

        <div id="user">
        <label for='username'>E-MAIL</label>
        <input type="email" class="user" name="email"  placeholder=" Enter Email" required />
        </div>

        <div>
            <label for="password">PASSWORD</label>
        <input type="password" name="password" placeholder="Enter Password" required />
        </div>

        <div>
            <input type="checkbox" name="remember" > REMEMBER ME
        </div>

        <button type="submit" id="sub"><div ><i class="fa fa-arrow-right"></i></div></button>


        </div>
        </div>
    </form>
        <div class="second">
            <p>Don't Have an account?? </p><br>
            <div id="signup">
            <a  href="/user/register"> SIGN UP </a>
            </div>
        </div>
</div>



@endsection