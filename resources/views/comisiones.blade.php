@extends("plantilla")
@section("main")

    <link rel="stylesheet" href="/css/comisiones.css">


  <section class="contenedor-sitio">
    
    <div class="contenido-comisiones">
      
      <div class="titulo-sitio">
          <h2>Comisiones</h2>
      </div>
      <div class="comisiones">
        <ul>
          @foreach ($comisiones as $comision)
          <li>
            <div class="imagen-comision">
              <img src="/storage/upload/{{$comision->archivo}}" alt="imagen comision">
              </div>
          </li>
    
          @endforeach
        
        </ul>
      </div>
    </div>
  </section>


@endsection


