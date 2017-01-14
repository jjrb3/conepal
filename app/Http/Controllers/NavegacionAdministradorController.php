<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\InformacionPagina;
use App\Imagen;
use App\Team;
use App\Usuario;
use App\Rol;
use App\Persona;

use App\Http\Controllers\ParametrizacionVisual;

class NavegacionAdministradorController extends Controller
{
    public function Navegar($carpeta,$pagina) {

        return View("$carpeta.$pagina");
    }
}
