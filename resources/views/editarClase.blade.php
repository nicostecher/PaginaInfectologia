@extends('plantilla')

@section('main')

<link rel="stylesheet" href="/css/edicion.css">

<section class="contenido-principal">
  
        <h3>Editar una clase</h3>
        <br>
        <form action="/editarClase/{{$clases->id}}" method="post" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="nombre">
          <label for="Nombre">Nombre:</label>
          <input type="text" name="nombre" value="{{$clases->nombre}}">
          @error('nombre')
          <small class="error">{{$message}}</small>
            @enderror
          </div>
          <br>

          <div class="archivo">
            <label for="archivo"></label>
              <iframe src="/storage/upload/{{$clases->archivo}}" frameborder="0"></iframe>
              <br>
              <br>
            <input type="file" name="archivo" id="archivo">
            @error('archivo')
            <small class="error">{{$message}}</small>  
            @enderror
            <div>
              <br>
              <div class="boton">
                <button type="submit" class="btn btn-success" onclick="return confirm('Novedad Editada con exito!')">Guardar Cambios</button>
                </div>
              </div>
          </div>
          <br>

        </form>
        


      

</section>
    
@endsection