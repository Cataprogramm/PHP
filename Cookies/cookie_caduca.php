<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="author" content="Catalin">
	<meta name="description" content="Creando una cookie con un nombre">
	<title>Cookie1</title>
	
	
	<?php
		//Crear cookies
		setcookie("nombre","Catalin", time() + 3600);
		
	?>
	
</head>
<body>
<!---

-->
	<a href="cookie_caduca.php">Crear la cookie</a><br><br>
	<a href="borra_cookie.php">Borra cookie</a><br><br>
	<?php
	if(!empty($_COOKIE['nombre'])){
	
		echo "La cookie nombre está disponible: " . $_COOKIE['nombre'] . "<br>";
	}
		//código
	
	?>
	
</body>
</html>