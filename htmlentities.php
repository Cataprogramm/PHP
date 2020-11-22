<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="ANSI"><!--Codificaci�n en Ansi-->
	<meta name="author" content="Catalin">
	<meta name="description" content="Html">
	<title>Htmlentities</title>
</head>
<body>
<!---Htmlentities,devuelve una cadena con los caracteres no pertenecientes al ANSI-->
	<?php
	echo "Catalu�a y Arag�n <br>";
	echo htmlentities("Con conversión: Cataluña y Aragón <br>");
	
	
	$texto='Hola';
	echo $texto . "<br>";
	$texto="España";
	echo $texto . "<br>";
	$texto=htmlentities($texto);
	echo $texto . "<br>";
	?>
</body>
</html>