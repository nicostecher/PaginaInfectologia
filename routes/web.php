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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/header', function(){
    return view("header");
});
Route::get('/home', function () {
    return view('home');
});

Route::get('/bibliografia', function () {
    return view('bibliografia');
});

Route::get('/casosClinicos', "CasosClinicosController@mostrarCasosClinicos");

Route::get('/nuevoCasoClinico',"CasosClinicosController@nuevoCasoClinico");

Route::post('/casosClinicos', "CasosClinicosController@cargarCasoClinico");

Route::get("/listadoCasosClinicos","CasosClinicosController@listadoCasosClinicos");

Route::get("/editarCasoClinico/{id}","CasosClinicosController@editarcasoClinico");

Route::post("/editarCasoClinico/{id}","CasosClinicosController@actualizarCasoClinico");

Route::post("/listadoCasosClinicos","CasosClinicosController@borrarCasoClinico");

Route::get('/clases', "ClasesController@mostrarClases");

Route::get('/nuevaClase', "ClasesController@nuevaClase");

Route::post('/clases', "ClasesController@cargarClase");

Route::get('/listadoClases',"ClasesController@listadoClases");

Route::post("/listadoClases", "ClasesController@borrarClases");

Route::get("/editarClase/{id}","ClasesController@editarClase");

Route::post("/editarClase/{id}","clasesController@actualizarClase");

Route::get('/cronograma',"CronogramaController@vista");

Route::get("/cronograma","CronogramaController@mostrarCronograma");

Route::get("/cargarCronograma", "CronogramaController@nuevoCronograma");

Route::post('/cronograma',"CronogramaController@cargarCronograma");

Route::get('/listadoCronogramas',"CronogramaController@listadoCronogramas");

Route::post('/listadoCronogramas', "CronogramaController@borrarCronograma");

Route::get("/editarCronograma/{id}","CronogramaController@editarCronograma");

Route::post("/editarCronograma/{id}","CronogramaController@actualizarCronograma");

route::get("/index", "NovedadesController@mostrarNovedades");

route::get("/cargarNovedades", "NovedadesController@nuevaNoticia");

route::post("/index", "NovedadesController@cargarNoticia");

route::get("/listadoNovedades", "NovedadesController@listadoNovedades");

Route::get("/editarNovedades/{id}","NovedadesController@editarNovedades");

Route::post("/editarNovedades/{id}","NovedadesController@actualizarNovedades");

Route::post('/listadoNovedades', "NovedadesController@borrarNovedad");

Route::get('/novedades', function () {
    return view('novedades');
});


route::get('/cuerpoDocente', function () {
    return view('cuerpoDocente');
});


Route::get('/sitiosDeInteres', function () {
    return view('sitiosDeInteres');
});

Route::get('/comisiones', function () {
    return view('comisiones');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
