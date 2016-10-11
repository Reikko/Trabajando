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
    return view('layouts.admin');
});

Route::get('fr/estado/{id}','EdoController@getColonias');
Route::get('fr/{col}/estado/{id}','EdoController@getEditColonias');

Route::get('calle/estado/{id}','EdoController@getColonias');
Route::get('calle/col/{id}','ColControll@getFraccion');


Route::resource('usuario','UsuarioController');
Route::resource('fr','FracControl');
Route::resource('edo','EdoController');
Route::resource('registro','Registro');
Route::resource('cliente','ClienteControl');
Route::resource('colonias','ColControll');
Route::resource('calle','cofControl');


