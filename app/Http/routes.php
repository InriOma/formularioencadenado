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

Route::get('formulario1', [
        'as' => 'formulario1',
        'uses' => 'formulariosController@formulario1'
]);

Route::post('formulario2', [
        'as' => 'formulario2',
        'uses' => 'formulariosController@formulario2'
]);

Route::post('formulario3', [
        'as' => 'formulario3',
        'uses' => 'formulariosController@formulario3'
]);




