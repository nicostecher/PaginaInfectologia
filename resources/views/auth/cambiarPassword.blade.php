@extends('plantilla')

<link rel="stylesheet" href="/css/cambiarPassword.css">

@section('main')

@if(Session::has("succes"))
<div class="p-3 mb-2 bg-success text-white">
{{Session::get("succes")}}
</div>
@endif


@if(Session::has("failed"))
<div class="p-3 mb-2 bg-danger text-white">
    {{Session::get("failed")}}
</div>
    
@endif

    <div class="container">
        <form action="/cambiarPassword" method="post">
        @csrf
        <label for="contrasena">Contraseña Actual</label>
        <input type="password" name="passwordActual">
        @error('passwordActual')
        <small class="error">{{$message}}</small> 
        @enderror

        <label for="contrasena">Nueva Contraseña </label>
        <input type="password" name="password">
        @error('password')
        <small class="error">{{$message}}</small> 
        @enderror

        <label for="password"> Confirmar Contraseña</label>
        <input type="password" name="password_confirmation">
        @error('password')
        <small class="error">{{$message}}</small>
        @enderror
        <button type="submit" class="btn btn-primary">Cambiar Contraseña</button>
        </form>
    </div>


@endsection