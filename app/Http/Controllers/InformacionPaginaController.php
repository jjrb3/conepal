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

class InformacionPaginaController extends Controller
{
	public function Consultar($pagina) {

		$ParVis = new ParametrizacionVisualController();

		// Consulta
		$InfPag = InformacionPagina::findOrFail(1);
		$InfPag = InformacionPagina::where('ID', '=', 1)->firstOrFail();
		$Banner = Imagen::where('ID_TIPO_IMAGEN', '=', 6)->orderBy('ORDEN', 'ASC')->get();
		$Servic = Imagen::where('ID_TIPO_IMAGEN', '=', 7)->orderBy('ORDEN', 'ASC')->get();    
		$Equipo = Team::join('USUARIO','TEAM.ID_USUARIO','=','USUARIO.ID')
					  ->join('ROL','USUARIO.ID_ROL','=','ROL.ID')
					  ->join('PERSONA','USUARIO.ID_PERSONA','=','PERSONA.ID')
					  ->select('PERSONA.NOMBRES','PERSONA.APELLIDOS','PERSONA.RUTA_IMAGEN','PERSONA.MENSAJE','ROL.NOMBRE')
					  ->where('ROL.ESTADO','=','1')
					  ->where('PERSONA.ESTADO','=','1')
					  ->where('USUARIO.ESTADO','=','1')
					  ->orderBy('TEAM.ORDEN','ASC')->get();

		
		return view($pagina, ['InfPag'  => $InfPag->toArray(),
							  'menu'    => $ParVis->publicarMenu($pagina),
							  'pie'		=> $ParVis->publicarPiePagina(),
							  'banner'  => $Banner->toArray(),
							  'servi'   => $Servic->toArray(),
							  'equipo'  => $Equipo->toArray()]);
		
	}
}
