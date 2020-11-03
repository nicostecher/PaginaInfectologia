@extends('plantilla')
@section('main')

<link rel="stylesheet" href="/css/cargar.css">
<section id="contenedor">

<div class="titulo">
<h3>Cargar una Bibliografía</h3>
</div>

<div class="contenido-carga" id="contenido-archivos">
<div class="nombre">
  <form action="/bibliografia" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <label for="titulo">Titulo</label>
    <input type="text" name="titulo" id="titulo" value="">
    @error('titulo')
    <small class="error">{{$message}}</small>
      @enderror
    </div>

    <div class="archivo">
      <label for="documento"></label>
      <input type="file" name="documento" id="documento">
      @error('documento')
      <small class="error">{{$message}}</small>  
      @enderror
    </div>

    <div class="botones" id="botones-archivos">
        <button type="submit" class="btn btn-success">Cargar</button>
        <button type="reset" class="btn btn-danger">Borrar</button>
        <a href="/listadoBibliografias"><button type="button" class="btn btn-info">Volver</button></a>
        </div>
    </form>
  </div>
</section>


@endsection
