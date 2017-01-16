<?php

namespace App\Http\Controllers;

use App\EstadoInmueble;
use Illuminate\Http\Request;

use App\InformacionPagina;

use App\Http\Controllers\ParametrizacionVisual;

class EstadoInmuebleController extends Controller
{
    public static function Consultar() {
        try {
            return EstadoInmueble::where('estado','=','1')->get()->toArray();
        } catch (Exception $e) {
            return 'Grave error: ' . $e;
        }
    }
}
