<!DOCTYPE html>
<html lang="es">
	<head>
			<title> Plantilla</title>
			<meta charset="UTF-8">
			<meta name="description" content="Plantilla">
			<meta name="author" content="Laura">
			
	</head>
	<body>
	<?php
	//recibe un nombre que debe tener longitud 3 o más.
	$valido=false;
	if ($_SERVER['REQUEST_METHOD'] != 'GET'){
		//incializa el array de errores.
		$error = array();
		
		//validar el formulario.
		$valido = strlen($_POST['nombre'])>=3;
		if (!$valido){
			$error[] = "El nombre no tiene la longitud necesaria";
		}
	}

	if ($_SERVER['REQUEST_METHOD'] != 'GET' && $valido ){
		//Procesar el formulario.
		echo "Procesando el formulario <br>";
		echo $_POST['nombre'];
		
	}else{
 
	?>
	
		<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
		Nombre <input type="text" name="nombre">
		<input type="submit" name="enivar" value="procesa">
		</form>
	<?php
		if (!empty($error)){
			foreach($error as $linea){
				echo $linea . '<br>';
			}
		}
	}
 
	?>
</body>
</html>