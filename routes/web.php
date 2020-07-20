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

Route::get('/clases', "ClasesController@vista");

Route::get('/clases', "ClasesController@mostrarClases");

Route::post('/clases', "ClasesController@cargarClase");

Route::get('/cronograma',"CronogramaController@vista");

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


Route::get('/home', 'HomeController@index')->name('home');
