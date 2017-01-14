@extends('tema.stids1')

@section('content')
	
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicadores -->
		<ol class="carousel-indicators">
			@for ($i = 0; $i < count($banner); $i++)
				@if ($i == 0)
					<li data-target="#myCarousel" data-slide-to="{{$i}}" class="active"></li>
				@else
					<li data-target="#myCarousel" data-slide-to="{{$i}}"></li>
				@endif
			@endfor
		</ol>

		<!-- Sliders -->
		<div class="carousel-inner" role="listbox">
			@for ($i = 0; $i < count($banner); $i++)
				@if ($i == 0)
					<div class="item active">
						<img src="resource/imagen_banner/{{$banner[$i]['RUTA_IMAGEN']}}" alt="Image">
						<div class="carousel-caption">
							<p>{{$banner[$i]['DESCRIPCION']}}</p>
						</div>      
					</div>
				@else
					<div class="item">
						<img src="resource/imagen_banner/{{$banner[$i]['RUTA_IMAGEN']}}" alt="Image">
						<div class="carousel-caption">
							<p>{{$banner[$i]['DESCRIPCION']}}</p>
						</div>      
					</div>
				@endif
			@endfor
		</div>

		<!-- Controles de derecha a izquierda -->
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>	

 	<!-- Que hacemos -->
	<section id="que_hacemos">
	  	<div class="container">
	  		<div class="top_content">
		   		<div class="row">
			 		<div class="col-md-12">
						<h2 id="about" class="tituloskimber animated fadeInUp wow">
							Diseñamos y desarrollamos <br>plataformas digitales
						</h2>
						<div class="row">
					  		<div class="col-md-12">
					  			<center>
					  				<div class="col-md-1"></div>
					  				<div class="col-md-10">
							  		<img src="stids1/img/que_hacemos.png" width="300" class="animated fadeInUp wow">
									<p align="justify" class="animated fadeInUp wow">
										{{$InfPag['QUE_HACEMOS']}}
									</p>
									</div>
									<div class="col-md-1"></div>
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

	<!-- Nuestro equipo -->
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
	<!-- Fin de nuestro equipo -->

	<!-- Servicios -->
	<section  id="servicios">
  		<div class="container">
			<h2 class="tituloskimber">Nuestros Servicios</h2>
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
	</section>
	<!-- Servicios -->

@endsection