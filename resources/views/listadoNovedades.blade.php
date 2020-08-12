@extends('plantilla')

@section('main')


<section class="listado-novedades">

    <div>
      <h3>Listado Novedades</h3>
    </div>

    <div class="cargar-novedades">
        <a href="/cargarNovedades"><button>Nueva Noticia</button></a>
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
            @foreach ($novedades as $novedad)
                
            
            <tr>
                <td scope="row">{{$loop->iteration}}</td>
                <td>{{$novedad->titulo}}</td>
                <td>{{$novedad->descripcion}}</td>
                <td>
                    <a href="/editarNovedades/{{$novedad->id}}">Editar</a>

                   <form action="/listadoNovedades" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{$novedad->id}}">
                    <input type="submit" onclick="return confirm('Esta seguro de Borrar la noticia?')"; value="borrar">
                    
                </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    </section>
    
@endsection