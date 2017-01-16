<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use App\InformacionPagina;
use App\Imagen;
use App\Team;
use App\Usuario;
use App\Rol;
use App\Persona;

class NavegacionController extends Controller
{
    var $seleccion	= ' class="active" ';
    var $menu 		= "";

    public function Administrador(Request $request,$carpeta,$pagina) {

        return !$request->session()->get('nombres') ? redirect('/inicio') : View("$carpeta.$pagina",
                                                                                 ['nombres' => $request->session()->get('nombres'),
                                                                                  'informacionPagina' => InformacionPaginaController::ConsultarInformacionPagina(),
                                                                                  'estadoInmueble' => EstadoInmuebleController::Consultar()]);
    }

    public function Usuario($pagina) {

        return View($pagina,['menu' => $this->obtenerMenu($pagina)]);
    }


    public function obtenerMenu($pagina) {

        $this->menu = '<li';
        $pagina === "inicio" ? $this->menu .= $this->seleccion : "";
        $this->menu .= '><a href="inicio">Inicio</a></li>';

        $this->menu .= '<li';
        $pagina === "nosotros" ? $this->menu .= $this->seleccion : "";
        $this->menu .= '><a href="nosotros">Nosotros</a></li>';

        $this->menu .= '<li';
        $pagina === "buscador" ? $this->menu .= $this->seleccion : "";
        $pagina === "detalle"  ? $this->menu .= $this->seleccion : "";
        $this->menu .= '><a href="buscador">Buscador</a></li>';

        $this->menu .= '<li';
        $pagina === "contacto" ? $this->menu .= $this->seleccion : "";
        $this->menu .= '><a href="contacto">Contacto</a></li>';

        $this->menu .= '<li';
        $pagina === "ingresar" ? $this->menu .= $this->seleccion : "";
        $this->menu .= '><a href="ingresar">Ingresar</a></li>';

        return $this->menu;
    }
}
