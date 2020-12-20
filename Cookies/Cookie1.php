<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="author" content="Catalin">
	<meta name="description" content="Creando una cookie con un nombre">
	<title>Cookie1</title>
	
	
	<?php
		//Crear cookies
		setcookie("nombre","Catalin", time() + 10);
		
	?>
	
</head>
<body>
<!---

-->
	<a href="./las_cookies.php">Accede al sistema</a>
	<?php
	if(!empty($_COOKIE['nombre'])){
	
		echo "La cookie nombre está disponible: " . $_COOKIE['nombre'] . "<br>";
	}
		//código
	
	?>
	
</body>
</html>