<?php

namespace App\Http\Controllers;

use App\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function GuardarUsuario(Request $request)
    {

        if (!$request->get('usuario')) {
            return response()->json(array(
                'resultado' => -1,
                'mensaje' => 'Debe ingresar el campo usuario para continuar',
            ));
        }

        if (!$request->get('clave')) {
            return response()->json(array(
                'resultado' => -1,
                'mensaje' => 'Debe ingresar el campo contraseña para continuar',
            ));
        }

        if (!$request->get('nombres')) {
            return response()->json(array(
                'resultado' => -1,
                'mensaje' => 'Debe ingresar el campo nombres para continuar',
            ));
        }

        if (!$request->get('apellidos')) {
            return response()->json(array(
                'resultado' => -1,
                'mensaje' => 'Debe ingresar el campo apellidos para continuar',
            ));
        }

        if (!$request->get('email')) {
            return response()->json(array(
                'resultado' => -1,
                'mensaje' => 'Debe ingresar el campo email para continuar',
            ));
        }
        elseif (!filter_var($request->get('email'), FILTER_VALIDATE_EMAIL)) {
            return response()->json(array(
                'resultado' => -1,
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
                'resultado' => -2,
                'mensaje' => 'Grave error: ' . $e,
            ));
        }

    }

    public function ConsultarUsuario() {

        $usuario = new Usuario;

        try {

            $Usuario = Usuario::whereNotIn('id', [1,2])->orderBy('usuario', 'ASC')->get();

            if ($Usuario) {
                return response()->json(array(
                    'resultado' => 1,
                    'mensaje'   => 'Se econtraron datos',
                    'json'      => $Usuario
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
    	/*$datos = $request->all();

    	if ($usuario) {

			$usuarioVO = $usuario[0];	

			if ($usuarioVO->get_clave() == md5($_REQUEST["clave"])) {

				$request->session()->put('id_usuario', 'me@example.com');
				
				return 1;
			}
			else{

				return -1;
			}
		}
		else {

			return 0;
		}

    	// agregar a session
		$request->session()->put('email', 'me@example.com');

		// Olvidar session
		$request->session()->forget('email');

    	return $request->session()->get('email');*/
    }
}
