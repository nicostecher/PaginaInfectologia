@extends("plantilla")

@section("main")

    <meta name="viewport" content="width=device-width, user-scalable=no">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/cronograma.css">

    <title>Cronograma</title>
  
    <section class="contenedor-cronograma ">

    <div class="transparencia">

        <div class="caja-cronograma">
              <div class="titulo-cronograma" >
                <h2> Cronograma</h2>
                </div>
                  <div class="imagen-cronograma">
                    <ul>
                      @forelse ($cronogramas as $cronograma)
                      <li>
                    <img src="/storage/upload/{{$cronograma->archivo}}"   alt="imagen">
                  </li>
                  @empty
                @endforelse
                </ul>
            </div>
        </div>

        <div class="paginacion">
          {{$cronogramas->links()}}
        </div>
    </section>

    

    



@endsection
