@extends('plantilla')

@section('main')

<section class="cargarNovedades">
        
    <h3>Cargar una Noticia</h3>
    <br>
    <form action="/index" method="post">
      {{ csrf_field() }}
      <div>
      <label for="titulo">Titulo</label>
      <input type="text" name="titulo" value="">
      @error('titulo')
      <small class="error">{{$message}}</small>
        @enderror
      </div>

      <div>
        <label for="descripcion">Descripción</label>
        <br>
        <textarea name="descripcion"  cols="30" rows="10" value=""></textarea>
        @error('descripcion')
        <small class="error">{{$message}}</small>
          @enderror
        <div>
          <input type="submit" value="Cargar">
          <input type="button" value="Borrar">
          </div>
      </div>

    </form>
  
    


  </section>
    
@endsection