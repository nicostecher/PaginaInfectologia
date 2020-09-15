@extends('plantilla')

@section('main')

<link rel="stylesheet" href="/css/edicion.css">

<section class="contenido-principal">
  
        <h3>Editar un Docente</h3>
        <br>
        <form action="/editarDocente/{{$docentes->id}}" method="post" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="nombre">
          <label for="Nombre">Nombre:</label>
          <input type="text" name="nombre" value="{{$docentes->nombre}}">
          @error('nombre')
          <small class="error">{{$message}}</small>
            @enderror
          
            <br>
            <br>
          <label for="Nombre">Descripción:</label>
          <br>
          <textarea name="" id="" cols="50" rows="10" placeholder="{{$docentes->descripcion}}"></textarea>
          @error('descripcion')
          <small class="error">{{$message}}</small>
            @enderror
          </div>
          
          <div class="archivo">
            <label for="archivo"></label>
              <img src="/storage/{{$docentes->foto}}">
              <br>
              <br>
            <input type="file" name="foto" id="foto">
            @error('foto')
            <small class="error">{{$message}}</small>  
            @enderror
            <div class="boton">
              <button type="submit" class="btn btn-success" onclick="return confirm('Novedad Editada con exito!')">Guardar Cambios</button>
              </div>
          </div>

        </form>
        


      

</section>
    
@endsection