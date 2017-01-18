@extends('tema.usuario')

@section('content')
	<div class="">


		<div id="slider" class="sl-slider-wrapper">
			<input type="hidden" >
			<div class="sl-slider">
				<div id="slider"></div>
				@if ($inmuebles["resultado"] == 1)
					@php ($cnt = 0)
					@foreach($inmuebles["datos"]["data"] as $inmueble)
						@php ($cnt++)

						<!--<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="1">
							<div class="sl-slide-inner">

								<div class="bg-img" style="background-image: url('recursos/imagen_inmueble/{{'1_20170116_020234.jpg'}}');"></div>
								<h2><a href="#">{{$inmueble['nombre']}}</a></h2>
								<blockquote>
									<p class="location"><span class="glyphicon glyphicon-map-marker"></span> 2017 Miramar, Barranquilla/Colombia</p>
									<p>Hermoso apartamento con un enchapado lujoso, con hermosa vista y excelente sector de barranquilla.</p>
									<cite>$ 850,000,000</cite>

								</blockquote>
							</div>
						</div>-->

					{{$inmueble['nombre']}}
					@endforeach
				@endif
				<!--<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="1">
					<div class="sl-slide-inner">
						<div class="bg-img" style="background-image: url('tema/images/slider/1.jpg');"></div>
						<h2><a href="#">2 Alcobas y cinco cuartos de 270m*2 en venta</a></h2>
						<blockquote>
							<p class="location"><span class="glyphicon glyphicon-map-marker"></span> 2017 Miramar, Barranquilla/Colombia</p>
							<p>Hermoso apartamento con un enchapado lujoso, con hermosa vista y excelente sector de barranquilla.</p>
							<cite>$ 850,000,000</cite>
						</blockquote>
					</div>
				</div>

				<div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="2" data-slice2-scale="1">
					<div class="sl-slide-inner">
						<div class="bg-img bg-img-2"></div>
						<h2><a href="#">2 Alcobas y cinco cuartos de 270m*2 en venta</a></h2>
						<blockquote>
							<p class="location"><span class="glyphicon glyphicon-map-marker"></span>  2017 Miramar, Barranquilla/Colombia</p>
							<p>Hermoso apartamento con un enchapado lujoso, con hermosa vista y excelente sector de barranquilla.</p>
							<cite>$ 850,000,000</cite>
						</blockquote>
					</div>
				</div>

				<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
					<div class="sl-slide-inner">
						<div class="bg-img bg-img-3"></div>
						<h2><a href="#">2 Alcobas y cinco cuartos de 270m*2 en venta</a></h2>
						<blockquote>
							<p class="location"><span class="glyphicon glyphicon-map-marker"></span>  2017 Miramar, Barranquilla/Colombia</p>
							<p>Hermoso apartamento con un enchapado lujoso, con hermosa vista y excelente sector de barranquilla.</p>
							<cite>$ 850,000,000</cite>
						</blockquote>
					</div>
				</div>

				<div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="1">
					<div class="sl-slide-inner">
						<div class="bg-img bg-img-4"></div>
						<h2><a href="#">2 Alcobas y cinco cuartos de 270m*2 en venta</a></h2>
						<blockquote>
							<p class="location"><span class="glyphicon glyphicon-map-marker"></span>  2017 Miramar, Barranquilla/Colombia</p>
							<p>Hermoso apartamento con un enchapado lujoso, con hermosa vista y excelente sector de barranquilla.</p>
							<cite>$ 850,000,000</cite>
						</blockquote>
					</div>
				</div>

				<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1">
					<div class="sl-slide-inner">
						<div class="bg-img bg-img-5"></div>
						<h2><a href="#">2 Alcobas y cinco cuartos de 270m*2 en venta</a></h2>
						<blockquote>
							<p class="location"><span class="glyphicon glyphicon-map-marker"></span>  2017 Miramar, Barranquilla/Colombia</p>
							<p>Hermoso apartamento con un enchapado lujoso, con hermosa vista y excelente sector de barranquilla.</p>
							<cite>$ 850,000,000</cite>
						</blockquote>
					</div>
				</div>-->
			</div><!-- /sl-slider -->



			<nav id="nav-dots" class="nav-dots">
				<span class="nav-dot-current"></span>
				<span></span>
				<span></span>
				<span></span>
				<span></span>
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
						<input type="text" class="form-control" placeholder="Buscar propiedades">
						<div class="row">
							<div class="col-lg-3 col-sm-3 ">
								<select class="form-control">
									<option value="">Estado</option>
									@foreach ($estadoInmueble as $estado)
										<option value="{{$estado['id']}}">{{$estado['nombre']}}</option>
									@endforeach
								</select>
							</div>
							<div class="col-lg-6 col-sm-4">
								<select class="form-control" id="valor" name="valor">
									<option>Precio</option>
									@for($i=0;$i<10;$i++)
										<option value="{{(($i) * 50000000)}};{{(($i+1) * 50000000)}}">${{number_format(($i) * 50000000)}} - ${{number_format(($i+1) * 50000000)}}</option>
									@endfor
									<option value="500000000;adelante">$500,000,000 - En adelante</option>
								</select>
							</div>
							<div class="col-lg-3 col-sm-4">
								<button class="btn btn-success"  onclick="window.location.href='buscador'">Buscar</button>
							</div>
						</div>


					</div>

				</div>
			</div>
		</div>
	</div>
	<!-- banner -->
	<div class="container">
		<div class="properties-listing spacer"> <a style="color: #df0023;" href="buysalerent.php" class="pull-right viewall">Ver Todo</a>
			<h2>Propiedades</h2>
			<div id="owl-example" class="owl-carousel">
				<div class="properties">
					<div class="image-holder"><img src="{{asset('tema/images/properties/1.jpg')}}" class="img-responsive" alt="properties"/>
						<div class="status sold">Sold</div>
					</div>
					<h4><a style="color: #df0023;" href="property-detail.php">Ahora en:</a></h4>
					<p class="price">Precio: $234,900</p>
					<a class="btn btn-primary" href="property-detail.php">Ver Detalles</a>
				</div>
				<div class="properties">
					<div class="image-holder"><img src="{{asset('tema/images/properties/2.jpg')}}" class="img-responsive" alt="properties"/>
						<div class="status new">New</div>
					</div>
					<h4><a style="color: #df0023;" href="property-detail.php">Ahora en:</a></h4>
					<p class="price">Precio: $234,900</p>
					<a class="btn btn-primary" href="property-detail.php">Ver Detalles</a>
				</div>
				<div class="properties">
					<div class="image-holder"><img src="{{asset('tema/images/properties/3.jpg')}}" class="img-responsive" alt="properties"/></div>
					<h4><a style="color: #df0023;" href="property-detail.php">Ahora en:</a></h4>
					<p class="price">Precio: $234,900</p>
					<a class="btn btn-primary" href="property-detail.php">Ver Detalles</a>
				</div>
				<div class="properties">
					<div class="image-holder"><img src="{{asset('tema/images/properties/4.jpg')}}" class="img-responsive" alt="properties"/></div>
					<h4><a style="color: #df0023;" href="property-detail.php">Ahora en:</a></h4>
					<p class="price">Precio: $234,900</p>
					<a class="btn btn-primary" href="property-detail.php">Ver Detalles</a>
				</div>
				<div class="properties">
					<div class="image-holder"><img src="{{asset('tema/images/properties/1.jpg')}}" class="img-responsive" alt="properties"/>
						<div class="status sold">Sold</div>
					</div>
					<h4><a style="color: #df0023;" href="property-detail.php">Ahora en:</a></h4>
					<p class="price">Precio: $234,900</p>
					<a class="btn btn-primary" href="property-detail.php">Ver Detalles</a>
				</div>
				<div class="properties">
					<div class="image-holder"><img src="{{asset('tema/images/properties/2.jpg')}}" class="img-responsive" alt="properties"/>
						<div class="status sold">Sold</div>
					</div>
					<h4><a style="color: #df0023;" href="property-detail.php">Ahora en:</a></h4>
					<p class="price">Precio: $234,900</p>
					<a class="btn btn-primary" href="property-detail.php">Ver Detalles</a>
				</div>
				<div class="properties">
					<div class="image-holder"><img src="{{asset('tema/images/properties/3.jpg')}}" class="img-responsive" alt="properties"/>
						<div class="status new">New</div>
					</div>
					<h4><a style="color: #df0023;" href="property-detail.php">Ahora en:</a></h4>
					<p class="price">Precio: $234,900</p>
					<a class="btn btn-primary" href="property-detail.php">Ver Detalles</a>
				</div>
				<div class="properties">
					<div class="image-holder"><img src="{{asset('tema/images/properties/4.jpg')}}" class="img-responsive" alt="properties"/></div>
					<h4><a style="color: #df0023;" href="property-detail.php">Ahora en:</a></h4>
					<p class="price">Precio: $234,900</p>
					<a class="btn btn-primary" href="property-detail.php">Ver Detalles</a>
				</div>
				<div class="properties">
					<div class="image-holder"><img src="{{asset('tema/images/properties/1.jpg')}}" class="img-responsive" alt="properties"/></div>
					<h4><a style="color: #df0023;" href="property-detail.php">Ahora en:</a></h4>
					<p class="price">Precio: $234,900</p>
					<a class="btn btn-primary" href="property-detail.php">Ver Detalles</a>
				</div>
				<div class="properties">
					<div class="image-holder"><img src="{{asset('tema/images/properties/2.jpg')}}" class="img-responsive" alt="properties"/></div>
					<h4><a style="color: #df0023;" href="property-detail.php">Ahora en:</a></h4>
					<p class="price">Precio: $234,900</p>
					<a class="btn btn-primary" href="property-detail.php">Ver Detalles</a>
				</div>
				<div class="properties">
					<div class="image-holder"><img src="{{asset('tema/images/properties/3.jpg')}}" class="img-responsive" alt="properties"/></div>
					<h4><a style="color: #df0023;" href="property-detail.php">Ahora en:</a></h4>
					<p class="price">Precio: $234,900</p>
					<a class="btn btn-primary" href="property-detail.php">Ver Detalles</a>
				</div>

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
				<div class="col-lg-5 col-lg-offset-1 col-sm-3 recommended">
					<h3>Propiedades en alquiler</h3>
					<div id="myCarousel" class="carousel slide">
						<ol class="carousel-indicators">
							<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
							<li data-target="#myCarousel" data-slide-to="1" class=""></li>
							<li data-target="#myCarousel" data-slide-to="2" class=""></li>
							<li data-target="#myCarousel" data-slide-to="3" class=""></li>
						</ol>
						<!-- Carousel items -->
						<div class="carousel-inner">
							<div class="item active">
								<div class="row">
									<div class="col-lg-4"><img src="{{asset('tema/images/properties/1.jpg')}}" class="img-responsive" alt="properties"/></div>
									<div class="col-lg-8">
										<h5><a style="color: #df0023;" href="property-detail.php">Apartamentos Barranquilla</a></h5>
										<p class="price">$300,000</p>
										<a href="property-detail.php" class="more">Ver Detalles</a> </div>
								</div>
							</div>
							<div class="item">
								<div class="row">
									<div class="col-lg-4"><img src="{{asset('tema/images/properties/2.jpg')}}" class="img-responsive" alt="properties"/></div>
									<div class="col-lg-8">
										<h5><a style="color: #df0023;" href="property-detail.php">Apartamentos Barranquilla</a></h5>
										<p class="price">$300,000</p>
										<a href="property-detail.php" class="more">Ver Detalles</a> </div>
								</div>
							</div>
							<div class="item">
								<div class="row">
									<div class="col-lg-4"><img src="{{asset('tema/images/properties/3.jpg')}}" class="img-responsive" alt="properties"/></div>
									<div class="col-lg-8">
										<h5><a style="color: #df0023;" href="property-detail.php">Apartamentos Barranquilla</a></h5>
										<p class="price">$300,000</p>
										<a href="property-detail.php" class="more">Ver Detalles</a> </div>
								</div>
							</div>
							<div class="item">
								<div class="row">
									<div class="col-lg-4"><img src="{{asset('tema/images/properties/4.jpg')}}" class="img-responsive" alt="properties"/></div>
									<div class="col-lg-8">
										<h5><a style="color: #df0023;" href="property-detail.php">Apartamentos Barranquilla</a></h5>
										<p class="price">$300,000</p>
										<a href="property-detail.php" class="more">Ver Detalles</a> </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection