@extends("plantilla")


@section("main")

<link rel="stylesheet" href="/css/header.css">
<link rel="stylesheet" href="/css/casosClinicos.css">

<div class="imagen-principal">

<div class="contenedor-casosClinicos">
  
  <div class="titulo-casosClinicos">
      <h2>Casos Clinicos</h2>
  </div>

  <div class="contenido-casosClinicos"> 
    <ul>
      @foreach ($casos as $caso)
      <li>
        <p>{{$caso->nombre}}</p>
      </li>

      <li>
        <div class="archivo">
        <iframe src="/storage/upload/{{$caso->archivo}}" frameborder="10"></iframe>
      </div>
      </li>
          
      @endforeach
    </ul>
    </div>
    
  </div>

<div class="link">
  {{$casos->links()}}
</div>

</div>

@endsection

<script src="/js/iframe.js"></script>
