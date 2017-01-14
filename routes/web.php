<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

// Usuario
Route::get('/{pagina}','InformacionPaginaController@Consultar');
Route::post('/verificar/login','UsuarioController@VerificarUsuario');

// Administracion
Route::get('/administrador/inicio',function(){
    return View::make('administrador.inicio');
});
Route::get('/administrador/{carpeta}/{pagina}','NavegacionAdministradorController@Navegar');
