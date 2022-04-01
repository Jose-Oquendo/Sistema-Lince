@extends('layout/index')
@section('title', 'Mi cuenta - Lince')
@section('content')
    <h1>Hola usuario!</h1>
    @if(auth()->check())
        <h2>{{ auth()->user()->name }}</h2>
    @endif
    <a class="btn btn-primary my-3" href="{{ route('login.destroy') }}">salir</a>

@endsection 