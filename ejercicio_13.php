<!DOCTYPE html>
<html lang="es">
<head>
<!---Modifica la página anterior para añadir en una tabla de una sola columna el código php que has empleado-->
	<meta charset="UTF-8">
	<meta name="author" content="Catalin">
	<meta name="description" content="Tabla de una sola columna que muestre el código php">
	<title>Ejercicio 13</title>
<style>
table,td,th{
	border:1px solid black;
	border-collapse:collapse;
	height: 150px;
	width:150px;
}
</style>
</head>
<body>
<table style="width:50%"  border=1>
	
		<?php
	 $tono = rand(1,200);
    echo "
    <table style = 'background-color:hsl($tono,80%,70%)'>
    <tr>
    <td></td>
  
    </tr>
    </table>"
	?>
	$tono = rand(1,200);
    echo "<table style = 'background-color:hsl($tono,80%,70%)'>
    <tr>
    <td>Primera columna</td>
    <td>Segunda columna</td>
    </tr>
    </table>"
	
</table>
</body>
</html>
