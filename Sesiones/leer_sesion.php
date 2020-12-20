<!DOCTYPE html>
<html lang="es">
	<head>
			<title> Sesiones</title>
			<meta charset="UTF-8">
			<meta name="description" content="sesiones">
			<meta name="author" content="Laura">
			
	</head>
	<body>
	
	<pre>
	<?php
	session_start();
	
	print_r($_SESSION);
	
	if (isset($_COOKIE)) {
		print_r($_COOKIE);
	}else { 
		echo  "No hay cookies<br>";
	}
		
	if (isset($_POST)) {
		print_r($_POST);
	}else { 
		echo  "No hay \$_POST<br>";
		}



	?>
	</pre>
</body>
</html>