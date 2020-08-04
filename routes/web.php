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

Route::get('/casosClinicos', "CasosClinicosController@vista");

Route::get('/novedades', function () {
    return view('novedades');
});


Route::get('/clases', "ClasesController@mostrarClases");

Route::post('/clases', "ClasesController@cargarClase");

Route::get('/listadoClases',"ClasesController@listadoClases");

Route::post("/listadoClases", "ClasesController@borrarClases");

Route::get("/editarClase/{id}","ClasesController@editarClase");

Route::post("/editarClase/{id}","clasesController@actualizarClase");

Route::get('/cronograma',"CronogramaController@vista");

Route::get("/cronograma","CronogramaController@mostrarCronograma");

Route::post('/cronograma',"CronogramaController@cargarCronograma");

Route::get('/cuerpoDocente', function () {
    return view('cuerpoDocente');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/sitiosDeInteres', function () {
    return view('sitiosDeInteres');
});

Route::get('/comisiones', function () {
    return view('comisiones');
});



Auth::routes();
/**

*Route::get('/register', 'Auth\RegisterController@validator');
*Route::post('/register', 'Auth\RegisterController@validator');
*Route::post('/register', 'RegisterController@crearUsuario');

*Route::get('/login', 'Auth\LoginController@validator');
*Route::post('/login', 'Auth\LoginController@validator');
*Route::post('/register', 'LoginController@traerUsuario');
*/
Route::get('/home', 'HomeController@index')->name('home');
