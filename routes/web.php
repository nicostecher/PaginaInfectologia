<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::group(['middleware' => ['admin']], function () {

    Route::get('/nuevoCasoClinico',"CasosClinicosController@nuevoCasoClinico");

    Route::post('/casosClinicos', "CasosClinicosController@cargarCasoClinico");

    Route::get("/listadoCasosClinicos","CasosClinicosController@listadoCasosClinicos");

    Route::get("/editarCasoClinico/{id}","CasosClinicosController@editarcasoClinico");

    Route::post("/editarCasoClinico/{id}","CasosClinicosController@actualizarCasoClinico");

    Route::post("/listadoCasosClinicos","CasosClinicosController@borrarCasoClinico");

    Route::get('/nuevaClase', "ClasesController@nuevaClase");

    Route::post('/clases', "ClasesController@cargarClase");

    Route::get('/listadoClases',"ClasesController@listadoClases");

    Route::post("/listadoClases", "ClasesController@borrarClases");

    Route::get("/editarClase/{id}","ClasesController@editarClase");

    Route::post("/editarClase/{id}","clasesController@actualizarClase");

    Route::get("/cargarCronograma", "CronogramaController@nuevoCronograma");

    Route::post('/cronograma',"CronogramaController@cargarCronograma");

    Route::get('/listadoCronogramas',"CronogramaController@listadoCronogramas");

    Route::post('/listadoCronogramas', "CronogramaController@borrarCronograma");

    Route::get("/editarCronograma/{id}","CronogramaController@editarCronograma");

    Route::post("/editarCronograma/{id}","CronogramaController@actualizarCronograma");

    route::get("/cargarNovedades", "NovedadesController@nuevaNoticia");

    route::post("/index", "NovedadesController@cargarNoticia");

    route::get("/listadoNovedades", "NovedadesController@listadoNovedades");

    Route::get("/editarNovedades/{id}","NovedadesController@editarNovedades");

    Route::post("/editarNovedades/{id}","NovedadesController@actualizarNovedades");

    Route::post('/listadoNovedades', "NovedadesController@borrarNovedad");

    Route::get("/cargarCronograma", "CronogramaController@nuevoCronograma");

    Route::post('/cronograma',"CronogramaController@cargarCronograma");

    Route::get('/listadoCronogramas',"CronogramaController@listadoCronogramas");

    Route::post('/listadoCronogramas', "CronogramaController@borrarCronograma");

    Route::get("/editarCronograma/{id}","CronogramaController@editarCronograma");

    Route::post("/editarCronograma/{id}","CronogramaController@actualizarCronograma");

    route::get("/cargarNovedades", "NovedadesController@nuevaNoticia");

    route::post("/index", "NovedadesController@cargarNoticia");

    route::get("/listadoNovedades", "NovedadesController@listadoNovedades");

    Route::get("/editarNovedades/{id}","NovedadesController@editarNovedades");

    Route::post("/editarNovedades/{id}","NovedadesController@actualizarNovedades");

    Route::post('/listadoNovedades', "NovedadesController@borrarNovedad");

    route::get("/listadoAlumnos", "AlumnosController@mostrarAlumnos");

    route::post("/listadoAlumnos", "AlumnosController@borrarAlumno");

    route::get("/cargarDocente","DocentesController@nuevoDocente");

    route::post("/cuerpoDocente","DocentesController@cargarDocente");

    route::get("listadoDocentes","DocentesController@listadoDocentes");

    route::get("/editarDocente/{id}","DocentesController@editarDocente");

    route::post("/editarDocente/{id}","DocentesController@actualizarDocente");

    route::post("/listadoDocentes","DocentesController@borrarDocente");

    route::get("/cargarBibliografia","bibliografiaController@nuevaBibliografia");

    route::post("/cargarBibliografia","bibliografiaController@cargarBibliografia");

    route::get("/bibliografia/{id}","bibliografiaController@descargarBibliografia");

    route::get("/listadoBibliografias","bibliografiaController@listadoBibliografia");
    
});

Route::get('/cronograma',"CronogramaController@vista");


Route::get('/novedades', function () {
    return view('novedades');
});



Route::group(['middleware' => 'auth'], function () {

  route::get('/admin', function(){
    return view('admin');
  });

    Route::get('/bibliografia', "bibliografiaController@vista");

    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/header', function(){
        return view("header");
    });

    route::get('/cuerpoDocente',"DocentesController@vista");


    Route::get('/sitiosDeInteres', function () {
        return view('sitiosDeInteres');
    });

    Route::get('/comisiones', function () {
        return view('comisiones');
    });

    Route::get('/casosClinicos', "CasosClinicosController@mostrarCasosClinicos");

    Route::get('/clases', "ClasesController@mostrarClases");

    Route::get("/cronograma","CronogramaController@mostrarCronograma");

    route::get("/index", "NovedadesController@mostrarNovedades");

});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

route::get("/respuesta", function(){
    return view("respuesta");
});

Route::get("/activacion/{codigo}","InvitadosController@activar");

Route::post("/complete/{id}", "invitadosController@complete");