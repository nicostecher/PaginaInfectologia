@extends('plantilla')
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/admin.css">
@section('main')

  <div class="titulo">
    <h3>Administrador</h3>
  </div>

<div class="cajita">
  <div class="editarVistas">
    <h4>Editar las vistas</h3>
  </div>

  <div class="categorias">
    <div class="cargarNovedades">
      <a href="/listadoNovedades">novedaes</a>
    </div>
    <div class="cargarCronograma">
      <a href="/listadoCronogramas">cronogramas</a>
    </div>
    <div class="editarClase">
      <a href="/listadoClases">Clases</a>
    </div>
    <div class="editarCasoClinico">
      <a href="/listadoCasosClinicos"> Casos Clinicos</a>
    </div>
    <div class="editarCronograma">
      <a href="/listadoDocentes">Docentes</a>
    </div>
    <div class="editarNovedades">
      <a href="/listadoBibliografias">bibliografias</a>
    </div>
  </div>
</div>









@endsection
