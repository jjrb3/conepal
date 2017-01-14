<!DOCTYPE html>
<html>
<head>
	<title>Registro de empleado</title>
</head>
<body>
	<center>
		<h2>Registro</h2>
		<br>
		<form method="get" action="prueba3">
			<input type="text" name="nombre" placeholder="Nombre" required><br>
			<input type="text" name="apellido" placeholder="Apellido" required><br>
			<input type="date" name="fecha"><br>
			<input type="text" name="usuario" placeholder="Usuario" required><br>
			<input type="password" name="clave" placeholder="Clave" required><br>
			<input type="submit" value="registrarse">
		</form>
		<br>
<?php

echo "Se registro la persona llamada " . $_GET['nombre'] . ' ' . $_GET['apellido'];
echo " con fecha de nacimiento " . $_GET["fecha"];
echo " con usuario " . $_GET["usuario"];
echo " y  con clave " . $_GET["clave"];
?>		
	</center>
</body>
</html>