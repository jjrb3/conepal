@extends('tema.usuario')

@section('content')
	@php ($cantidadSlider = 10)
	@php ($cantidadCarrusel = 30)
	@php ($url = '')
	<div class="">
		<div id="slider" class="sl-slider-wrapper">
			<input type="hidden" >
			<div class="sl-slider">
				<div id="slider"></div>
				@if ($inmuebles["resultado"] == 1)
					@php ($cnt = 0)
					@foreach($inmuebles["datos"]["data"] as $inmueble)
						@php ($cnt++)
						{{$inmuebles["imagenes"][$inmueble['id']][0]}}
						@if ($cnt%2==0)
							<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="1">
						@else
							<div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="2" data-slice2-scale="1">
						@endif
							<div class="sl-slide-inner">
								<div class="bg-img" style="background-image: url('{{$url}}recursos/imagen_inmueble/{{$inmuebles["imagenes"][$inmueble['id']][0]}}');"></div>
								<h2><a href="detalle?id={{$inmueble['id']}}">{{$inmueble['nombre']}}</a></h2>
								<blockquote>
									<p class="location"><span class="glyphicon glyphicon-map-marker"></span> {{$inmueble['direccion']}}</p>
									<p>{{$inmueble['descripcion']}}</p>
									<cite>$ {{number_format($inmueble['valor'])}}</cite>
								</blockquote>
							</div>
						</div>
						@if($cantidadSlider <= $cnt)
							@break
						@endif
					@endforeach
				@endif
			</div><!-- /sl-slider -->



			<nav id="nav-dots" class="nav-dots">
				@if ($inmuebles["resultado"] == 1)
					@php ($cnt = 0)
					@foreach($inmuebles["datos"]["data"] as $inmueble)
						@php ($cnt++)
						@if($cnt == 1)
							<span class="nav-dot-current"></span>
						@else
							<span></span>
						@endif
						@if($cantidadSlider <= $cnt)
							@break
						@endif
					@endforeach
				@endif
			</nav>

		</div><!-- /slider-wrapper -->
	</div>



	<div class="banner-search">
		<div class="container">
			<!-- banner -->

			<div class="searchbar">
				<div class="row">
					<center><h1>CONIPAL</h1></center>
					<div class="col-lg-5 col-lg-offset-1 col-sm-6 ">
						<p>Las mejores ofertas las encuentras en nuestra inmobiliaria<br>
							Busca nuestras propiedades de la forma mas fácil.</p>
						<center><button class="btn btn-info"><a style="color: white;" href="ingresar" target="_blank">Ingresar</a></button> </center>
					</div>

					<div class="col-lg-6 col-sm-6">
						<form action="buscador" method="get">
							<input type="hidden" name="tamanhioPagina" value="12">
							<input type="hidden" name="pagina" value="1">
							<input type="text" name="descripcion" class="form-control" placeholder="Buscar propiedades">
							<div class="row">
								<div class="col-lg-3 col-sm-3 ">
									<select name="estado" class="form-control">
										<option value="">Estado</option>
										@foreach ($estadoInmueble as $estado)
											<option value="{{$estado['id']}}">{{$estado['nombre']}}</option>
										@endforeach
									</select>
								</div>
								<div class="col-lg-6 col-sm-4">
									<select class="form-control" name="valor">
										<option value="">Precio</option>
										@for($i=0;$i<10;$i++)
											<option value="{{(($i) * 50000000)}};{{(($i+1) * 50000000)}}">${{number_format(($i) * 50000000)}} - ${{number_format(($i+1) * 50000000)}}</option>
										@endfor
										<option value="500000000;adelante">$500,000,000 - En adelante</option>
									</select>
								</div>
								<div class="col-lg-3 col-sm-4">
									<button type="submit" class="btn btn-success">Buscar</button>
								</div>
							</div>
						</form>
					</div>

				</div>
			</div>
		</div>
	</div>
	<!-- banner -->
	<div class="container">
		<div class="properties-listing spacer"> <a style="color: #df0023;" href="buscador" class="pull-right viewall">Ver Todo</a>
			<h2>Propiedades</h2>
			<div id="owl-example" class="owl-carousel">

				@if ($inmuebles["resultado"] == 1)
					@php ($cnt = 0)
					@foreach($inmuebles["datos"]["data"] as $inmueble)
						@php ($cnt++)
						<div class="properties">
							<div class="image-holder"><img src="{{$url}}recursos/imagen_inmueble/{{$inmuebles["imagenes"][$inmueble["id"]][0]}}	" class="img-responsive" alt="properties" style="width:198px;height:91px"/>
								<div class="status sold">{{$inmueble['estado_inmueble']}}</div>
							</div>
							<h4><a style="color: #df0023;" href="property-detail.php">Ahora en:</a></h4>
							<p class="price">Precio: $ {{number_format($inmueble['valor'])}}</p>
							<p class="price">Precio: {{$inmueble['nombre']}}</p>
							<a class="btn btn-primary" href="detalle?id={{$inmueble['id']}}">Ver Detalles</a>
						</div>
					@if($cantidadCarrusel <= $cnt)
						@break
					@endif
					@endforeach
				@endif
			</div>
		</div>





		<div class="spacer">
			<div class="row">
				<div class="col-lg-12 recent-view">
					<center><h3>Proyectos de la mas alta calidad</h3></center>
					<img class="img-responsive" src="{{asset('tema/images/fachada.jpg')}}">

				</div>

			</div>
		</div>





		<div class="spacer">
			<div class="row">
				<div class="col-lg-6 col-sm-9 recent-view">
					<h3>Contamos</h3>
					<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.<br><a style="color: #df0023;" href="about.php">Ver Mas</a></p>

				</div>
			</div>
		</div>
	</div>
@endsection