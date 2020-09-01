@extends("plantilla")


@section("main")

<link rel="stylesheet" href="/css/header.css">
<link rel="stylesheet" href="/css/casosClinicos.css">

<section class="contenedor-casosClinicos">
  
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
        <div class="documento">
        <iframe src="/storage/{{$caso->archivo}}" width="300px" height="300px"frameborder="0" ></iframe>
      </div>
      </li>
          
      @endforeach
    </ul>
    </div>
</section>
@endsection
