<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::resource('modulo','ModuloController');
Route::resource('usuario','UsuarioController');
Route::resource('uso','ModuloUsoController');
Route::get('/asignar/{idmodulo}',"ModuloUsoController@asignar");
Route::get('/terminar/{idmodulo}',"ModuloUsoController@terminar");
Route::get('/admin',"AdminController@admin");
Route::resource('login','LogController');

Route::get('/', function () {
    return view('logear');
});
