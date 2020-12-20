<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="author" content="Catalin">
	<meta name="description" content="Escribiendo una ruta de la cookie">
	<title>Ruta cookie</title>
	
	
	<?php
		//Crear cookies
		setcookie("apellido","Mazarache", time() + 3600, '/Cookies/privada');
		
	?>
	
</head>
<body>
<!---

-->
	
	<?php
	if(!empty($_COOKIE['apellido'])){
	
		echo "La cookie apellido está disponible: " . $_COOKIE['apellido'] . "<br>";
	}
		//código
	
	?>
	
</body>
</html>