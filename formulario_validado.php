<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="author" content="Catalin">
	<meta name="description" content="Validar formulario">
	<title>Validación de formularios</title>	
<style>

</style>	
</head>
<body>
<!--Si el formulario ha sido enviado quiero que me muestre el nombre--->
<?php
//recibe un nombre que tiene que tener una longitud de 3 o más
	$valido=false;
	if($_SERVER['REQUEST_METHOD'] != 'GET'){
		//validar el formulario
		$error=array();
		$valido=strlen($_POST['nombre'])>=3;
		
		if(!$valido){
			$error[]="El nombre no tiene la longitud necesaria";
		
		}
	}
	if($_SERVER['REQUEST_METHOD'] != 'GET' && $valido){
		//Procesar el formulario
		echo "Procesando el formulario <br>";
		echo $_POST['nombre'];
	
	}else{		

?>
	<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
	Nombre <input type="text" name="nombre">
	<input type="submit" name="enviar" value="procesa">
	</form>

<?php
	if(!empty($error)){
		foreach($error as $linea){
			echo $linea . "<br>";
		}
	}
	}
?>
</body>
</html>
