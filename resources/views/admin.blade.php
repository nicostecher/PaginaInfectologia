 @extends('plantilla')
  
 @section('main')
        <meta charset="utf-8">
        <link rel="stylesheet" href="/css/admin.css">

  <section class="contenedor-principal">

      <div class="titulo">
        <h3>Administrador</h3>
      </div>

      <div class="cajita">

        <div class="comisiones">  
          <ul>
              <li><a href="/listadoNovedades"><button type="button" class="btn btn-info">Novedades</button></a></li>
              <li><a href="/listadoCronogramas"><button type="button" class="btn btn-info">Cronogramas</button></a></li>
              <li><a href="/listadoClases"><button type="button" class="btn btn-info">Clases</button></a></li>
              <li><a href="/listadoCasosClinicos"><button type="button" class="btn btn-info">Casos Clinicos</button></a></li>
              <li><a href="/listadoDocentes"><button type="button" class="btn btn-info">Docentes</button></a></li>
              <li><a href="/listadoAlumnos"><button type="button" class="btn btn-info">Alumnos</button></a></li>
              <li><a href="/listadoSitios"><button type="button" class="btn btn-info">Sitios de Interes</button></a></li>
              <li><a href="/listadoBibliografias"><button type="button" class="btn btn-info">Bibliografias</button></a></li>
              <li><a href="/listadoComisiones"><button type="button" class="btn btn-info">Comisiones</button></a></li>
              <li class="inicio"><a href="/index"><button type="button" class="btn btn-info">Volver al inicio</button></a></li>
            </ul>
        </div>
      </div>
    </section>

    
    
  @endsection


