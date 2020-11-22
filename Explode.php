<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="author" content="Catalin">
	<meta name="description" content="Explode">
	<title>Explode</title>
</head>
<body>
<!---Prueba de explode-->
	<?php
		$meses="Enero Febrero Marzo Abril";
		
		$array_meses=explode(" ", $meses);
		echo "<pre>";
		print_r($array_meses);
		echo "</pre>";
		
		$array_meses=explode("o", $meses);
		echo "<pre>";
		print_r($array_meses);
		echo "</pre>";
		
		$array_meses=explode("er", $meses);
		echo "<pre>";
		print_r($array_meses);
		echo "</pre>";
	?>
</body>
</html>