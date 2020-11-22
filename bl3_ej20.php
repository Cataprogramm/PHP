<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="author" content="Catalin">
	<meta name="description" content="Dado dos números calcular el módulo de dos números enteros en función de varias condiciones">
	<title>Bloque 3 ejercicio 20</title>
</head>
<body>
<!---20. Dados dos números calcular el módulo de dos números enteros: si el
resultado es 0, indicar división exacta, si el resultado es 1, indicar sobra 1,
si el resultado es 2 indicar sobran 2. En cualquier otro caso indicar sobran
más de 2. Utilizar un switch.
-->
	<?php
	$num1=7;
	$num2=4;
	$resultado=0;
	$resultado=fmod($num1,$num2);
	echo $resultado . "<br>";
	switch($resultado){
		case 0:
			echo "La división es exacta";
			break;
		case 1:
			echo "Sobra 1";
			break;
		case 2:
			echo "Sobran 2";
			break;
		default:
			echo "Sobran más de 2";
	}
	?>
</body>
</html>