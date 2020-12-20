<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="author" content="Catalin">
	<meta name="description" content="Creando una cookie httponly">
	<title>Cookie httponly</title>
<head>
</head>
<body>
<!--Incluir un javascript para acceder a esa cookie y mostrarla-->
<a href="crear_cookie_httponly.php">Crear cookie httponly</a><br>
<a href="borra_cookie_httponly.php">Borrar cookie httponly</a><br>
<?php
	if(!empty($_COOKIE['cookie_httponly'])){
	
		echo "La cookie cookie_httponly está disponible: " . $_COOKIE['cookie_httponly'] . "<br>";
	}else{
		echo "La cookie cookie_httponly no existe";
	}
?>
<script>


</script>


</body>
</html>