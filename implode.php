<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="author" content="Catalin">
	<meta name="description" content="Implode">
	<title>Implode</title>
</head>
<body>
<!---Prueba de implode-->
	<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
		Español<input type="checkbox" name="idiomas[]" value="español"><br>
		Inglés<input type="checkbox" name="idiomas[]" value="inglés"><br>
		Francés<input type="checkbox" name="idiomas[]" value="francés"><br>
		Alemán<input type="checkbox" name="idiomas[]" value="alemán"><br>
		
		<input type="submit" value="Enviar">
	</form>
	<?php
		if(strcmp($_SERVER['REQUEST_METHOD'], 'GET') !==0){
			//procesar el formulario
			//prueba de implode
		$cadena=implode(',', $_POST['idiomas']);
	
		echo "Has elegido los idiomas: $cadena<br><br>";
		
		echo "<pre>";
		print_r($_POST);
		echo "</pre>";
		}
		else{
			//mostrar el formulario
		}
	?>
</body>
</html>