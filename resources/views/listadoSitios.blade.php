@extends('plantilla')

<meta charset="UTF-8">
<link rel="stylesheet" href="/css/listadoDeEdicion.css">
<meta charset="UTF-8">


@section('main')

    <div class="titulo">
    <h3>Listado de Sitios de Interes</h3>
        </div>

    <div class="menu-edicion">
        <div class="claseNueva">
            <a href="/cargarSitio" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Cargar un Sitio</a>
            </div>

        <div class="volverMenu">
            <a href="/admin" class="btn btn-success btn-lg active" role="button" aria-pressed="true">Volver al menu</a>
            </div>
        </div>

    <div class="encabezados">
        <ul>
            <li>Nombre</li>
            <li>Link</li>
            <li>Acción</li>
        </ul>
    </div>

    <article class="listado">
        @foreach ($sitios as $sitio)
        <ul>
                <li>
                    <div class="nombre">
                        <p>{{$sitio->nombre}}</p>
                        </div>
                    </li>
            </ul>

        <ul>
            <li>
            <div class="archivo">
                <p>{{$sitio->links}}</p>
                </div> 
                </li>
            </ul> 
            
            
        <ul>
            <div class="botones">
                <li class="boton">
                        
                    <a href="/editarSitio/{{$sitio->id}}"><button type="button" class="btn btn-success">Editar</button></a>
                </li>

                <li class="boton">
                    <form action="/listadoSitios" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{$sitio->id}}">
                        <button class="btn btn-danger" type="submit" onclick="return confirm('Esta seguro de Borrar el link?')"; value="borrar">Borrar</button> 
                    </form>
                
                </li>
            </div>
                
            </ul>
            @endforeach
    </article>

    

@endsection