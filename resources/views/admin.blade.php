@extends('plantilla')
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/admin.css">

@section('main')

<div class="contenedor-principal">

  <div class="titulo">
    <h3>Administrador</h3>
  </div>

  <div class="cajita">

    <div class="comisiones">  
      <ul>
          <li><a href="/listadoNovedades"><button type="button" class="btn btn-info">Novedades</button></a></li>
          <li><a href="/listadoNovedades"><button type="button" class="btn btn-info">Cronogramas</button></a></li>
          <li><a href="/listadoNovedades"><button type="button" class="btn btn-info">Clases</button></a></li>
          <li><a href="/listadoNovedades"><button type="button" class="btn btn-info">Casos Clinicos</button></a></li>
          <li><a href="/listadoNovedades"><button type="button" class="btn btn-info">Docentes</button></a></li>
          <li><a href="/listadoNovedades"><button type="button" class="btn btn-info">Alumnos</button></a></li>
          <li><a href="/listadoNovedades"><button type="button" class="btn btn-info">Sitios de Interes</button></a></li>
          <li><a href="/listadoNovedades"><button type="button" class="btn btn-info">Bibliografias</button></a></li>
          <li><a href="/listadoNovedades"><button type="button" class="btn btn-info">Comisiones</button></a></li>
          <li class="inicio"><a href="/listadoNovedades"><button type="button" class="btn btn-info">Volver al inicio</button></a></li>
        </ul>

    </div>
  </div>

</div>



@endsection
