@extends('template')

@section('title', 'E-Folio :: Dashboard')

@section('content')
<div>Hello <b>{{$user}}</b>, welcome to e-folio</div>
id {{$session_id ?? ''}}

@endsection