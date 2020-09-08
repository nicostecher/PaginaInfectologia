@extends('plantilla')

@section('main')

<section class="editar-caso-clinico">
  
        <h3>editar una Comisión</h3>
        <br>
        <form action="/editarComisiones/{{$comisiones->id}}" method="post" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div>
          <label for="nombre">Titulo:</label>
          <input type="text" name="nombre" value="{{$comisiones->nombre}}">
          @error('nombre')
          <small class="error">{{$message}}</small>
            @enderror
          </div>

          <div>
            <label for="archivo"></label>
            <div>
              <iframe src="/storage/{{$comisiones->archivo}}" frameborder="0"></iframe>
            <input type="file" name="archivo" id="archivo">
            @error('archivo')
            <small class="error">{{$message}}</small>  
            @enderror
            <div>
              <input type="submit" onclick="return confirm('comisión Editada con exito!')" value="Guardar Cambios">
              </div>
          </div>

        </form>
        


      

</section>
    
@endsection