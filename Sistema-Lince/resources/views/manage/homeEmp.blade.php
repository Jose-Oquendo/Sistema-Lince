@extends('layout/main')
@section('content')
    <h1>Hola empleado {{ auth()->user() }}</h1>
    
@endsection