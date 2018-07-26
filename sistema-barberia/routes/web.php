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

//Route::get('/barberos', function(){
//	return "seccion barberos";
//});
Route::get('/barberos', 'UserController@index')
->name('users.index');

Route::get('/barberos/{id}','UserController@show')
	   //http://127.0.0.1:8000/detalle_barbero/5 //url para forma1 y 2
	   //return "barbero con id : ".$id; //forma2
	   //http://127.0.0.1:8000/detalle_barbero?id=10 //forma3
	   //return "barbero con id : ".$_GET['id']; //forma3
->where ('id', '[0-9]+') //se coloca condicional numeral para no confundir con ruta de abajo
->name('users.show');

Route::get('/barberos/nuevo', 'UserController@create')->name('users.create');

Route::post('/barberos', 'UserController@store');

Route::get('/saludos/{nick}/{apellido?}','WelcomeUserController@index');