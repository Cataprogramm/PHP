<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="author" content="Catalin">
	<meta name="description" content="Recibe la sesión">
	<title>Recibe sesiones</title>
<style>

</style>	
</head>
<body>
<?php

session_start();

	if(!empty($_SESSION['nombre'])){
		echo "Bienvenido" . $_SESSION['nombre'];
	}else{
		echo "Acceso denegado <br>";
	}
?>
<a href="cierra_sesion">Cerramos la sesión</a>
</body>
</html>