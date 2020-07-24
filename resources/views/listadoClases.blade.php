@extends('plantilla')


@section('main')


<section class="listado-clases">

    <div>
      <h3>Listado clases</h3>
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
            @foreach ($clases as $clase)
                
            
            <tr>
                <td scope="row">{{$loop->iteration}}</td>
                <td>{{$clase->nombre}}</td>
                <td><img src="/storage/{{$clase->archivo}}"  alt=""></td>
                <td>
                    <a href="/editarClase/{{$clase->id}}">enviar</a>

                   <form action="/listadoClases" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{$clase->id}}">
                    <input type="submit" onclick="return confirm('Esta seguro de Borrar la clase?')"; value="borrar">
                    
                </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    </section>
    
   
@endsection