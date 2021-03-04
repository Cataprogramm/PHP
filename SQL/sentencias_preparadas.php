<!DOCTYPE html>
<html lang="es">
<head>
	<title>Consulta preparada</title>
	<meta charset="UTF8">
	<meta name="description" content="Consulta">
	<meta name="author" content="Catalin Mazarache">
<!--Crear  una página php para insertar 3 usuarios en la tabla dwes.usuarios, utilizando consultas preparadas.

Usar: prepare y bind_param

Mejora:

- Utilizar un usuario limitado.

- Realizar control de errores.

Notas:

Tener en cuenta que nuestra tabla tiene clave primaria, por tanto conviene que borres los usuarios que vas a insertar antes de ejecutar la página. 

Si os resulta más cómo los podéis borrar dentro de la página php.
-->
</head>
<body>


<?php

//1. CONEXIÓN
$conexion=new mysqli("localhost","alumno","1234","dwes");

//Comprobamos que la conexión se realiza correctamente
if($conexion->connect_errno){//$conexion->connect_errno !=0
	exit("Se ha producido un error de conexion " . $conexion->connect_errno . $conexion->connect_error);
}

//Establecemos el charset
if(!$conexion->set_charset("utf8")){
	exit("Ha fallado al establecer el charset");
}

//Borramos los datos de los usuarios para que no existan usuarios duplicados
if(!$conexion->query("DELETE FROM USUARIOS")){
	exit("Error en el borrado de datos " . $conexion->errno . "-" . $conexion->error);	
}
//2. PREPARAMOS LAS SENTENCIAS
if(!$orden=$conexion->prepare("INSERT INTO usuarios VALUES(?,?)")){
	exit("Error en el prepare " . $conexion->errno . "-" .$conexion->error);
}
$nuevos_usuarios=array('pepe' => '1234', 'laura'=>'1234', 'ana'=>'Nohay2sin3');
$login=$clave='';

//3. VINCULAR LOS PARÁMETROS
if(!$orden->bind_param("ss",$login,$clave)){
	exit("Error al vincular los parámetros");
}

//4. REALIZAR EL ALTA DE USUARIOS
echo "Alta de usuarios en la base de datos <br>";
foreach($nuevos_usuarios as $login => $clave){
	if(!$orden->execute()){
		echo "Error al insertar: " . $orden->errno . "-" . $orden->error;
	}
	else if($orden->affected_rows>0){
		echo "El usuario $login ha sido insertado con éxito <br>";
	}
	
}
//5. CERRAMOS LA CONEXIÓN
$conexion->close();
?>
</body>
</html>