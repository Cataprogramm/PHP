<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="author" content="Catalin">
	<meta name="description" content="Caracteres">
	<title>Contar caracteres</title>
</head>
<body>
<!---Prueba de caracteres-->
	<?php
		$texto='Hola caracola&ntilde';
		//modo es 0;me muestra todos los que hay
		//modo 1 me muestran los que aparecen una vez
		//modo 2 me muestra los que no aparecen
		//modo 3 cadena con los caracteres que aparecen solo 1 vez
		//modo 4 cadena con los caracteres que no aparecen
		echo $texto;
		$resultado=count_chars($texto,1);
		
		
		echo "<pre>";
		print_r($resultado);
		echo "</pre>";
	?>
</body>
</html>