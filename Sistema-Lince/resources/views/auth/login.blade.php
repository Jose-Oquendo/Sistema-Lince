@extends('layout/index')
@section('title', 'Ingreso - Lince')
@section('content')
    <div class="row">
        <div class="col-md-7 m-3 p-5 bg-light">
            <h2>Ingreso</h2>
            @error('message')
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    <p>{{ $message }}</p>
                </div>
            @enderror
            <form method="post">
                @csrf
                <label class="form-label" for="email">Correo:</label>
                <input type="email" class="form-control" name="email" placeholder="@correo" required>

                <label class="form-label" for="password">Contraseña:</label> 
                <input type="password" class="form-control" name="password" placeholder="******" required>

                <input type="submit" class="btn btn-secondary my-3" value="Ingresar">
                <a class="" href="#">Olvidaste tu contraseña?</a>
            </form>
        </div>
        <div class="col-md-4 m-3 p-5 bg-light">
            <h2>Registro</h2>
            <a class="btn btn-secondary my-3" href="{{ route('register.index') }}">Registrarse</a>
        </div>
    </div> 
@endsection 