<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="author" content="Catalin">
	<meta name="description" content="Datos de la fecha">
	<title>Datos fecha</title>

</head>
<body>
<!---Día de la semana, número día, mes, año
Hora minutos segundos formato 24h-->
	<?php
	//echo date("l j F Y H:i:s a") . "<br>";
	//echo date("d j F Y H:i:s a");
	
	setlocale(LC_ALL,'esp');
	//echo strftime('%A %d de %B de %Y y la hora es %H %M %S ');
	echo strftime('%A %d de %m de %y y la hora es %T');
	?>
</table>
</body>
</html>