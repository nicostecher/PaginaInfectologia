<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital@1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/plantilla.css">
    <title>Cursada de Infectología</title>
  </head>
  <body>

    <header>

      <div class="imagen-uba">
        <a href="/index"><img src="/imagenes/logo-UBA.png"  width="100px" height="95px" alt="uba"></a>
      </div>

        <div class="titulo-principal-mobile">
            <a href="/index"><h4 id="letra-1">Enfermedades Infecciosas <br>Hospital de Clínicas</h4><h4 id="letra-2">Facultad de Medicina <br> Universidad de Buenos Aires</h4></a>
        </div>


      <div class="imagen-clinicas">
        <a href="/index"><img src="/imagenes/logo-clinicas-transparente-.jpg"  width="100px" height="95px" alt="uba"></a>
      </div>


        <!--MENU MOBILE-->

        <div class="menu-mobile">
          <div class="fixed-top">
            <div class="collapse" id="navbarToggleExternalContent">
              <div class="hamburguesa">
                <ul class="listado-mobile">
                  <li class="text-muted"><a href="/cronograma">Cronograma</a></li>
                  <li class="text-muted"><a href="/clases">Clases</a></li>
                  <li class="text-muted"><a href="/casosClinicos">Casos Clínicos</a></li>
                  <li class="text-muted"><a href="/cuerpoDocente">Cuerpo Docente</a></li>
                  <li class="text-muted"><a href="/bibliografia">Bibliografía</a></li>
                  <li class="text-muted"><a href="/sitiosDeInteres">Sitios de Interés</a></li>

                  <div class="usuario-mobile">
                    @guest

                    <li class="text-muted"><a href="/bibliografia">Cambiar contraseña</a></li>
                    <li class="text-muted"><a href="/bibliografia">Cerrar sesión</a></li>
                    @else
                    <li class="text-muted">{{auth::user()->nombre}}</li>
                    <li class="text-muted">{{auth::user()->apellido}}</li>
                    <li class="text-muted"><a href="/cambiarPassword">Cambiar contraseña</a>
                    <li id="sesion"><a href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
                      {{ __('Cerrar sesión') }}
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
                 </li>
                    @endguest
                    </div>
                  </ul>
                 </div>
               </ul>

                </div>
                <nav class="navbar navbar-dark">
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation" color="black">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                </nav>
              </div>
            </div>

               <!--- MENU ESCRITORIO!-->
              <div class="titulo-principal-escritorio">
                <a href="/index"><h4>Enfermedades Infecciosas <br>Hospital de Clínicas "José de San Martín" <br>Facultad de Medicina - Universidad de Buenos Aires</h4></a>
            </div>

               <div id="menu-escritorio" class="navbar navbar-expand-lg navbar-light">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                  <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                      <a id="sec" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Secciones
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                       <a id="crono"class="dropdown-item" href="/cronograma">Cronograma</a>
                       <a id="clases"class="dropdown-item" href="/clases">Clases</a>
                        <a id="casos" class="dropdown-item" href="/casosClinicos">Casos Clínicos</a>
                        <a id="cuerpo"class="dropdown-item" href="/cuerpoDocente">Cuerpo Docente</a>
                        <a id="biblio"class="dropdown-item" href="/bibliografia">Bibliografía</a>
                        <a id="sitio"class="dropdown-item" href="/sitiosDeInteres">Sitios de Interés</a>
                        <a id="comi" class="dropdown-item" href="/comisiones">Comisiones</a>
                    </li>
                    <li class="nav-item">
                      <a id="com" class="nav-link" href="/comisiones">Comisiones</a>
                    </li>
                  </ul>
                </div>
               </div>

          <div class="usuario-escritorio">
            @guest
            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
              Usuario
            </button>
            <div class="collapse" id="collapseExample">
              <div class="card card-body">
                <ul type="bullet">
                  <li>Cambiar contraseña</li>
                  <li id="sesion"> Cerrar sesión</li>
                  </ul>
              </div>
            </div>
            @else
               <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                {{auth::user()->nombre}}
                {{auth::user()->apellido}}
               </button>
               <div class="collapse" id="collapseExample">
                 <div class="card card-body">
                   <ul class="sesion-usuario" type="bullet">
                     <li> <a href="/cambiarPassword">Cambiar contraseña</a> </li>
                     <li id="sesion"><a href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                       {{ __('Cerrar sesión') }}
                   </a>

                   <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                       @csrf
                   </form>
                  </li>
                     </ul>
                 </div>
               </div>
           </div>
           @endguest

            
    </header>

    @yield('main') 
        
  

    <footer>
      <ul class="listado-footer">
        <li class="nombre-catedra">
          <p>Infectología <br> Hospital de Clínicas <br>
            Universidad de Buenos Aires</p>
        </li>
        <li class="contacto">
          <a href="mailto:catedra_infectologia@gmail.com">Contactanos: catedra_infectologia@gmail.com</a>
        </li>
        <li class="imagen-footer">
          <a href="http://www.uba.ar/"><img class="uba" src="/imagenes/Logo-UBA.png" alt="logo-uba"></a>
        </li>
      </ul>
    </footer>
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
  

  </body>
</html>
