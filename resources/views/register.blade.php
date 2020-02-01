@extends('template')

@section('title', 'E-Folio :: Register Account')

@section('content')


<div class="container">
    <form>
   
        <div class="first">
        <div id="form"> 
        <div>
            <label for='username'>USERNAME</label>
        <input type="text" name="username" placeholder="Enter Username" required />
        </div>
        <div>
            <label for="password">PASSWORD</label>
        <input type="password" name="password" placeholder="Enter Password" required />
        </div>
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