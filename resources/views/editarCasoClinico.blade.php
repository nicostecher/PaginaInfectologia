@extends('plantilla')

@section('main')

<link rel="stylesheet" href="/css/edicion.css">

<section class="contenido-principal">
  
        <h3>Editar un caso Clinico</h3>
        <br>
        <form action="/editarCasoClinico/{{$casos->id}}" method="post" enctype="multipart/form-data">
          {{ csrf_field() }}

          <div class="nombre">
          <label for="Nombre">Nombre:</label>
          <input type="text" name="nombre" value="{{$casos->nombre}}">
          @error('nombre')
          <small class="error">{{$message}}</small>
            @enderror
          </div>

          <div class="archivo">
            <label for="archivo"></label>
              
              <iframe src="/storage/upload/{{$casos->archivo}}" frameborder="0"></iframe>
              <br>
            <input type="file" name="archivo" id="archivo">
            @error('archivo')
            <small class="error">{{$message}}</small>  
            @enderror
            <div class="boton">
              <button type="submit" class="btn btn-success" onclick="return confirm('Novedad Editada con exito!')">Guardar Cambios</button>
              </div>
          
          </div>

        </form>
        


      

</section>
    
@endsection