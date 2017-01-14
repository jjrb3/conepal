@extends('temas.stids1')

@section('content')
	<!-- Que hacemos -->
	<section id="que_hacemos">
	  	<div class="container">
	  		<div class="top_content">
		   		<div class="row">
			 		<div class="col-md-12">
						<h2 id="about" class="tituloskimber animated fadeInUp wow">
							Diseñamos y desarrollamos <br>plataformas digitares
						</h2>
						<div class="row">
					  		<div class="col-md-12">
					  			<center>
					  				<div class="col-md-2"></div>
					  				<div class="col-md-8">
							  		<img src="stids1/img/que_hacemos.png" width="300" class="animated fadeInUp wow">
									<p align="justify" class="animated fadeInUp wow">
										{{$InfPag['QUE_HACEMOS']}}
									</p>
									</div>
									<div class="col-md-2"></div>
								</center>
						  	</div>
						</div>
					</div>
				</div>
			</div>
	  	</div>  
	</section>
	<!-- Que hacemos -->

	<hr>

	<!-- Servicios & herramientas -->
	<section  id="servicios">
		<!-- Servicios -->
  		<div class="container">
			<h2 class="tituloskimber">Nuestros servicios</h2>
			<div class="service_area">
		  		<div class="row">
					@for ($i = 0; $i < count($servi); $i++)
		  				<div class="col-lg-4">
				  			<div class="service_block">		
				  				<h3 class="animated fadeInUp wow">{{$servi[$i]['NOMBRE']}}</h3>					  				
				  				<div class="icon2  delay-03s animated wow zoomIn"> 	
					  				<img src="resource/imagen_servicio/{{$servi[$i]['RUTA_IMAGEN']}}" width="200px">									
								</div>
								<p class="animated fadeInDown wow">
									{{$servi[$i]['DESCRIPCION']}}
								</p>
				  			</div>
						</div>			
					@endfor
				</div>
			</div>
  		</div>
		<!-- Fin servicios -->
		<hr>
		<!-- Herramientas -->
		<div class="container">
			<h2 class="blanco tituloskimber">Herramientas</h2>
			<div class="service_area">
  				<div class="row">
					<div class="col-lg-4">
			  			<div class="service_block">		
			  				<h3 class="animated fadeInUp wow">PHP 7</h3>					  				
			  				<div class="icon2  delay-03s animated wow zoomIn"> 	
				  				<img src="stids1/img/herramientas/php7.png" width="100px">
							</div>
							<br>
							<p class="animated fadeInDown wow">
								El lenguaje de programación de uso general de código del lado del servidor originalmente diseñado para el desarrollo web de contenido dinámico. 
								<br>
							</p>
			  			</div>
					</div>
					<div class="col-lg-4">
			  			<div class="service_block">
							<h3 class="animated fadeInUp wow">HTML5</h3>
							<div class="icon2  delay-03s animated wow zoomIn"> 
				  				<img src="stids1/img/herramientas/html5.png" width="100px">
							</div>
							<br>
							<p class="animated fadeInDown wow">
								Lenguaje de marcado usado para estructurar y presentar el contenido para la web. Es uno de los aspectos fundamentales para el funcionamiento de los sitios. 
								<br>
								<br>
							</p>
			  			</div>
			  		</div>
					<div class="col-lg-4">
						<div class="service_block">
							<h3 class="animated fadeInUp wow">CSS3</h3>
							<div class="icon2  delay-03s animated wow zoomIn"> 
				  				<img src="stids1/img/herramientas/css3.png" width="100px">
							</div>
							<br>
							<p class="animated fadeInDown wow">
								Las hojas de estilo en cascada nos ofrecen la posibilidad de definir las reglas y estilos de representación en diferentes dispositivos, escritorio, portátiles, móviles capaces de mostrar contenidos web. 
								<br>
							</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4">
						<div class="service_block">
							<h3 class="animated fadeInUp wow">JavaScript</h3>
							<div class="icon2  delay-03s animated wow zoomIn"> 
				  				<img src="stids1/img/herramientas/javascript.png" width="100px">
							</div>
							<br>
							<br>
							<p class="animated fadeInDown wow">
								Lenguaje de programación utilizado principalmente del lado del cliente (es decir, se ejecuta en nuestro ordenador, no en el servidor) permitiendo crear efectos atractivos y dinámicos en las páginas web.
								<br>
							</p>
						</div>
					</div>
			  		<div class="col-lg-4">
						<div class="service_block">
							<h3 class="animated fadeInUp wow">JQuery</h3>
							<div class="icon2  delay-03s animated wow zoomIn"> 
				  				<img src="stids1/img/herramientas/jquery.png" height="130px" >
							</div>
							<br>
							<p class="animated fadeInDown wow">
								Es uno de los complementos más esenciales para el desarrollo web, usado en millones de sitios en toda la web, ya que nos facilita mucho el desarrollo de aplicaciones enriquecidas del lado del cliente, en JavaScript, compatibles con todos los navegadores.
								<br>
							</p>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="service_block">
							<h3 class="animated fadeInUp wow">MySQL</h3>
							<div class="icon2  delay-03s animated wow zoomIn"> 
				  				<img src="stids1/img/herramientas/mysql.png" height="130px" >
							</div>
							<br>
							<p class="animated fadeInDown wow">
								Es la base de datos de código abierto de mayor aceptación mundial y permite la oferta económica de aplicaciones de bases de datos fiables, de alto rendimiento.
								<br>
							</p>
						</div>
					</div>
			  	</div>
				<div class="row">
					<div class="col-lg-4">
						<div class="service_block">
							<h3 class="animated fadeInUp wow">Laravel</h3>
							<div class="icon2  delay-03s animated wow zoomIn">
								<img src="stids1/img/herramientas/laravel.png" width="210">
							</div>
							<p class="animated fadeInDown wow">
								Es un framework de código abierto para desarrollar aplicaciones y servicios web con PHP. Su filosofía es desarrollar código PHP de forma elegante y simple, evitando el "código espagueti".
								<br>
							</p>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="service_block">
							<h3 class="animated fadeInUp wow">SQL Server</h3>
							<div class="icon2  delay-03s animated wow zoomIn">
								<img src="stids1/img/herramientas/sqlserver.png" height="130px" >
							</div>
							<br>
							<p class="animated fadeInDown wow">
								Es la base de la plataforma de datos de Microsoft, ofrece rendimiento crítico con tecnologías en memoria y mejores perspectivas de los datos, ya sea de forma local o en la nube.
								<br>
							</p>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="service_block">

						</div>
					</div>
				</div>
  			</div>
	  	</div>
	  	<!-- Fin herramientas -->
	</section>
	<!-- Fin servicios y herramientas -->	
@endsection