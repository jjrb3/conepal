<!DOCTYPE html>
<html>
<head>
	<title>Cambiar fondo</title>
</head>
<body bgcolor="<?php echo $_GET['color']; ?>">
	<form method="get" action="prueba2">
		Cambiar fondo a: 
		<select name="color">
			<option value="red">Rojo</option>
			<option value="green">Verde</option>
			<option value="yellow">Amarillo</option>
			<option value="blue">Azul</option>
		</select>
		<input type="submit" value="Cambiar color">
	</form>
</body>
</html>