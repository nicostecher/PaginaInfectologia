@extends('plantilla')

<meta charset="UTF-8">
<link rel="stylesheet" href="/css/listadoDeEdicion.css">

@section('main')

    <div class="titulo">
    <h3>Listado de Clases</h3>
        </div>

        <div class="menu-edicion">
            <div class="claseNueva">
             <a href="/nuevaClase" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Cargar una Clase Nueva</a>
            </div>
     
            <div class="volverMenu">
             <a href="/admin" class="btn btn-success btn-lg active" role="button" aria-pressed="true">Volver al menú</a>
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
            @foreach ($clases as $clase)
            <ul>
                 <li>
                    <div class="nombre">
                        <p>{{$clase->nombre}}</p>
                        </div>
                    </li>
            </ul>

               
              <ul>     
                <li>
                    <div class="archivo">
                        <iframe src="/storage/upload/{{$clase->archivo}}"  ></iframe>
                            </div> 
                                </li>
                    
                    </ul> 
                
                <ul>
                    <div class="botones">
                        <li class="boton">
                                
                            <a href="/editarClase/{{$clase->id}}"><button type="button" class="btn btn-success">Editar</button></a>
                        </li>

                        <li class="boton">
                            <form action="/listadoClases" method="post">
                            {{ csrf_field() }}
                            <input type="hidden" name="id" value="{{$clase->id}}">
                            <button class="btn btn-danger" type="submit" onclick="return confirm('Esta seguro de Borrar la clase?')"; value="borrar">Borrar</button>
                                
                            </form>
                        </li>
                    </div>
                    
                    
                </ul>

             @endforeach
        </article>

    </section>
    

@endsection