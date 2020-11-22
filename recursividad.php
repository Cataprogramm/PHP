<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="author" content="Catalin">
	<meta name="description" content="Factorial por recursividad">
	<title>Factorial por recursividad</title>
</head>
<body>
<!---Crear un script con una función que devuelva el factorial de un número aplicando recursividad de funciones-->
	<?php
		function factorial($num){
			if($num<=1){
				return 1;
			}
			return factorial($num-1) * $num;
		}
		echo factorial(6);
		
	
	?>
</body>
</html>
