@extends("plantilla")
@section("main")

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="/css/fontawesome/css/all.css" rel="stylesheet"> 
    <link rel="stylesheet" href="/css/index.css">
    <title></title>
  </head>
  <body>


    <div class="imagen-fondo">

    <div class="container">

      <div class="barra-busqueda">
        <nav id="buscador" class="navbar navbar-light bg-light" class="menu-busqueda">
          <a class="navbar-brand" href="#">
            <div class="lupita">
              <i class="fas fa-search"></i>
            </div>
              <p class="busqueda">Buscar</p>
              
          </a>
        </nav>
      </div>



      <article class="novedades">

        <ul>
          @forelse ($novedades as $novedad)
          <li>
               <h6>{{$novedad->created_at->format('d.m.Y')}}</h6>
               </li> 
             
           <li>
                <div class="noticia1">
                  <div class="titulo-noticia">
                    <h5>{{$novedad->titulo}}</h5>
                  </div>
                  </div>
               </li>
               
           <li>
                 
          <div class="descripcion-noticias">
            <p>{{$novedad->descripcion}}</p>
          </div>
               </li>
               @empty

               @endforelse
                   
                </ul>

              </article>

             
          
       
                



     


      <div class="categorias">
          <div class="categoria-cronograma">
            <a href="/cronograma">Cronograma</a>
          </div>
          <div class="categoria-bibliografia">
            <a href="/bibliografia">Bibliografia</a>
          </div>
          <div class="categoria-casosClinicos">
            <a href="/casosClinicos">Casos Clinicos</a>
          </div>
          <div class="categoria-clases">
            <a href="/clases">Clases</a>
          </div>
          <div class="categoria-cuerpoDocente">
            <a href="/cuerpoDocente">Cuerpo Docente</a>
          </div>

      </div>

      <br>

    </div>
  </div>

</div>

  </body>
</html>
@endsection
