@extends('plantilla')

<meta charset="UTF-8">
<link rel="stylesheet" href="/css/listadoDeEdicion.css">

@section('main')
s
    <div class="titulo">
    <h3>Listado de Casos Clínicos</h3>
        </div>
 
        <div class="menu-edicion">
            <div class="claseNueva">
                <a href="/nuevoCasoClinico" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Cargar un Caso Clínico</a>
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
            @foreach ($casos as $caso)
            <ul>
                
                    <li>
                        <div class="nombre">
                            <p>{{$caso->nombre}}</p>
                            </div>
                        </li>
            </ul>

            <ul> 
                <li>
                    <div class="archivo">
                     <iframe src="/storage/upload/{{$caso->archivo}}" ></iframe>
                      </div> 
                          </li>
            </ul>


               <ul>            
                    <div class="botones">
                        <li class="boton">
                                
                            <a href="/editarCasoClinico/{{$caso->id}}"><button type="button" class="btn btn-success">Editar</button></a>
                        </li>

                        <li class="boton">
                    <form action="/listadoCasosClinicos" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{$caso->id}}">
                        <button class="btn btn-danger" type="submit" onclick="return confirm('Esta seguro de Borrar la clase?')"; value="borrar">Borrar</button>
                        </form>
                        </li>
                    </div>
            </ul>
            @endforeach
        </article>


    </section>
    

@endsection