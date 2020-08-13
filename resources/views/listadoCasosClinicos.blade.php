@extends('plantilla')

<meta charset="UTF-8">
<link rel="stylesheet" href="/css/listadoCasosClinicos.css">

@section('main')

    <div class="titulo">
    <h3>listado de Casos Clinicos</h3>
        </div>

        <article class="listado">
            <ul>
                @foreach ($casos as $caso)
                    <li>
                        <div class="nombre">
                            <p>{{$caso->nombre}}</p>
                            </div>
                        </li>

                    <li>
                       <div class="archivo">
                        <iframe src="/storage/{{$caso->archivo}}"  frameborder="0"></iframe>
                         </div> 
                             </li>

                    <li>
                        <a href="/editarCasoClinico/{{$caso->id}}"><button type="button" class="btn btn-success">Editar</button></a>
                        
                   <form action="/listadoCasosClinicos" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{$caso->id}}">
                    <button class="btn btn-danger" type="submit" onclick="return confirm('Esta seguro de Borrar la clase?')"; value="borrar">Borrar</button>
                    
                </form>
                    
                    </li>

                @endforeach
            </ul>
        </article>


    </section>
    

@endsection