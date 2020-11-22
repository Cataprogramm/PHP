<!DOCTYPE html>
<html lang="es">
<head>

	<meta charset="UTF-8">
	<meta name="author" content="Catalin">
	<meta name="description" content="switch de vocales">
	<title>Switch de vocales</title>
</head>
<body>
<!---Un switch para que por GET reciba una vocal y nos diga si es abierta,cerrada o no es vocal-->
	<?php
		$codigo_error = error_reporting(E_ERROR );
		if(isset($_GET['vocal'])){
		$vocal = $_GET['vocal'];
			switch($vocal){
			case 'a':
			case 'e':
			case 'o':
					echo "Es una vocal abierta";break;
			
			case 'i':
			case 'u':
					echo "Es una vocal cerrada";break;
			
			default:		
					echo "No es una vocal";
				
			}
		}else {
		echo "mete los datos";}
		
	?>
</body>
</html>
