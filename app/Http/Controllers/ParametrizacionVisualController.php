<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParametrizacionVisualController extends Controller
{
	var $seleccion	= ' class="active" ';
	var $menu 		= "";
	var $pie 		= "";


    public function publicarMenu($pagina) {

		$this->menu = '<li';
		$pagina === "inicio" ? $this->menu .= $this->seleccion : "";
		$this->menu .= '><a href="inicio">Inicio</a></li>';

		$this->menu .= '<li';
		$pagina === "nosotros" ? $this->menu .= $this->seleccion : "";
		$this->menu .= '><a href="nosotros">Nosotros</a></li>';

		$this->menu .= '<li';
		$pagina === "queHacemos" ? $this->menu .= $this->seleccion : "";
		$this->menu .= '><a href="queHacemos">Que Hacemos</a></li>';

		/*$this->menu .= '<li';
		$pagina === "portafolio" ? $this->menu .= $this->seleccion : "";
		$this->menu .= '><a href="portafolio">Portafolio</a></li>';*/

		/*$this->menu .= '<li';
		$pagina === "clientes" ? $this->menu .= $this->seleccion : "";
		$this->menu .= '><a href="clientes">Clientes</a></li>';*/

		/*$this->menu .= '<li';
		$pagina === "faq" ? $this->menu .= $this->seleccion : "";
		$this->menu .= '><a href="faq">FAQ</a></li>';*/

		$this->menu .= '<li';
		$pagina === "contacto" ? $this->menu .= $this->seleccion : "";
		$this->menu .= '><a href="contacto">Contacto</a></li>';

		$this->menu .= '<li';
		$pagina === "ingresar" ? $this->menu .= $this->seleccion : "";
		$this->menu .= '><a href="ingresar">Ingresar</a></li>';
		
		return $this->menu;
	}


	public function publicarPiePagina() {

		$this->pie  = '<div class="contenidofooter">
				  			<div>
				  				<h3>Información</h3><hr>
								<span><a class="a" href="">Nosotros</a></span><br> 
								<span><a class="a" href="">Nuestro equipo</a></span><br>
								<span><a class="a" href="">Servicios</a></span><br>	
								<span><a class="a" href="">Politicas de privacidad</a></span><br>
								<span><a class="a" href="">Preguntas frecuentes</a></span><br>
								<span><a class="a" href="">PQR</a></span><br>
								<span><a class="a" href="">Terminos y condiciones</a></span> 
				  			</div>            
						</div>
						<div class="contenidofooter">
				  			<h3>Su Cuenta</h3><hr>
						<span><a class="a" href="">Mi cuenta</a></span><br>
						<span><a class="a" href="">Registrarse</a></span><br>
						<span><a class="a" href="">Restablecer contraseña</a></span><br>       
						</div>
						<div class="contenidofooter">
				  			<h3>Redes Sociales</h3><hr>
							<p style="color:#26b89c">		
								Lugar: B/quilla - Colombia 
								<br>
				   				Telefono: (+57) 301-4954136  (+57) 301-7597689
				   				<br>      
				   				Correo:stidsas@gmail.com
				   			</p>
							<a href="#"> <img class="redes img-circle" src="stids1/img/rf/facebook.png"></a>
							<a href="#"><img class="redes img-circle" src="stids1/img/rf/plus.png"></a>
							<a href="#"> <img class="redes img-circle" src="stids1/img/rf/twitter.png"></a>

						</div>    
						<div class="contenidofooter">
				  			<h3>Mas de stids</h3><hr>
				  			<span><a class="a" href="">Galeria</a></span><br>
							<span><a class="a" href="">Desarrolladores</a></span><br>
							<span><a class="a" href="">Como Registrarse</a></span><br>  
							<span><a class="a" href="">Porqué escogernos</a></span><br>
							<span><a class="a" href="">Videos</a></span><br>  
						</div>
						<br>
						<br> 
						<div>
							<p>
							    <center>
							        Copyright © 2016 <a class="a" href="#">Stids S.A.S</a> | 
							        Designed by <a class="a" href="#" target="_parent">Stids S.A.S Developers</a> | 
							        Colombia
							        <br>
							    </center>
							</p>
						</div>
						';
		
		return $this->pie;
	}


	public function scriptPorDefecto() {

		$script = '
		<!-- Mainly scripts -->
	    <script src="../bootstrap/js/jquery-2.1.1.js"></script>
	    <script src="../bootstrap/js/bootstrap.min.js"></script>
	    <script src="../bootstrap/js/jquery.metisMenu.js"></script>

	    <!-- Custom and plugin javascript -->
	    <script src="../bootstrap/js/inspinia.js"></script>
	    <script src="../bootstrap/js/pace.min.js"></script>

	    <!-- Toastr -->
	    <script src="../bootstrap/js/toastr.min.js"></script>

	    <!-- Script de Sitds -->
	    <script type="text/javascript" src="../js/script.js"></script>
		';

		return $script;
	}


	public function estiloPorDefecto() {

		$estilo = '
		<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
	    <link href="../bootstrap/font-awesome/css/font-awesome.css" rel="stylesheet">

	    <link href="../bootstrap/css/toastr.min.css" rel="stylesheet">
	    
	    <link href="../bootstrap/css/jquery.gritter.css" rel="stylesheet">

	    <link href="../bootstrap/css/animate.css" rel="stylesheet">
	    <link href="../bootstrap/css/style.css" rel="stylesheet">
		';

		return $estilo;
	}


	public function menuIngreso($vMenu,$vSubmenu) {

		$menuDAO = new MenuDAO();

		$menu = $menuDAO->consultarPadres(1);

		if ($menu) {

		    $arreglo = array();

		    foreach ($menu as $lista_m) {

		    	$lista_m->get_nombre() == $vMenu ? $v1 = 'class="active"' : $v1 = '';
		        
		        $this->menu .= '<li ' . $v1 . '>';
		        $this->menu .= '<a href="' . $lista_m->get_enlace() . '">
				                    <i class="fa ' . $lista_m->get_icono() . '"></i> 
				                    <span class="nav-label">' . $lista_m->get_nombre() . '</span> 
				                    <span class="fa arrow"></span>
				                </a>';


		        $arreglo["PADRE"]  = $lista_m->get_id();
		        $arreglo["ESTADO"] = 1;

		        $submenu = $menuDAO->consultarTabla($arreglo);

		        if ($submenu) {

		            $this->menu .= '<ul class="nav nav-second-level">';

		            foreach ($submenu as $lista_sm) {
		                
		                $lista_sm->get_nombre() == $vSubmenu ? $v2 = 'class="active"' : $v2 = '';

		                $this->menu .= '<li ' . $v2 . '><a href="' . $lista_sm->get_enlace() . '">' . $lista_sm->get_nombre();

		                if ($lista_sm->get_nuevo()) {

		                    $this->menu .= ' <span class="label label-primary pull-right">NUEVO</span>';
		                }

		                $this->menu .= '</a></li>';
		            }

		            $this->menu .= '</ul>';
		        }

		        $this->menu .= '</li>';
		    }
		}

		return $this->menu;
	}
}
