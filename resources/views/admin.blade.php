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
      <a href="/cargarNovedades">Cargar Novedades</a>
    </div>
    <div class="cargarCronograma">
      <a href="/CargarCronograma">Cargar Cronograma</a>
    </div>
    <div class="editarClase">
      <a href="/editarClase">Editar Clase</a>
    </div>
    <div class="editarCasoClinico">
      <a href="/editarCasoClinico">Editar Clases Clinicos</a>
    </div>
    <div class="editarCronograma">
      <a href="/editarCronograma">Editar cronograma</a>
    </div>
    <div class="editarNovedades">
      <a href="/editarNovedades">Editar Novedades</a>
    </div>
  </div>
</div>









@endsection
