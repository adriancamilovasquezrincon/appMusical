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

//Socios
Route::get('/api/socios','sociosController@index');
Route::post('/api/socios/guardar','sociosController@store')->name('guardar');
Route::put('/api/socios/actualizar','sociosController@update')->name('actualizar');
Route::delete('/api/socios/eliminar','sociosController@destroy')->name('eliminar');
//Cantantes
Route::get('/api/cantantes','cantantesController@index');
Route::post('/api/cantantes/guardar','cantantesController@store')->name('guardar');
Route::put('/api/cantantes/actualizar','cantantesController@update')->name('actualizar');
Route::delete('/api/cantantes/eliminar','cantantesController@destroy')->name('eliminar');
//Maestros
Route::get('/api/maestros','maestrosController@index');
Route::post('/api/maestros/guardar','maestrosController@store')->name('guardar');
Route::put('/api/maestros/actualizar','maestrosController@update')->name('actualizar');
Route::delete('/api/maestros/eliminar','maestrosController@destroy')->name('eliminar');
//Estudiantes
Route::get('/api/estudiantiles','estudiantilesController@index');
Route::post('/api/estudiantiles/guardar','estudiantilesController@store')->name('guardar');
Route::put('/api/estudiantiles/actualizar','estudiantilesController@update')->name('actualizar');
Route::delete('/api/estudiantiles/eliminar','estudiantilesController@destroy')->name('eliminar');
//Profesores
Route::get('/api/profesores','profesoresController@index');
Route::post('/api/profesores/guardar','profesoresController@store')->name('guardar');
Route::put('/api/profesores/actualizar','profesoresController@update')->name('actualizar');
Route::delete('/api/profesores/eliminar','profesoresController@destroy')->name('eliminar');
//Interpretes
Route::get('/api/instrumentales','instrumentalesController@index');
Route::post('/api/instrumentales/guardar','instrumentalesController@store')->name('guardar');
Route::put('/api/instrumentales/actualizar','instrumentalesController@update')->name('actualizar');
Route::delete('/api/instrumentales/eliminar','instrumentalesController@destroy')->name('eliminar');
//Universitarios
Route::get('/api/universitarios','universitariosController@index');
Route::post('/api/universitarios/guardar','universitariosController@store')->name('guardar');
Route::put('/api/universitarios/actualizar','universitariosController@update')->name('actualizar');
Route::delete('/api/universitarios/eliminar','universitariosController@destroy')->name('eliminar');
//Aprendices
Route::get('/api/aprendices','aprendicesController@index');
Route::post('/api/aprendices/guardar','aprendicesController@store')->name('guardar');
Route::put('/api/aprendices/actualizar','aprendicesController@update')->name('actualizar');
Route::delete('/api/aprendices/eliminar','aprendicesController@destroy')->name('eliminar');