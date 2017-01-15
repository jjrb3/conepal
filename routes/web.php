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

use Illuminate\Http\Request;

Route::get('/{pagina}','NavegacionController@Usuario');
Route::get('/administrador/{carpeta}/{pagina}','NavegacionController@Administrador');
Route::post('/ingresar/verificar','SesionController@VerificarUsuario');
Route::get('/administrador/cerrarSession','SesionController@CerrarSesion');

// Administracion
Route::get('/administrador/inicio',function(Request $request){
    return View::make('administrador.inicio',['nombres' => $request->session()->get('nombres')]);
});

// Sesion de usuario
Route::post('/administrador/usuario/inicio/buscar','UsuarioController@ConsultarUsuario');
Route::post('/administrador/usuario/inicio/buscar/id','UsuarioController@ConsultarUsuarioId');
Route::post('/administrador/usuario/inicio/registrar','UsuarioController@GuardarUsuario');
Route::post('/administrador/usuario/inicio/actualizar','UsuarioController@ActualizarUsuario');
Route::post('/administrador/usuario/inicio/deshabilitar','UsuarioController@DeshabilitarUsuario');

// Sesion de información
Route::post('/administrador/informacion/inicio/actualizar','InformacionPaginaController@ActualizarInformacionPagina');

// Sesion de bienes e inmuebles
Route::post('/administrador/bienesInmuebles/inicio/buscar','InmuebleController@ConsultarInmueble');
Route::post('/administrador/bienesInmuebles/inicio/buscar/id','InmuebleController@ConsultarUsuarioId');
Route::post('/administrador/bienesInmuebles/inicio/registrar','InmuebleController@GuardarUsuario');
Route::post('/administrador/bienesInmuebles/inicio/actualizar','InmuebleController@ActualizarUsuario');
Route::post('/administrador/bienesInmuebles/inicio/deshabilitar','InmuebleController@DeshabilitarUsuario');