<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function getGuardarUsuario(Request $request) {

        return 'jeremy';
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
