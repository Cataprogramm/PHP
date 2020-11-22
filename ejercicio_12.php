<!DOCTYPE html>
<html lang="es">
<head>
<!---Crea una página con una tabla con dos columnas de un tamaño fijo. Haz que cada vez se recargue la página
 muestre dos colores diferentes. (Uso de una función random en php, y la función hsl() para css).-->
	<meta charset="UTF-8">
	<meta name="author" content="Catalin">
	<meta name="description" content="Tabla con dos columnas">
	<title>Ejercicio 12</title>
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

	<?php
	 $tono = rand(1,200);
    echo "<table style = 'background-color:hsl($tono,80%,70%)'>
    <tr>
    <td>Primera columna</td>
    <td>Segunda columna</td>
    </tr>
    </table>"
	?>
	
</table>
</body>
</html>


