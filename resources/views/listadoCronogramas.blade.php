@extends('plantilla')
<meta charset="UTF-8">
<link rel="stylesheet" href="/css/listadoDeEdicion.css">

@section('main')

    <div class="titulo">
    <h3>Listado de Cronogramas</h3>
        </div>
    
    <div class="menu-edicion">
        <div class="claseNueva">
            <a href="/cargarCronograma" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Cargar un Cronograma</a>
        </div>
    
        <div class="volverMenu">
            <a href="/admin" class="btn btn-success btn-lg active" role="button" aria-pressed="true">Volver al menu</a>
        </div>
    </div>

       <div class="encabezados">
           <ul>
               <li>Nombre</li>
               <li>Archivo</li>
               <li>Acción</li>
           </ul>
       </div>

        <article class="listado">
            @foreach ($cronogramas as $cronograma)
            <ul>
                <li>
                <div class="nombre">
                    <p>{{$cronograma->nombre}}</p>
                    </div>
                </li>
            </ul>

        <ul>
            <li>
        <div class="archivo">
            <iframe src="/storage/upload/{{$cronograma->archivo}}"></iframe>
            </div> 
                </li>
        </ul>

                
        <ul>
            <div class="botones">
                <li class="boton">
                        
                    <a href="/editarNovedades/{{$cronograma->id}}"><button type="button" class="btn btn-success">Editar</button></a>
                </li>

                <li class="boton">
                    <form action="/listadoNovedades" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{$cronograma->id}}">
                        <button class="btn btn-danger" type="submit" onclick="return confirm('Esta seguro de Borrar la noticia?')"; value="borrar">Borrar</button> 
                        </form>
                </li>
            </div>
            </ul>

            @endforeach
        </article>


    </section>

@endsection