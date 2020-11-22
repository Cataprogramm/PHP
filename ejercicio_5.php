<!DOCTYPE html>
<html lang="es">
<head>
<!---Partiendo del hecho que contamos con las variables nombre,apellidos,direccion y telefono,
 mostrar la ficha del alumno en formato de tabla-->
	<meta charset="UTF-8">
	<meta name="author" content="Catalin">
	<meta name="description" content="Ficha de alumno">
	<title>Ejercicio 5</title>
<style>
table,th,td{
	border:1px solid black;
	border-collapse:collapse;
}
</style>	
</head>
<body>
<table style="width:50%">
	<?php
		echo "<tr>";
		$nombre = "Catalin ";
		echo " <th>Nombre:</th> <th> $nombre </th>";
		echo "</tr>";
		echo "<tr>";
		$apellidos="Mazarache ";
		echo " <th>Apellidos:</th> <th> $apellidos </th> ";
		echo "</tr>";
		echo "<tr>";
		$direccion="calle daw2";
		echo " <th>Dirección:</th> <th> $direccion </th> ";
		echo "</tr>";
		echo "<tr>";
		$telefono=624034034;
		echo " <th>Teléfono:</th> <th> $telefono </th> ";
		echo "</tr>";
		
	?>
	
</table>
</body>
</html>




	




