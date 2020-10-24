@extends('plantilla')
@section('main')

<link rel="stylesheet" href="/css/cargar.css">
<section id="contenedor">

<div class="titulo">
<h3>Cargar un Sitio</h3>
</div>

<div class="contenido-carga" id="contenido-archivos">
<div class="nombre">
  <form action="/sitiosDeInteres" method="post">
    {{ csrf_field() }}
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" value="">
    @error('nombre')
    <small class="error">{{$message}}</small>
      @enderror
    </div>

    <div class="links">
      <label for="links">Link:</label>
      <input type="text" name="links" id="links">
      @error('link')
      <small class="error">{{$message}}</small>  
      @enderror
    </div>

    <div class="botones" id="botones-archivos">
        <button type="submit" class="btn btn-success">Cargar</button>
        <button type="reset" class="btn btn-danger">Borrar</button>
        <a href="/listadoSitios"><button type="button" class="btn btn-info">Volver</button></a>
        </div>
    </form>
  </div>
</section>


@endsection
