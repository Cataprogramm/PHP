<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="author" content="Catalin">
	<meta name="description" content="Datos de la fecha con getdate">
	<title>GET fecha</title>

</head>
<body>
<!---Día de la semana, número día, mes, año
Hora minutos segundos formato 24h-->
	<?php
	$fecha=getdate();
	echo $fecha['seconds'] . "<br>";
	echo $fecha['minutes'] . "<br>";
	echo $fecha['hours'] . "<br>";
	echo $fecha['mday'] . "<br>";
	echo $fecha['wday'] . "<br>" ;
	echo $fecha['mon'] . "<br>";
	echo $fecha['year'] . "<br>";
	echo $fecha['yday'] . "<br>";
	echo $fecha['weekday'] . "<br>";
	echo $fecha['month'] . "<br>";
	
	?>
</table>
</body>
</html>