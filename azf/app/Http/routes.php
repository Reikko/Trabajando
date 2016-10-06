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

Route::get('/', function () {
    return view('welcome');
});

Route::get('fr/towns/{id}','EdoController@getColonias');

Route::resource('usuario','UsuarioController');
Route::resource('fr','FracControl');
Route::resource('edo','EdoController');
Route::resource('registro','Registro');
Route::resource('cliente','ClienteControl');
Route::resource('colonias','ColControll');


