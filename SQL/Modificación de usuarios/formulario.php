<!DOCTYPE html>
<html lang="es">
<head>
	<title>Modificación de usuarios</title>
	<meta charset="UTF-8">
	<meta name="author" content="Catalin">
	<meta name="description" content="formularios">
</head>
<body>
<?php

//Conexión
$conexion=new mysqli("localhost","alumno","1234","dwes");

if(!$conexion->set_charset("utf8")){
	exit("Ha fallado establecer el charset");
}
//Comprobar la conexion
if($conexion->connect_errno !=0){
	echo "No se ha podido establecer la conexión " . $conexion->connect_error;
}


//Realizamos la consulta
$mensaje=$nombre=$contra_vieja=$contra_nueva=$contra_coincide=NULL;
if(isset($_POST)){
	if(empty($_POST['nombre'])){
		$mensaje="El nombre de usuario es obligatorio";
	}
	elseif(empty($_POST['pass1'])){
		$mensaje="Debe introducir una contraseña ";
	}
	elseif(empty($_POST['pass2'])){
		$mensaje="Debe introducir una contraseña nueva";
	}
	elseif(empty($_POST['pass3'])){
		$mensaje="Debe introducir una contraseña de verificación con la que se comprobará si coincide con la nueva contraseña";
	}
	elseif(strcmp($_POST['pass2'],$_POST['pass3']) !== 0){
		$mensaje="La contraseña nueva no coincide con la contraseña de verificación";
	}

}//Todo está bien y pasa a recibir datos del formulario
$nombre=$_POST['nombre'];
$usuario=$conexion -> real_escape_string($nombre);
$contra_vieja=$_POST['pass1'];
$clave=$conexion -> real_escape_string($contra_vieja);
$contra_nueva=$_POST['pass2'];
$clave_nueva=$conexion -> real_escape_string($contra_nueva);
$sentencia = "UPDATE usuarios SET clave = '$clave_nueva' where login='$usuario'";
echo $sentencia;

if($cambio=$conexion->query($sentencia)){
echo "<br> Realiza el cambio de contraseña al usuario <br>";
	
	
	if(!$cambio || mysqli_num_rows($cambio) == 0){
		//Con esta función imprimimos el número de filas de un resultado, si sale 0 es porque el registro no existe,
		//y al no estar en la tabla se puede registrar ese usuario
		echo "El usuario no existe, es válido para crear  <br>";
		
	}
	else{
		echo "El usuario ya existe, ingresa otro usuario <br>";
	}
}

else{
?>

	<form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
	<label for="name">Nombre: </label>
	<input type="text" id="name" name="nombre" required="required" value="<?php if(isset($_POST['nombre']))
		 echo $_POST['nombre'];?>"> <br>
	<label for="password">Contraseña anterior: </label>
	<input type="password" id="password" name="pass1" required="required" value="<?php if(isset($_POST['pass1']))
		 echo $_POST['pass1'];?>"> <br>
	 <label for="password2">Contraseña nueva: </label>
	<input type="password" id="password2" name="pass2" required="required" value="<?php if(isset($_POST['pass2']))
		 echo $_POST['pass2'];?>"> <br>
	 <input type="submit" value="Entrar">
	</form>
<?php
echo "Se ha producido un error  <br>";
}


// Procesar la consulta: Obtener resultados

echo "Número de filas que han sido afectadas: " . $conexion->affected_rows;
echo '<br> <pre>';
if($cambio){
	
	echo "Usuario modificado correctamente";
	}
else{
	echo "El usuario o la contraseña no son correctos";
}
echo '</pre>';

//Cerrar la conexión
$conexion->close();
?>

</body>
</html>