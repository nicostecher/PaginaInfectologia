@extends('plantilla')
@section('main')

<link rel="stylesheet" href="/css/cargar.css">
<section id="contenedor">

<div class="titulo">
<h3>Cargar un Cronograma</h3>
</div>

<div class="contenido-carga" id="contenido-archivos">
<div class="nombre">
  <form action="/cronograma" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" value="">
    @error('nombre')
    <small class="error">{{$message}}</small>
      @enderror
    </div>

    <div class="archivo">
      <label for="archivo"></label>
      <input type="file" name="archivo" id="archivo">
      @error('archivo')
      <small class="error">{{$message}}</small>  
      @enderror
    </div>

    <div class="botones" id="botones-archivos">
        <button type="submit" class="btn btn-success">Cargar</button>
        <button type="reset" class="btn btn-danger">Borrar</button>
        <a href="/listadoCronogramas"><button type="button" class="btn btn-info">Volver</button></a>
        </div>
    </form>
  </div>
</section>


@endsection
