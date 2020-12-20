<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="author" content="Catalin">
	<meta name="description" content="Creando una sesión">
	<title>Sesión 1</title>
<head>
</head>
<body>

<a href="<?php echo $_SERVER['PHP_SELF'];?>"></a>
<?php
	session_start();
	
	$_SESSION["nombre"]="Catalin";
	$_SESSION["apellido"]="Mazarache";
	$_SESSION["edad"]=19;
	echo "Ha creado una variable sesión <br>"
	
?>

<a href="Leer_sesiones.php">Leer valores de la sesión</a>
<a href=""></a>

</body>
</html>