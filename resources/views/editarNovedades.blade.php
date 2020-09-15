@extends('plantilla')

@section('main')

<link rel="stylesheet" href="/css/edicion.css">

<section class="contenido-principal">
    
    <h3>Editar una Noticia</h3>
    <br>
    <form action="/editarNovedades/{{$novedades->id}}" method="post" >
      {{ csrf_field() }}
     
      <div class="nombre">
      <label for="titulo">Titulo</label>
      <input type="text" name="titulo" value="{{$novedades->titulo}}">
      @error('titulo')
      <small class="error">{{$message}}</small>
        @enderror
      </div>

      <div class="archivo">
        <label for="descripcion">Contenido:</label>
        <div>
    
        <textarea class="contenido" name="descripcion" cols="100" rows="10" >{{$novedades->descripcion}}</textarea>
        @error('descripcion')
        <small class="error">{{$message}}</small>  
        @enderror
        <div class="boton">
          <button type="submit" class="btn btn-success" onclick="return confirm('Novedad Editada con exito!')">Guardar Cambios</button>
          </div>
         

      </div>

    </form>
    


  

</section>
    
@endsection