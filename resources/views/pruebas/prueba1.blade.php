<!DOCTYPE html>
<html>
<head>
	<title>Calculadora sencilla</title>
</head>
<body>
	<form method="get" action="prueba1">
		<input type="number" name="valor1" min="0">
		<select name="accion">
			<option value="+">Sumar</option>
			<option value="-">Restar</option>
			<option value="*">Multiplicar</option>
			<option value="/">Dividir</option>
		</select>
		<input type="number" name="valor2" min="0">
		<input type="submit" value="Calcular">
<?php

if ($_GET["accion"] == '+') {

	echo $_GET["valor1"] + $_GET["valor2"];
}

if ($_GET["accion"] == '-') {

	echo $_GET["valor1"] - $_GET["valor2"];
}

if ($_GET["accion"] == '*') {

	echo $_GET["valor1"] * $_GET["valor2"];
}

if ($_GET["accion"] == '/') {

	echo $_GET["valor1"] / $_GET["valor2"];
}

?>		
	</form>
</body>
</html>