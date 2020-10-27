@extends("plantilla")
@section("main")

<link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap" rel="stylesheet">
<link rel="stylesheet" href="/css/sitiosDeInteres.css">

<div class="contenedor-sitio">
  <div class="caja">
    <div class="titulo-sitio">
        <h2>Sitios de Interes</h2>
    </div>
    <div class="contenido-sitio">
      <ul type= "circle" class="listado-sitio">
          @foreach ($sitios as $sitio)
          <li>
          <a href="{{$sitio->links}}">{{$sitio->nombre}}</a>
          </li> 
            @endforeach 
      </ul>
    </div>
  </div>
</div>

@endsection
