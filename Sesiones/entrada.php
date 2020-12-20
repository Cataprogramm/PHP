<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="author" content="Catalin">
	<meta name="description" content="Formulario con usuario y contrasenia">
	<title>Formulario sesiones</title>
<style>

</style>	
</head>
<body>
<!---
Formulario de sesión
-->
<?php
	session_start();
	
	$valido=true;
	if ($_SERVER['REQUEST_METHOD'] != 'GET'){
		//incializa el array de errores.
		$error = array();
		
		//validar el formulario.
		if(empty($_POST['nombre'])){
			$error[]="El nombre es requerido";
		}else if(strlen($_POST['nombre'])<3){
			$error[]="El nombre no tiene la longitud necesaria";
		}
		
		if(empty($_POST['password'])){
			$error[]="La contrasenia no es correcta";
		
		}else if(empty($_POST['nombre'])){
			strcmp($_POST['nombre'],trim(strrev($_POST['password'])))!==0{
			$error[] = "La contrasenia no es correcta";
		}
		
		$valido=empty($error);
		
	}

	if ($_SERVER['REQUEST_METHOD'] != 'GET' && $valido ){
		//Procesar el formulario.
		echo "Procesando el formulario <br>";
		echo $_SESSION['nombre']=$_POST['nombre'];
		header('Location:recibir.php');
		
	}else{
	//muestra el formulario
	
?>

	<h2>Identificación de usuario<h2>
	<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
	
	<label for="nombre">Nombre:</label>
	<input type="text" name="nombre"><br><br>
	
	
	<label for="password">Password:</label>
	<input type="password" name="password"><br><br>
	
	<input type="submit" name="submit" value="Entrar">
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