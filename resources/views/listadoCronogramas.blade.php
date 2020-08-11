@extends('plantilla')


@section('main')


<section class="listado-cronogramas">

    <div>
      <h3>Listado cronogramas</h3>
    </div>

    <div class="cargar-cronograma">
        <a href="/cargarNovedades"><button>Nuevo Cronograma</button></a>
    </div>

    
        
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Archivo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cronogramas as $cronograma)
                
            
            <tr>
                <td scope="row">{{$loop->iteration}}</td>
                <td>{{$cronograma->nombre}}</td>
                <td><img src="/storage/{{$cronograma->archivo}}"  alt=""></td>
                <td>
                   <a href="/editarCronograma/{{$cronograma->id}}">Editar</a>

                   <form action="/listadoCronogramas" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{$cronograma->id}}">
                    <input type="submit" onclick="return confirm('Esta seguro de Borrar la clase?')"; value="borrar">
                    
                </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    </section>
    

@endsection