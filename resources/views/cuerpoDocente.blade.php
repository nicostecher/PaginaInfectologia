@extends("plantilla")
@section("main")

<div class="contenedor-docente">
    <link rel="stylesheet" href="/css/cuerpoDocente.css">


    <div class="cuerpo-docente">
        @foreach ($docentes as $docente)
        <ul>
            <li>
                <img src="/storage/upload/{{$docente->foto}}" alt="imagen">
              </li>  
              <li>
                  <p class="nombre-docente">{{$docente->nombre}}</p>
              </li>
              <li>
                <p class="cargos-docente">{{$docente->descripcion}}</p>
              </li>
            </ul>
          
          @endforeach
        </div>
      </div>
@endsection
