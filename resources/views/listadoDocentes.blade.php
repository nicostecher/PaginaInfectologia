@extends('plantilla')

<meta charset="UTF-8">
<link rel="stylesheet" href="/css/listadoDeEdicion.css">

@section('main')

    <div class="titulo">
    <h3>Listado de Clases</h3>
        </div>
    
    <div class="menu-edicion">
        <div class="claseNueva">
        <a href="/cargarDocente" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Cargar Docente</a>
        </div>

        <div class="volverMenu">
        <a href="/admin" class="btn btn-success btn-lg active" role="button" aria-pressed="true">Volver al menu</a>
        </div>
    </div>

    <div class="encabezados">
        <ul>
            <li>Nombre</li>
            <li>Descripción</li>
            <li>Foto</li>
            <li>Acción</li>
        </ul>
    </div>

        <article class="docentes">
            @foreach ($docentes as $docente)
            <ul class="nombreDocente">
                    <li>
                        <div class="nombre">
                            <p>{{$docente->nombre}}</p>
                            </div>
                        </li>

                </ul>
                    
                    <ul>
                        
                        <li>
                            <div class="descripcion">
                                <p>{{$docente->descripcion}}</p>
                                </div>
                            </li>
                    </ul>

            <ul>
                <li>
                    <div class="archivo">
                    <img src="/storage/upload/{{$docente->foto}}">
                    </div> 
                        </li>
                    </ul>   
            
                <ul>
            <div class="borrar-docente">
                <li class="boton">
                        
                    <a href="/editarDocente/{{$docente->id}}"><button type="button" class="btn btn-success">Editar</button></a>
                </li>

                <li class="boton">
            <form action="/listadoDocentes" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{$docente->id}}">
                <button class="btn btn-danger" type="submit" onclick="return confirm('Esta seguro de Borrar los Datos?')"; value="borrar">Borrar</button>
                
            </form>
                </li>
            </div>
            
            
        </ul>

            @endforeach
            </article>
    

@endsection