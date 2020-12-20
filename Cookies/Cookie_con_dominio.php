<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="author" content="Catalin">
	<meta name="description" content="Creando una cookie con un subdominio">
	<title>Cookie_subdominio</title>
	
	
</head>
<body>
<!---

-->
	<a href="Cookie_con_dominio.php">Crear la cookie</a><br><br>
	<a href="Cookie_dominio.php">Borra cookie</a><br><br>
	<?php
	if(!empty($_COOKIE['curso'])){
	
		echo "La cookie curso está disponible: " . $_COOKIE['curso'] . "<br>";
	}else{
		echo "El curso no existe";
	}
	//código
	//http://localhost y https://localhost
	?>
	
	
</body>
</html>