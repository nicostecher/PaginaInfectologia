@extends("plantilla")
@section("main")

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/comisiones.css">
    <title></title>
  </head>
  <body>
    <section class="contenedor-sitio">
      <div class="titulo-sitio">
          <h2>Comisiones</h2>
      </div>

      <div class="comisiones">
        <div class="comision-1">
          <p class="titulo-comision">Comisión 1</p>
          <div class="alumnos">
            <p class="alumnos">Gonzalo Peréz</p>
            <p class="alumnos">Camilo Borgors</p>
          </div>
        </div>
        <div class="comision-2">
          <p class="titulo-comision">Comisión 2</p>
          <div class="alumnos">
            <p class="alumnos">Karina Jelinek</p>
            <p class="alumnos">Jorge Luis Borges</p>
          </div>
          <div class="comision-3">
            <p class="titulo-comision">Comisión 3</p>
            <div class="alumnos">
              <p class="alumnos">Camila Gonzales</p>
              <p class="alumnos">Catalina Peréz</p>
            </div>
        </div>
        <div class="comision-4">
          <p class="titulo-comision">Comisión 3</p>
          <div class="alumnos">
            <p class="alumnos">Diana Aisenberg</p>
            <p class="alumnos">Nicolas Stecher</p>
          </div>
      </div>
    </section>
  </body>
</html>

@endsection
