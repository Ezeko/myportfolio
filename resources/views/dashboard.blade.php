@extends('template')

@section('title', 'E-Folio :: Dashboard')

@section('content')

@if ($session_id)
<div id="nav">
    <nav>
        <ul>
            <li>image</li>
            <li><a href="/profile"> Profile </a>
            <li><a href="/add"> Add Portfolio</li>
            <li><a href="{{route('logout')}}">logout</a></li>
        </ul>
    </nav>
</div>

@endif

<div>Hello <b>{{$user}}</b>, welcome to e-folio</div>

@endsection