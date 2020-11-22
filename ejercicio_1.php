<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="author" content="Catalin">
<meta name="description" content="Intercambio de variables">
<title>Ejercicio 1</title>
</head>
<body>

<?php
	echo "Ejercicio 1,tema1 cambio de variables <br>" ;
	$a= 6;
	$b= 4;
	$c= $a;
	$a= $b;
	$b= $c;
	echo "El valor de la variable a = $a <br>";
	echo "El valor de la variable b = $b <br>";
?>

</body>
</html>

