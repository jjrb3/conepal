<?php

namespace App\Http\Controllers;

use App\Inmueble;
use App\Usuario;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;


class inmuebleController extends Controller
{
    public function DeshabilitarUsuario(Request $request)
    {
        $mensaje1 = '';
        $mensaje2 = '';
        $usuario = Usuario::Find($request->get('id'));
        $usuario->estado = (int)$request->get('estado');

        try {
            if ($usuario->save()) {
                $request->get('estado') == 1 ? $mensaje1 = 'habilió' :  $mensaje1 = 'deshabilitó';
                $request->get('estado') == 1 ? $mensaje2 = 'habilitar' :  $mensaje2 = 'deshabilitar';
                return response()->json(array(
                    'resultado' => 1,
                    'mensaje' => 'Se ' . $mensaje1 . ' a la persona el usuario correctamente',
                ));
            } else {
                return response()->json(array(
                    'resultado' => 0,
                    'mensaje' => 'Se encontraron problemas al ' . $mensaje2 . ' el usuario',
                ));
            }
        } catch (Exception $e) {
            return response()->json(array(
                'resultado' => -1,
                'mensaje' => 'Grave error: ' . $e,
            ));
        }

    }

    public function ActualizarUsuario(Request $request)
    {
        if (!$request->get('usuario')) {
            return response()->json(array(
                'resultado' => 0,
                'mensaje' => 'Debe ingresar el campo usuario para continuar',
            ));
        }

        if (!$request->get('nombres')) {
            return response()->json(array(
                'resultado' => 0,
                'mensaje' => 'Debe ingresar el campo nombres para continuar',
            ));
        }

        if (!$request->get('apellidos')) {
            return response()->json(array(
                'resultado' => 0,
                'mensaje' => 'Debe ingresar el campo apellidos para continuar',
            ));
        }

        if (!$request->get('email')) {
            return response()->json(array(
                'resultado' => 0,
                'mensaje' => 'Debe ingresar el campo email para continuar',
            ));
        }
        elseif (!filter_var($request->get('email'), FILTER_VALIDATE_EMAIL)) {
            return response()->json(array(
                'resultado' => 0,
                'mensaje' => 'El correo digitado no es correcto',
            ));
        }

        $usuario = Usuario::Find($request->get('id'));
        $usuario->usuario = trim($request->get('usuario'));
        $request->get('clave') ? $usuario->clave = md5($request->get('clave')) : '';
        $usuario->nombres = $request->get('nombres');
        $usuario->apellidos = $request->get('apellidos');
        $usuario->correo = $request->get('email');

        try {
            if ($usuario->save()) {
                return response()->json(array(
                    'resultado' => 1,
                    'mensaje' => 'Se actualizó el usuario correctamente',
                ));
            } else {
                return response()->json(array(
                    'resultado' => 0,
                    'mensaje' => 'Se encontraron problemas al crear el usuario',
                ));
            }
        } catch (Exception $e) {
            return response()->json(array(
                'resultado' => -1,
                'mensaje' => 'Grave error: ' . $e,
            ));
        }

    }

    public function GuardarUsuario(Request $request)
    {

        if (!$request->get('usuario')) {
            return response()->json(array(
                'resultado' => 0,
                'mensaje' => 'Debe ingresar el campo usuario para continuar',
            ));
        }

        if (!$request->get('clave')) {
            return response()->json(array(
                'resultado' => 0,
                'mensaje' => 'Debe ingresar el campo contraseña para continuar',
            ));
        }

        if (!$request->get('nombres')) {
            return response()->json(array(
                'resultado' => 0,
                'mensaje' => 'Debe ingresar el campo nombres para continuar',
            ));
        }

        if (!$request->get('apellidos')) {
            return response()->json(array(
                'resultado' => 0,
                'mensaje' => 'Debe ingresar el campo apellidos para continuar',
            ));
        }

        if (!$request->get('email')) {
            return response()->json(array(
                'resultado' => 0,
                'mensaje' => 'Debe ingresar el campo email para continuar',
            ));
        }
        elseif (!filter_var($request->get('email'), FILTER_VALIDATE_EMAIL)) {
            return response()->json(array(
                'resultado' => 0,
                'mensaje' => 'El correo digitado no es correcto',
            ));
        }

        $usuario = new Usuario;
        $usuario->usuario = trim($request->get('usuario'));
        $usuario->clave = md5($request->get('clave'));
        $usuario->nombres = $request->get('nombres');
        $usuario->apellidos = $request->get('apellidos');
        $usuario->correo = $request->get('email');

        try {
            if ($usuario->save()) {
                return response()->json(array(
                    'resultado' => 1,
                    'mensaje' => 'Se creó el usuario correctamente',
                ));
            } else {
                return response()->json(array(
                    'resultado' => 0,
                    'mensaje' => 'Se encontraron problemas al crear el usuario',
                ));
            }
        } catch (Exception $e) {
            return response()->json(array(
                'resultado' => -1,
                'mensaje' => 'Grave error: ' . $e,
            ));
        }
    }

    public function ConsultarUsuarioId(Request $request)
    {
        try {
            $usuario = Usuario::where('id','=',$request->get('id'))->get();

            if ($usuario) {
                return response()->json(array(
                    'resultado' => 1,
                    'mensaje' => 'Se econtraron datos',
                    'json' => $usuario
                ));
            } else {
                return response()->json(array(
                    'resultado' => 0,
                    'mensaje' => 'No se encontraron resultados para la consulta',
                ));
            }
        } catch (Exception $e) {
            return response()->json(array(
                'resultado' => -1,
                'mensaje' => 'Grave error: ' . $e,
            ));
        }
    }

    public function ConsultarInmueble(Request $request)
    {
        $currentPage = $request->get('pagina');

        // Fuerza a estar en la pagina
        Paginator::currentPageResolver(function() use ($currentPage) {
            return $currentPage;
        });

        try {

            if ($request->get('buscar')) {
                $inmueble = Inmueble::select('inmueble.*','estado_inmueble.nombre as estado_inmueble')
                                    ->join('estado_inmueble','inmueble.id_estado_inmueble','=','estado_inmueble.id')
                                    ->where('inmueble.estado', '=', '1')
                                    ->where('inmueble.nombre', 'like', '%'.$request->get('buscar').'%')
                                    ->orwhere('inmueble.valor', 'like', '%'.$request->get('buscar').'%')
                                    ->orwhere('inmueble.contacto', 'like', '%'.$request->get('buscar').'%')
                                    ->orderBy('inmueble.nombre', 'DESC')
                                    ->paginate($request->get('tamanhioPagina'));

                print_r($inmueble);
                die;
            }
            else {

                $inmueble = Inmueble::select('inmueble.*','estado_inmueble.nombre as estado_inmueble')
                                    ->join('estado_inmueble','inmueble.id_estado_inmueble','=','estado_inmueble.id')
                                    ->where('inmueble.estado', '=', '1')
                                    ->orderBy('inmueble.nombre', 'DESC')
                                    ->paginate($request->get('tamanhioPagina'));
            }



            if (count($inmueble)) {
                return response()->json(array(
                    'resultado' => 1,
                    'mensaje'   => 'Se econtraron datos',
                    'json'      => $inmueble
                ));
            }
            else {
                return response()->json(array(
                    'resultado' => 0,
                    'mensaje'   => 'No se encontraron resultados para la consulta',
                ));
            }
        }
        catch (Exception $e) {
            return response()->json(array(
                'resultado' => -2,
                'mensaje'   => 'Grave error: ' . $e,
            ));
        }
    }
}
