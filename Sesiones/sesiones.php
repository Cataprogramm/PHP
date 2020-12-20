<!DOCTYPE html>
<html lang="es">
	<head>
			<title> Sesiones</title>
			<meta charset="UTF-8">
			<meta name="description" content="sesiones">
			<meta name="author" content="Laura">
			
	</head>
	<body>
	
	
	<?php
	session_start();
	$_SESSION['nombre']= "Laura";
	
	?>
	He creado una variable en sesión<br>
	<a href="leer_sesion.php" >Leer valores de la  sesión.</a>
	<br>
	<br>
	<form action="leer_sesion.php" method="POST">
		<input type="submit" name="enviar" value="enviado"><br>
	</form>
</body>
</html>