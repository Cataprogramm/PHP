<!DOCTYPE html>
<html lang="es">
<head>
<!---Realiza un script PHP que defina una variable para los siguientes tipos de datos: entero,real,string
booleano,sin definir. Y muestre en forma de tabla los resultados de realizar con ellas operaciones de suma,
concatenación y comparación según se muestra en la figura-->
	<meta charset="UTF-8">
	<meta name="author" content="Catalin">
	<meta name="description" content="">
	<title>Tipos de datos 1</title>
<style>
table,th,td{
	border: 1px solid black;
	border-collapse: collapse;
	
}
th,td{
	padding: 35px;
	text-align: center;
}
</style>
</head>
<body>
<table>
	<?php
	$codigo_error = error_reporting(E_ERROR );
	$a = 5;
	$b = 2.5;
	$c = "hola";
	$d = true;
	$e = null;
	echo "<table>
	<tr>
	<td></td>
	<th colspan=3>Operaciones</th>
	</tr>";
	echo "<tr>
	<td>valores</td>
	<td>a+b</td>
	<td>a.b</td>
	<td>a>b</td>";
	echo "<tr>
	<td>a=$a,b=$b</td>
	<td>";
	$solucion = $a+$b;
	echo $solucion."</td>
	<td>";
	$solucion = $a . $b;
	echo $solucion."</td>
	<td>";
	$solucion = $a>$b;
	echo $solucion."</td>
	</tr>";
	echo "<tr>
	<td>a=$a,b=$c</td>
	<td>";
	$solucion = $a+$c;
	echo $solucion."</td><td>";
	$solucion = $a.$c;
	echo $solucion."</td><td>";
	$solucion = $a>$c;
	echo $solucion."</td>
	</tr>";
	echo "<tr>
	<td>a=$a,b=$d</td>
	<td>";
	$solucion = $a+$d;
	echo $solucion."</td><td>";
	$solucion=$a.$d;
	echo $solucion."</td><td>";
	$solucion = $a>$d;
	echo $solucion."</td></tr>";
	echo "<tr>
	<td>a=$a,b=$e</td>
	<td>";
	$solucion = $a+$e;
	echo $solucion."</td><td>";
	$solucion = $a.$e;
	echo $solucion."</td><td>";
	$solucion = $a>$e;
	echo $solucion."</td></tr>";
	echo "<tr>
	<td>a=$c,b=$d</td>
	<td>";
	$solucion = $c+$d;
	echo $solucion."</td>
	<td>";
	$solucion = $c.$d;
	echo $solucion."</td><td>";
	$solucion = $c>$d;
	echo $solucion."</td>
	</tr>";
	echo "<tr>
	<td>a=$c,b=$e</td>
	<td>";
	$solucion = $c+$e;
	echo $solucion."</td>
	<td>";
	$solucion= $c.$e;
	echo$solucion."</td>
	<td>";
	$solucion = $c>$e;
	echo$solucion."</td>
	</tr>";
	echo "<tr>
	<td>a=$d,b=$e</td>
	<td>";
	$solucion = $d+$e;
	echo $solucion."</td>
	<td>";
	$solucion = $d.$e;
	echo $solucion."</td><
	td>",
	$solucion = $d>$e;
	echo $solucion."</td><td></td>
	</tr>";
	echo "</table>";
	?>
</table>
</body>
</html>
	