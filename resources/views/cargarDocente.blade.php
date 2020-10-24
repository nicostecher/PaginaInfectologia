@extends('plantilla')
@section('main')

<link rel="stylesheet" href="/css/cargar.css">


<section id="contenedor" class="contenedor-docente">

<div class="titulo">
<h3>Cargar un nuevo Docente</h3>
</div>

<div class="contenido-carga" id="contenido-archivos">
<div class="nombre">
  <form action="/cuerpoDocente" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" value="">
    @error('nombre')
    <small class="error">{{$message}}</small>
      @enderror
    </div>

    
    <div class="descripcion">
      <label class="titulo-descripcion"  for="descripcion">Descripción:</label>
      <textarea name="descripcion"  cols="80" rows="10" value=""></textarea>
      @error('descripcion')
      <small class="error">{{$message}}</small>
        @enderror
    </div>

    <div class="foto">
      <label for="foto">Foto:</label>
      <input type="file" name="foto" id="foto">
      @error('foto')
      <small class="error">{{$message}}</small>  
      @enderror
    </div>

    <div class="botones" id="botones-archivos">
        <button type="submit" class="btn btn-success">Cargar</button>
        <button type="reset" class="btn btn-danger">Borrar</button>
        <a href="/listadoDocentes"><button type="button" class="btn btn-info">Volver</button></a>
        </div>
    </form>
  </div>
</section>


@endsection