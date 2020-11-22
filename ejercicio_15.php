<!DOCTYPE html>
<html lang="es">
<head>
<!---Almacene en un array los 10 primeros números pares. Imprímalos cada uno en una línea-->
	<meta charset="UTF-8">
	<meta name="author" content="Catalin">
	<meta name="description" content="Array de pares">
	<title>Ejercicio 15</title>
<style>

</style>
</head>
<body>

	
	<?php
		$array=array();
		for($i=0;$i<10;$i++){
			$array[$i]=2*$i;
			echo "$array[$i] <br>";
		}
	
	
	?>
	

</body>
</html>



