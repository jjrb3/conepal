@extends('temas.stids1')

@section('content')
	<section id="top_content" class="top_cont_outer">
	  <!--<div class="top_cont_inner"> -->

		<div class="container">
		  	<div class="top_content">
		   		<div class="row">
			 		<div class="col-md-12">
						<h2 id="about" class="tituloskimber animated fadeInUp wow">
							Sobre Nosotros
						</h2>
						<hr class="featurette-divider">
						<div class="row">
					  		<div class="col-md-6">
								<img src="stids1/img/nosotros.jpg" width="500" class="animated fadeInUp wow">
					  		</div>
						  	<div class="col-md-6">
								<p align="justify" class="animated fadeInUp wow">
									{{$InfPag['QUIENES_SOMOS']}}
									<br>
									<br>
									Llevamos nuestros servicios con responsabilidad para que el cliente encuentre en nosotros total satisfacción ya sea en proyectos básicos o muy complejos.
									<br>
									<br>
									<b>¿Que ofrecemos?</b>
									<ul class="list-unstyled">
										<li><i class="fa fa-caret-right pr-10 text-colored"></i> Soporte técnico.</li>
										<li><i class="fa fa-caret-right pr-10 text-colored"></i> Diseño adaptable.</li>
										<li><i class="fa fa-caret-right pr-10 text-colored"></i> Seguridad.</li>
										<li><i class="fa fa-caret-right pr-10 text-colored"></i> Actualizaciones.</li>
										<li><i class="fa fa-caret-right pr-10 text-colored"></i> Trabajos terminados a tiempo.</li>
									</ul>
								</p>
						  	</div>
						</div>
					</div>
				</div>
			</div>
	  	</div>
	</section>
	<hr>
	<section>
		<div class="container">
		  	<div class="top_content" style="margin-top: -50px;">
		   		<div class="row">
			 		<div class="col-md-12">
						<div class="row">
						  	<div class="col-md-4">
							    <div class="BarraSuperior">
									<h2 class="tituloskimber animated fadeInUp wow">Misión</h2>
									<br>
									<p align="justify">
										Desarrollar a nuestros clientes sus sueños tecnológicos e innovadores para su empresa con una alta calidad de trabajo aplicando de manera óptima los más altos estándares tecnológicos y satisfaciendo siempre la necesidad de todos nuestros clientes.
									</p>	
								</div>								
						  	</div>
					  		<div class="col-md-4">
								<div class="BarraSuperior">
									<h2 class="tituloskimber animated fadeInUp wow">Visión</h2>
									<br>
									<p align="justify">
										Para el 2019 queremos ser la empresa líder en servicios tecnológicos y en modelo de desarrollo comprometiéndonos así con todos los posibles problemas tecnológicos que presenten nuestros clientes ofreciendo soluciones de una forma eficaz, y brindarle a futuro herramientas de tecnología.
									</p>
								</div>								
					  		</div>
						  	<div class="col-md-4">
							    <div class="BarraSuperior">
									<h2 class="tituloskimber animated fadeInUp wow">Valores</h2>
									<br>
									<div class="col-md-8">
									<p align="justify">
										<ul class="list-unstyled">
											<li><i class="fa fa-caret-right pr-10 text-colored"></i> Comprometidos.</li>
											<li><i class="fa fa-caret-right pr-10 text-colored"></i> Trabajo en equipo.</li>
											<li><i class="fa fa-caret-right pr-10 text-colored"></i> Seguridad.</li>
											<li><i class="fa fa-caret-right pr-10 text-colored"></i> Creativos.</li>
										</ul>
									</p>	
									</div>
									<div class="col-md-4">
									<p align="justify">
										<ul class="list-unstyled">
											<li><i class="fa fa-caret-right pr-10 text-colored"></i> Respeto.</li>
											<li><i class="fa fa-caret-right pr-10 text-colored"></i> Honestidad.</li>
										</ul>
									</p>
									</div>	
								</div>
								<br>
								<br>
						  	</div>
						</div>
					</div>
				</div>
			</div>
	  	</div>
	</section>
	<section id="que_hacemos">
	  	<div class="container">
			<h2 id="about" class="tituloskimber">Nuestro equipo</h2>
			<div class="row">
				@for ($i = 0; $i < count($equipo); $i++)
					<div class="col-lg-4">
			  			<div class="service_block">		
			  				<div class="icon2  delay-03s animated wow zoomIn"> 	
			  					<center>
			  						<div class="avatar" style="background-image: url('resource/imagen_perfil/{{$equipo[$i]['RUTA_IMAGEN']}}');"></div>							
			  					</center>
							</div>
							<h3 class="animated fadeInUp wow">{{$equipo[$i]['NOMBRE']}}</h3>
							<p class="animated fadeInDown wow">
								<b>{{strtoupper($equipo[$i]['NOMBRES'])}} {{strtoupper($equipo[$i]['APELLIDOS'])}}</b>
								<br>
								"{{$equipo[$i]['MENSAJE']}}"
							</p>
			  			</div>
					</div>
				@endfor
			</div>
		</div>
	</section>
	<br>
	<br>
	<br>
@endsection