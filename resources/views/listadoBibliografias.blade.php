@extends('plantilla')
<meta charset="UTF-8">
<link rel="stylesheet" href="/css/listadoDeEdicion.css">

@section('main')

<div class="titulo">
    <h3>Listado de bibliografias</h3>
        </div>

        <div class="menu-edicion">
            <div class="claseNueva">
                <a href="/cargarBibliografia" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Cargar una Bibliografia</a>
                </div>
    
            <div class="volverMenu">
                <a href="/admin" class="btn btn-success btn-lg active" role="button" aria-pressed="true">Volver al menu</a>
                </div>
            </div>
    

    <div class="encabezados">
        <ul>
            <li>Nombre</li>
            <li>documento</li>
            <li>Acción</li>
        </ul>
    </div>

        <article class="listado">
            @foreach ($bibliografias as $bibliografia)
            <ul>
                <li>
                    <div class="nombre">
                        <p>{{$bibliografia->titulo}}</p>
                        </div>
                    </li>
                </ul>

             <ul>
                 <li>
                    <div class="archivo">
                        <iframe src="/storage/upload/{{$bibliografia->documento}}"></iframe>
                        </div> 
                        </li>
                 </ul>
            
        
            <ul>
                <div class="botones">
                    <li class="boton">  
                        <a href="/editarBibliografia/{{$bibliografia->id}}"><button type="button" class="btn btn-success">Editar</button></a>
                    </li>

                    <li class="boton">
                        <form action="/listadoBibliografias" method="post">
                            {{ csrf_field() }}
                            <input type="hidden" name="id" value="{{$bibliografia->id}}">
                            <button class="btn btn-danger" type="submit" onclick="return confirm('Esta seguro de Borrar la bibliografia?')"; value="borrar">Borrar</button>
                            
                            </form>
                                </li>
                    </div>
                    
                    
            </ul>

                @endforeach
            </article>

@endsection