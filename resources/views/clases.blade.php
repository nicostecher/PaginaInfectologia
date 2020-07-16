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
              <iframe src="https://docs.google.com/viewer?srcid=1v2U0h14MMKsdOXEvX8pgHCN6-OLETX3N&pid=explorer&efh=false&a=v&chrome=false&embedded=true" width="80%" height="250px" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>

                <div class="descripcion">
                  <p>Clase 1</p>
                  </div>

            </article>
            <!---   QUEDA BLOQUEADO HASTA AGREGAR PAGINACION FUNCIONAL!
            <article class="clase2">
              <div class="pdf">
                <iframe src="https://docs.google.com/viewer?srcid=1QDqahbmx_CWZi_sS7bEfqSz8cKmk9lhS&pid=explorer&efh=false&a=v&chrome=false&embedded=true" width="90%" height="250px" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                
              </div>
              
                <div class="descripcion">
                  <p>Clase 2</p>
                  </div>
            </article>
            
            -->
      </section>


      <section class="cargarClase">

        <ul class="errores"> 
          
         <!--ACA VA A LA LOGICA DE BORRAR LA CLASE CUAND HAYA BASE DE DATOS!-->
        </ul>

        <h3>Cargar una clase</h3>
        <br>
        <form action="/clases" method="post" enctype="">
          {{ csrf_field() }}
          <div>
          <label for="Nombre">Nombre:</label>
          <input type="text" name="nombre" value="">
          </div>

          <div>
            <label for="material"></label>
            <input type="file" name="archivo" id="">
            <div>
              <input type="button" value="Cargar">
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
