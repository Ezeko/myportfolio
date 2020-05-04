@extends('template')

@section('title', 'E-Folio :: Dashboard')

@section('content')
<link rel="stylesheet" href="css/dashboard.css">

@if ($session_id)
<div id="nav">
    <nav>
        <ul>
            <li>
                <a href="{{'/'. $session_username}}">
                @if (isset($image))
                <img src="" alt="user image" height="50" width="50" >
                @else
                <i class="fa fa-user" ></i>
                @endif
                </a>
            </li>
            
            <div id="others">
            <li><a href="{{'/profile/'.$session_username}}"> Profile </a></li>
            <li><a href="{{'/add/'. $session_username}}"> Add Portfolio</li>
            <li><a href="{{route('logout')}}">logout</a></li>
            </div>
        </ul>
    </nav>
</div>

@endif

<div>Hello <b>{{$user}}</b>, welcome to e-folio. Add projects to your portfolio to get enlisted on your dashboard!</div>

@endsection