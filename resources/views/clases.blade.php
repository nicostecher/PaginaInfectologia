@extends("plantilla")

@section("main")  

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap" rel="stylesheet">
<link rel="stylesheet" href="/css/header.css">
<link rel="stylesheet" href="/css/clases.css">


<div class="contenedor-principal">
  
  <div class="transparencia">

      <section class="contenido-clases">

       
      <div class="titulo-clases">
        <h2>Clases</h2>
      </div>

            <div class="titulo-escritorio">
              <h2>Clases</h2>
            </div>

            <br>

            <article class="clase">

              <div class="video">
              <ul>
                @forelse ($clases as $clase)
                <li>
                 <iframe src="/storage/{{$clase->archivo}}" width="600px" height="500px" type=""></iframe>
                </li>
                <li>
                  <div class="descripcion">
                    <p>{{$clase->nombre}}</p>
                   </div>
                </li>
                    
                @empty
                    
                @endforelse
              </ul>
                </div>
            
      </section>
      {{$clases->links()}}


      <section class="cargarClase">


        <h3>Cargar una clase</h3>
        <br>
        <form action="/clases" method="post" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div>
          <label for="Nombre">Nombre:</label>
          <input type="text" name="nombre" value="">
          </div>

          <div>
            <label for="archivo"></label>
            <input type="file" name="archivo" id="archivo">
            <div>
              <input type="submit" value="Cargar">
              <input type="button" value="Borrar">
              </div>
          </div>

        </form>
        


      </section>

   <br>
   <br>
   <br>

    </div>
  </div>



@endsection
