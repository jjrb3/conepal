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

Route::get('/{pagina}','NavegacionController@Usuario');
Route::get('/administrador/{carpeta}/{pagina}','NavegacionController@Administrador');
Route::post('/ingresar/verificar','SesionController@VerificarUsuario');
Route::get('/administrador/cerrarSession','SesionController@CerrarSesion');

// Administracion
Route::get('/administrador/inicio',function(){
    return View::make('administrador.inicio');
});

// Sesion de usuario
Route::post('/administrador/usuario/inicio/buscar','UsuarioController@ConsultarUsuario');
Route::post('/administrador/usuario/inicio/buscar/id','UsuarioController@ConsultarUsuarioId');
Route::post('/administrador/usuario/inicio/registrar','UsuarioController@GuardarUsuario');
Route::post('/administrador/usuario/inicio/actualizar','UsuarioController@ActualizarUsuario');
Route::post('/administrador/usuario/inicio/deshabilitar','UsuarioController@DeshabilitarUsuario');
