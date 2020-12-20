<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="author" content="Catalin">
	<meta name="description" content="Comprobar si existe">
	<title>Cookie_nombre</title>
</head>
<body>
<!---

-->
	
	<?php
	if(!empty($_COOKIE['nombre'])){
	
		echo "La cookie nombre está disponible: " . $_COOKIE['nombre'] . "<br>";
	}else{
		echo "La cookie nombre no está disponible";
	}
		//código
	?>
	
</body>
</html>