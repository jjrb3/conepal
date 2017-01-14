<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>{{$InfPag['NOMBRE_CABECERA']}}</title>
	<link rel="icon" href="stids1/img/favicon.png" type="image/png">
	<link href="stids1/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="stids1/css/style.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link href="stids1/css/linecons.css" rel="stylesheet" type="text/css">
	<link href="stids1/css/font-awesome.css" rel="stylesheet" type="text/css">
	<link href="stids1/css/nuestro_equipo.css" rel="stylesheet" type="text/css">
	<link href="stids1/css/animate.css" rel="stylesheet" type="text/css">
	<link href='http://fonts.googleapis.com/css?family=Lato:400,900,700,700italic,400italic,300italic,300,100italic,100,900italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Dosis:400,500,700,800,600,300,200' rel='stylesheet' type='text/css'>

	<script type="text/javascript" src="stids1/js/jquery.1.8.3.min.js"></script>
	<script type="text/javascript" src="stids1/js/bootstrap.js"></script>
	<script type="text/javascript" src="stids1/js/jquery-scrolltofixed.js"></script>
	<script type="text/javascript" src="stids1/js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="stids1/js/jquery.isotope.js"></script>
	<script type="text/javascript" src="stids1/js/wow.js"></script>
	<script type="text/javascript" src="stids1/js/classie.js"></script>
	<script type="text/javascript" src="stids1/js/script.js"></script>

	<script type="text/javascript" src="js/ingresar.js"></script>
</head>
<body style="background:url('stids1/img/login.jpg') no-repeat center center fixed;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;">
		
	<!-- Menú -->
  	<div id="header">
		<nav id="nav">
			<ul>
				<?=$menu;?>							
			</ul>
		</nav>
	</div>
	<!-- Fin menú -->

	<!-- Login -->
 	<div class="dentrodelcontainer">
		<div class="container">
			<div class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
			  	<div class="panel panel-success">
					<div class="panel-heading">
						<center>
							<img src="stids1/img/icono.png">
						</center>
					</div>
					<div class="panel-body">
						<form id="verificarIngreso" action="#">
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<div class="form-group">
					  			<label for="usrname">
					  				<span class="glyphicon glyphicon-user"></span> Usuario
					  			</label>
					  			<input type="text" class="form-control" id="usuario" placeholder="Ingresar usuario">
							</div>
							<div class="form-group">
					  			<label for="psw">
					  				<span class="glyphicon glyphicon-eye-open"></span> Contraseña
					  			</label>
					  			<input type="password" class="form-control" id="clave" placeholder="Ingresar contraseña">
							</div>
							<div class="checkbox">
					  			<label>
					  				<input type="checkbox" value="" checked> Recuerdame
					  			</label>
							</div>
					  		<button type="submit" name="login" class="btn btn-success btn-block">
					  			<span class="glyphicon glyphicon-off"></span> Ingresar
					  		</button>
					  		<!--<input type="submit" value="registrar">-->
					  	</form>
			  			<br>
			  			<div id="mensaje"></div>
			  			<br>
			   			<div class="form-group">
						  	<div class="col-md-12 control">
							 	Olvide mi contraseña 
						  		<a href="#">
							  		Click aquí
						  		</a>							  	
						  	</div>
				 		</div>
					</div>
		  		</div>
		  	</div> 
		</div>
	</div>
	<!-- Fin login -->
</body>
</html>