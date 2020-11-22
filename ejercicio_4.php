<!DOCTYPE html>
<html lang="es">
<head>
<!---Dado un número, mostrar a través de una tabla HTML su tabla de multiplicar.-->
	<meta charset="UTF-8">
	<meta name="author" content="Catalin">
	<meta name="description" content="Mostrar la tabla de multiplicacion">
	<title>Ejercicio 4</title>
	
<style>
table,th,td{
	border:1px solid black;
	border-collapse:collapse;
}
</style>
	
	
</head>
<body>
<table style="width:25%">
		<?php
		
		$numero=2;
		for($i=0;$i<=10;$i++){
			 echo "<tr>" . "<td>" . "$numero x $i = " . $numero * $i . "<br>" . "<td>" . "</tr>";
		}
	
		?>
	
	
</table>
</body>
</html>





