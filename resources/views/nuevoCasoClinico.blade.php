@extends('plantilla')

@section('main')

<section class="cargarCasosClinicos">
        
    <h3>Cargar un Caso Clinico</h3>
    <br>
    <form action="/casosClinicos" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
      <div>
      <label for="nombre">Nombre:</label>
      <input type="text" name="nombre" value="">
      @error('nombre')
      <small class="error">{{$message}}</small>
        @enderror
      </div>

      <div>
        <label for="archivo"></label>
        <input type="file" name="archivo" id="archivo">
        @error('archivo')
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