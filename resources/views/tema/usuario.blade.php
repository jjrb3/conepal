<!DOCTYPE html>
<html lang="en">
<head>
	<title>Conipal</title>
	<meta name="csrf-token" content="{{ csrf_token() }}" />
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="icon" type="image/png" href="{{asset('tema/images/logo.png')}}" />
	<link rel="stylesheet" href="{{asset('tema/assets/bootstrap/css/bootstrap.css')}}" />
	<link rel="stylesheet" href="{{asset('tema/assets/style.css')}}"/>
	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script src="{{asset('tema/assets/bootstrap/js/bootstrap.js')}}"></script>
	<script src="{{asset('tema/assets/script.js')}}"></script>

	<!-- Owl stylesheet -->
	<link rel="stylesheet" href="{{asset('tema/assets/owl-carousel/owl.carousel.css')}}">
	<link rel="stylesheet" href="{{asset('tema/assets/owl-carousel/owl.theme.css')}}">
	<script src="{{asset('tema/assets/owl-carousel/owl.carousel.js')}}"></script>
	<!-- Owl stylesheet -->

	<!-- slitslider -->
	<link rel="stylesheet" type="text/css" href="{{asset('tema/assets/slitslider/css/style.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{asset('tema/assets/slitslider/css/custom.css')}}" />
	<script type="text/javascript" src="{{asset('tema/assets/slitslider/js/modernizr.custom.79639.js')}}"></script>
	<script type="text/javascript" src="{{asset('tema/assets/slitslider/js/jquery.ba-cond.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('tema/assets/slitslider/js/jquery.slitslider.js')}}"></script>
	<!-- slitslider -->

	<script type="text/javascript" src="{{asset('js/script.js')}}"></script>
</head>
<body>
	<!-- Header Starts -->
	<div class="navbar-wrapper">
		<div class="navbar-inverse" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<!-- Nav Starts -->
				<div class="navbar-collapse  collapse">
					<ul class="nav navbar-nav navbar-right">
						<?=$menu;?>
					</ul>
				</div>
				<!-- #Nav Ends -->
			</div>
		</div>
	</div>
	<!-- #Header Starts -->
	<div class="container">
		<!-- Header Starts -->
		<div class="header">
			<a href="inicio"><img src="{{asset('tema/images/logo.png')}}" alt="Realestate"></a>
			<ul class="pull-right">
				<li><a href="buscador?estado=1&tamanhioPagina=12&pagina=1&descripcion=&valor=">Compradas</a></li>
				<li><a href="buscador?estado=2&tamanhioPagina=12&pagina=1&descripcion=&valor=">En venta</a></li>
				<li><a href="buscador?estado=3&tamanhioPagina=12&pagina=1&descripcion=&valor=">Alquiler</a></li>
			</ul>
		</div>
		<!-- #Header Starts -->
	</div>
	<!-- Fin cabecera -->

	@yield('content')
	
	<!-- Pie de pagina -->
	<div class="footer">
		<div class="container">
			<div class="row">
				<center>
					<div class="col-lg-3 col-sm-3">
						<h4>Menus</h4>
						<ul class="row">
							<li class="col-lg-12 col-sm-12 col-xs-3"><a href="about.php">Nosotros</a></li>
							<li class="col-lg-12 col-sm-12 col-xs-3"><a href="agents.php">Agents</a></li>
							<li class="col-lg-12 col-sm-12 col-xs-3"><a href="blog.php">Blog</a></li>
							<li class="col-lg-12 col-sm-12 col-xs-3"><a href="contact.php">Contácto</a></li>
						</ul>
					</div>

					<div class="col-lg-3 col-sm-3">
						<h4>Nosotros</h4>
						<p>{{$informacionPagina[0]['nosotros']}}</p>
					</div>

					<div class="col-lg-3 col-sm-3">
						<h4>Siguenos</h4>
						<a href="#"><img src="{{asset('tema/images/facebook.png')}}" alt="facebook"></a>
						<a href="#"><img src="{{asset('tema/images/twitter.png')}}" alt="twitter"></a>
						<a href="#"><img src="{{asset('tema/images/instagram.png')}}" alt="instagram"></a>
					</div>

					<div class="col-lg-3 col-sm-3">
						<h4>Contácto</h4>
						<p><b>Bootstrap Realestate Inc.</b><br>
							<span class="glyphicon glyphicon-map-marker"></span> Cr27#72-80, Barranquilla <br>
							<span class="glyphicon glyphicon-envelope"></span> Informacion@conipal.info<br>
							<span class="glyphicon glyphicon-earphone"></span> (035) 3622386 - (+57) 300 294 6261</p>
					</div>
				</center>
			</div>
			<center>
				<p class="copyright">2017 Stids.com.co	</p>
			</center>
		</div>
	</div>
	<input type="hidden" id="ruta" value="{{asset('')}}">
</body>
</html>