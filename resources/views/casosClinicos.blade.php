@extends("plantilla")
@section("main")

<link rel="stylesheet" href="/css/casosClinicos.css">

<section class="contenedor-casosClinicos">
  
  <div class="titulo-casosClinicos">
      <h2>Casos Clinicos</h2>
  </div>


  <div class="contenido-casosClinicos">
  
    <ul  class="listado-casosClinicos">
      @foreach ($casos as $caso)
      <li>
        <p>{{$caso->nombre}}</p>
      </li>

      <li>
        <iframe src="/storage/{{$caso->archivo}}"  width="600px" height="500px" frameborder="0"></iframe>
      </li>
          
      @endforeach
    </ul>

    </div>

</section>
@endsection
