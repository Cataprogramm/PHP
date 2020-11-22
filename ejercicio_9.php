<!DOCTYPE html>
<html lang="es">
<head>
<!---Escribir una pagina PHP donde definamos la constante MONEDA, con valor "EURO".
Comprobar previamente que la constante no esta previamente definida. Y despues mostrar el tipo de dato que guarda
y el valor que tiene-->
	<meta charset="UTF-8">
	<meta name="author" content="Catalin">
	<meta name="description" content="Crear una constante,indicar el tipo de dato y su valor ">
	<title>Ejercicio 9</title>
</head>
<body>
	<?php
	if(defined("MONEDA")){
			echo MONEDA . "<br>";
		}
		define("MONEDA","EURO");
		var_dump(MONEDA);
		
	?>
</body>
</html>


