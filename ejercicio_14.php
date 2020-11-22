<!DOCTYPE html>
<html lang="es">
<head>
<!---Crea las variables msg1, msg2, msg3 y msg4 con mensajes de texto. Obtén un número aleatorio del 1 al 4,
accede y muestra el contenido de esa variable.-->
	<meta charset="UTF-8">
	<meta name="author" content="Catalin">
	<meta name="description" content="Usar mensajes de texto y mostrar su contenido">
	<title>Mensajes de texto</title>
</head>
<body>
	<?php
	$msg1="hola";
	$msg2="estamos";
	$msg3="usando";
	$msg4="variables de variables";
	
	$numero=mt_rand(1,4);
	
	
	$resultado= 'msg' . $numero;
	echo $$resultado;
	
	
	
	
	
	
	?>
	
</body>
</html>