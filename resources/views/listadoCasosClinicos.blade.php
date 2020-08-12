@extends('plantilla')


@section('main')


<section class="listado-clases">

    <div>
      <h3>Listado clases</h3>
    </div>

    <div class="cargar-cronograma">
        <a href="/nuevoCasoClinico"><button>Cargar un Caso Clinico</button></a>
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
            @foreach ($casos as $caso)
                
            
            <tr>
                <td scope="row">{{$loop->iteration}}</td>
                <td>{{$caso->nombre}}</td>
                <td><iframe src="/storage/{{$caso->archivo}}" frameborder="0"></iframe></td>
                <td>
                    <a href="/editarCasoClinico/{{$caso->id}}"><button>Editar<button></a>

                   <form action="/listadoCasosClinicos" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{$caso->id}}">
                    <input type="submit" onclick="return confirm('Esta seguro de Borrar el caso?')"; value="borrar">
                    
                </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    </section>
    

@endsection