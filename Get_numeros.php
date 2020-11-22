<!DOCTYPE html>
<html lang="es">
<head>
<!---Crea una página que recibe por GET un número, y lo tiene que mostrar con 10 dígitos
y 2 decimales, en formato decimal.-->
	<meta charset="UTF-8">
	<meta name="author" content="Catalin">
	<meta name="description" content="Un número de 10 dígitos con dos decimales">
	<title>Página con printf</title>

</head>
<body>

	<?php
	
	if(!isset($_GET['num'])){
		
		echo "El numero no existe <br>";
	}else{
		$num=$_GET['num'];
		echo $num . "<br>";
		$formato= '%010.2f <br>';
		echo printf($formato,$num);
	}
	
	?>
	</form>

</body>
</html>