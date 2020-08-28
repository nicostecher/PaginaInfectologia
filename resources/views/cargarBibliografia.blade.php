@extends("plantilla");


@section('main')


<section class="cargarCronograma">
        
    <h3>Cargar una Bibliografía</h3>
    <br>
    <form action="/cargarBibliografia" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
      <div>
      <label for="titulo">Titulo:</label>
      <input type="text" name="titulo" value="">
      @error('titulo')
      <small class="error">{{$message}}</small>
        @enderror
      </div>

      <div>
        <label for="documento"></label>
        <input type="file" name="documento" id="documento">
        @error('documento')
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