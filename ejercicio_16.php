<!DOCTYPE html>
<html lang="es">
<head>
<!---Mostrar una tabla de 4 por 4 que muestre las primeras 4 potencias de los números del uno 1 al 4 
(hacer una función que las calcule invocando la función pow).
 En PHP las funciones hay que definirlas antes de invocarlas-->
	<meta charset="UTF-8">
	<meta name="author" content="Catalin">
	<meta name="description" content="Tabla de las primeras cuatro potencias">
	<title>Ejercicio 16</title>
<style>
table{
	border:1px solid black;
	border-collapse:collapse;

}
</style>
</head>
<body>
<table style="width:50% border=1">
	<?php
	define("CONSTANTE",4);
	function potencia ($v1, $v2)
	{
	$calculo_potencia= pow($v1, $v2);
	return $calculo_potencia;
	}
	echo "<table border=1>";
	for ($i=1; $i<=CONSTANTE; $i++){
		echo "<tr>";

		 for ($j=1; $j<=CONSTANTE; $j++) 
			echo "<td>" . potencia($i,$j) . "</td>";
			
		echo "</tr>";
		
	}
	echo "</table>";

	?>
</table>
</body>
</html>
	
