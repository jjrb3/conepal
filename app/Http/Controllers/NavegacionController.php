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

use App\Http\Controllers\InmuebleController;


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

    public function Usuario(Request $request,$pagina) {

        $inmueble = new InmuebleController();

        return View($pagina,['menu' => $this->obtenerMenu($pagina),
                             'informacionPagina' => InformacionPaginaController::ConsultarInformacionPagina(),
                             'estadoInmueble' => EstadoInmuebleController::Consultar(),
                             'inmuebles' => $inmueble->Buscador($request),]);
    }


    public function obtenerMenu($pagina) {

        $this->menu = '<li';
        $pagina === "inicio" ? $this->menu .= $this->seleccion : "";
        $this->menu .= '><a href="inicio">Inicio</a></li>';

        $this->menu .= '<li';
        $pagina === "nosotros" ? $this->menu .= $this->seleccion : "";
        $this->menu .= '><a href="nosotros">Nosotros</a></li>';


        $this->menu .= '<li';
        $pagina === "servicios" ? $this->menu .= $this->seleccion : "";
        $this->menu .= '><a href="servicios">servicios</a></li>';

        $this->menu .= '<li';
        $pagina === "buscador" ? $this->menu .= $this->seleccion : "";
        $pagina === "detalle"  ? $this->menu .= $this->seleccion : "";
        $this->menu .= '><a href="buscador?tamanhioPagina=9&pagina=1&descripcion=&estado=&valor=">Buscador</a></li>';

        $this->menu .= '<li';
        $pagina === "contacto" ? $this->menu .= $this->seleccion : "";
        $this->menu .= '><a href="contacto">Contacto</a></li>';

        $this->menu .= '<li';
        $pagina === "ingresar" ? $this->menu .= $this->seleccion : "";
        $this->menu .= '><a href="ingresar">Ingresar</a></li>';

        return $this->menu;
    }
}
