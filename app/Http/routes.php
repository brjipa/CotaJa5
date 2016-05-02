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

Route::get('/cadastro', function() {
    return view('usuario.cadastro-user');
});

Route::get('/login', function() {
    return view('login');
});

Route::get('/contato', function() {
    return view('contato');
});

Route::post('/usuario/cadastro', function(){
    return view('usuario.cadastro');
});

Route::auth();

Route::get('/home', 'HomeController@index');
