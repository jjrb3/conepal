<!DOCTYPE html>
<html >
<head>
	<meta charset="UTF-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Conipal</title>
	<link rel="stylesheet" href="{{asset('tema/assets/bootstrap/css/bootstrap.css')}}" />
	<link rel="stylesheet" href="tema/assets/loginstyle.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="{{asset('tema/assets/administrador.css')}}">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="{{asset('tema/assets/jquery.1.8.3.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/script.js')}}"></script>
</head>
<body>
<div class="login-page">
	<div class="form">
		<img src="tema/images/logo.png">
		<div class="login-form">
			<input type="hidden" id="_token" name="_token" value="{{ csrf_token() }}">
			<input type="text" id="usuario" placeholder="Usuario"/>
			<input type="password" id="clave" placeholder="Contraseña"/>
			<button onclick="verificarIngreso()">Ingresar</button>
			<br>

			<p class="message">Bienvenido a nuestro <a href="">ADMINISTRADOR</a></p>
		</div>
		<br>
		<div id="mensaje"></div>
	</div>
</div>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="tema/assets/login.js"></script>
<script type="text/javascript" src="{{asset('js/ingresar.js')}}"></script>
<script type="text/javascript" src="{{asset('js/script.js')}}"></script>