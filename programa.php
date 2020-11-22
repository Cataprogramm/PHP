<!DOCTYPE html>
<html lang="es">
<head>
<!----->
	<meta charset="UTF-8">
	<meta name="author" content="Catalin">
	<meta name="description" content="Usando el static">
	<title>Saludo</title>
</head>
<body>
	<?php
	$saludo_es="hola";
	$saludo_en="hello";
	$saludo_de="hallo";
	if(!isset($_GET['idioma'])){
		$_GET['idioma']= 'es';
		
	}
	$variable='saludo_' . $_GET['idioma'];
	echo $variable, '<br>';
	echo $$variable, '<br>';
	?>
	
</body>
</html>