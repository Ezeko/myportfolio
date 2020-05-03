@extends('template')

@section('title', 'E-Folio :: Dashboard')

@section('content')
<div>Hello <b>{{$user}}</b>, welcome to e-folio</div>
@if ($session_id)
id {{$session_id}}
<a href="{{route('logout')}}">logout</a>
@endif

@endsection