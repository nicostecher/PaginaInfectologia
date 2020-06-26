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



      <div class="novedades">
                
            <h6>22/6/2020</h6>

          <div class="noticia1">
            <div class="titulo-noticia">
              <h5>fechas de Parcial</h5>
            </div>

            <div class="descripcion-noticias">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem, rem placeat! Porro praesentium nulla </p>
            </div>

          </div>

          <div class="noticia2">
              <h6>22/6/2020</h6>
              <div class="titulo-noticia">
                <h5>Cambios de Clase</h5></a>
              </div>

                <div class="descripcion-noticias">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, maxime necessitatibus placeat, dolore autem voluptatem aut aliquam mollitia, facilis hic quae incidunt dolorum dicta libero iure. Officiis modi maiores fugit. nulla<p>
                  </div>
                </div>
                

                <div class="noticia2">
                  <h6>22/6/2020</h6>
                  <div class="titulo-noticia">
                    <h5>Otras Noticias</h5>
                  </div>

                    <div class="descripcion-noticias">
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, maxime necessitatibus placeat, dolore autem voluptatem aut aliquam mollitia, facilis hic quae incidunt dolorum dicta libero iure. Officiis modi maiores fugit. nulla<p>
                      </div>
                    </div>

                    <div class="noticia2">
                     <h6>22/6/2020</h6>
                      <div class="titulo-noticia">
                        <h5>Otras Noticias</h5>
                      </div>
    
                        <div class="descripcion-noticias">
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, maxime necessitatibus placeat, dolore autem voluptatem aut aliquam mollitia, facilis hic quae incidunt dolorum dicta libero iure. Officiis modi maiores fugit. nulla<p>
                          </div>
                        </div>




      </div>


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

  </body>
</html>
@endsection
