@extends("plantilla")
@section("main")


    


    <meta name="viewport" content="width=device-width, user-scalable=no">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/cronograma.css">

    <title>Cronograma</title>
  
    


    <section class="contenedor-cronograma ">

    <div class="transparencia">

        <div class="caja-cronograma">
          
              <div class="titulo-cronograma" >
                 <h2> Cronograma</h2>
                 </div>

                 <ul>
                    @forelse ($cronogramas as $cronograma)
                    <li>
                      <div class="imagen-cronograma">
                        <img src="/storage/{{$cronograma->archivo}}" alt="">
                      </li>
                      @empty
                    @endforelse
                    </ul>
                </div>
        

        </div>
   
    </section>

    
    <section class="cargarCronograma">
        
        <h3>Cargar un Cronograma</h3>
        <br>
        <form action="/cronograma" method="post" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div>
          <label for="Nombre">Nombre:</label>
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
