@extends("plantilla")
@section("main")

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/index.css">
    <title></title>
  </head>
  <body>
    <div class="container">
      <div class="barra-busqueda">
        <nav class="navbar navbar-light bg-light">
          <a class="navbar-brand" href="#">
            <img class="lupita"src="/docs/4.1/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
              <p class="busqueda">Buscar</p>
          </a>
        </nav>
      </div>
      <div class="novedades">
        <a href="novedades">Novedades!</a>
        <div class="noticia1">
        </div>
        <div class="noticia2">
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
    </div>

  </body>
</html>
@endsection
