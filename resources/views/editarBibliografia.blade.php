@extends('plantilla')

@section('main')

<link rel="stylesheet" href="/css/edicion.css">

<section class="contenido-principal">
  
        <h3>Editar una Bibliografía</h3>
        <br>
        <form action="/editarBibliografia/{{$bibliografia->id}}" method="post" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="nombre">
          <label for="titulo">Titulo:</label>
          <input type="text" name="titulo" value="{{$bibliografia->titulo}}">
          @error('titulo')
          <small class="error">{{$message}}</small>
            @enderror
          </div>

          <div class="archivo">
            <label for="documento"></label>
            <div>
              <iframe src="/storage/{{$bibliografia->documento}}" frameborder="0"></iframe>
              <br>
            <input type="file" name="documento" id="documento">
            @error('documento')
            <small class="error">{{$message}}</small>  
            @enderror
            <div>
              <div class="boton">
                <button type="submit" class="btn btn-success" onclick="return confirm('Novedad Editada con exito!')">Guardar Cambios</button>
                </div>
          </div>

        </form>
        


      

</section>
    
@endsection