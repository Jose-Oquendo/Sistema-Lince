@extends('layout/main')
@section('content')
    <h1>Hola administrador {{ auth()->user()->email }}<h1>    
@endsection