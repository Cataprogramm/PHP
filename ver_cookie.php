<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="author" content="Catalin">
	<meta name="description" content="Creando una cookie segura">
	<title>Cookie segura</title>
<head>
</head>
<body>


<?php
	if(!empty($_COOKIE['segura'])){
		echo "La cookie segura está disponible: " . $_COOKIE['segura'] . "<br>";
	}else{
		echo "La cookie segura no existe";
	}
?>




</body>
</html>