@extends('plantilla')

@section('main')

    <link rel="stylesheet" href="/css/cargar.css">
  
 
<section id="contenedor">

  <div class="titulo">
    <h3>Cargar una Noticia</h3>
  </div>

  <div class="contenido-carga">
    <div class="nombre">
      <form action="/index" method="post">
        {{ csrf_field() }}
        <label for="titulo">Titulo:</label>
        <input type="text" name="titulo" value="">
        @error('titulo')
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

        <div class="botones">
            <button type="submit" class="btn btn-success">Cargar</button>
            <button type="button" class="btn btn-danger">Borrar</button>
            <a href="/listadoNovedades"><button type="button" class="btn btn-info">Volver</button></a>
            </div>
           
        </form>
      </div>
  </section>


@endsection
