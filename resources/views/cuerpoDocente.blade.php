@extends("plantilla")
@section("main")

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/cuerpoDocente.css">
    <title>Cuerpo Docente</title>
  </head>
  <body>
    <div class="cuerpo-docente">
      <div class="docente1">
        <div class="imagen-docente">
          <img src="/imagenes/daniel-stecher.jpg" alt="Daniel Stecher">
        </div>
        <div class="descripcion-docente">
          <p class="nombre-docente">Daniel Stecher</p>
          <p class="cargos-docente">Jefe Adjunto de Catedra de Infectologia</p>
        </div>
      </div>
      <div class="docente2">
        <div class="imagen-docente">
          <img src="/imagenes/silueta.jpg" alt="silueta">
        </div>
        <div class="descripcion-docente2">
          <p class="nombre-docente">Carlos Gonzales</p>
          <p class="cargos-docente">Docente de Infectologia</p>
        </div>
      </div>
      <div class="docente3">
        <div class="imagen-docente">
          <img src="/imagenes/silueta.jpg" alt="silueta">
        </div>
        <div class="descripcion-docente2">
          <p class="nombre-docente">Juan Peréz</p>
          <p class="cargos-docente">Ayudante de Catedra</p>
        </div>
      </div>
    </div>
  </body>
</html>

@endsection
