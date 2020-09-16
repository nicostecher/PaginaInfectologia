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
      <a href="/listadoNovedades">Novedaes</a>
    </div>
    <div class="cargarCronograma">
      <a href="/listadoCronogramas">Cronogramas</a>
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
    <div class="editaralumnos">
      <a href="/listadoAlumnos">Alumnos</a>
    </div>
    <div class="editarSitios">
      <a href="/listadoSitios">Sitios de Interes</a>
    </div>
    <div class="editarbibliografias">
      <a href="/listadoBibliografias">Bibliografias</a>
    </div>
    <div class="editarComisiones">
      <a href="/listadoComisiones">Comisiones</a>
    </div>
    

  </div>
</div>









@endsection
