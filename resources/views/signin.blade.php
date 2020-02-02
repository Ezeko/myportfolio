@extends('template')

@section('title', 'E-Folio :: Sign in')

@section('content')


<div class="container">
    <span>LOGIN</span>
    <form>
   
        <div class="first">
        <div id="form"> 

        <div id="user">
        <label for='username'>USERNAME</label>
        <input type="text" class="user" name="username"  placeholder=" Enter Username" required />
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
            <a  href=""> SIGN UP </a>
            </div>
        </div>
</div>



@endsection