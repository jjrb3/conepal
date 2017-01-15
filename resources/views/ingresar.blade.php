<!DOCTYPE html>
<html >
<head>
	<meta charset="UTF-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Conipal</title>
	<link rel="stylesheet" href="tema/assets/loginstyle.css">
</head>
<body>
<div class="login-page">
	<div class="form">
		<img src="tema/images/logo.png">
		<form class="login-form">
			<input type="text" placeholder="Usuario"/>
			<input type="password" placeholder="Contraseña"/>
			<a href="administrador/inicio"><button>Ingresar</button></a>
			<p class="message">Bienvenido a nuestro <a href="">ADMINISTRADOR</a></p>
		</form>
	</div>
</div>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

<script src="tema/assets/login.js"></script>