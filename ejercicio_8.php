<!DOCTYPE html>
<html lang="es">
<head>
<!---Escribir una página PHP utilizando las constantes predefinidas-->
	<meta charset="UTF-8">
	<meta name="author" content="Catalin">
	<meta name="description" content="Constantes predefinidas de PHP">
	<title>Ejercicio 8</title>
<style>
table,th,td{
	border:1px solid black;
	border-collapse:collapse;
}
</style>
</head>
<body>
<table style="width:50%">
	<pre>
	<?php
	print_r(get_defined_constants(true));
	$maximo=PHP_INT_MAX;
	echo "El mayor número entero que se puede almacenar es: $maximo <br>";
	$tamanio=PHP_INT_SIZE;
	echo "Los números enteros se almacenan usando $tamanio bytes";
	
	?>
	</pre>
</table>
</body>
</html>