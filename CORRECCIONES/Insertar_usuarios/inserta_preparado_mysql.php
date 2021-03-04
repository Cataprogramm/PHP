<!DOCTYPE html>
<html lang="es">
	<head>
			<title> Consulta Preparada</title>
			<meta charset="UTF-8">
			<meta name="description" content="Consulta">
			<meta name="author" content="Laura Pérez">
			<!---
			Crear  una página php para insertar 3 usuarios en la tabla dwes.usuarios, utilizando consultas preparadas.

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

//1.- CONEXION 
$con=new mysqli('localhost','alumno','1234','dwes');

if($con->connect_errno){
	exit( "Error en la conexión con MYSQL:(".$con->connect_errno.")".$con->connect_error);
}
//Establecer el charset
if(!$con->set_charset("utf8")){
	exit("Ha fallado establecer el charset");
}

//Borrar los datos de los usuarios, para que no existan duplicados.
if(!$con->query("DELETE FROM usuarios") ){
	exit( "Error en el borrado de datos " . $con->errno ."-". $con->error );
}

//2.-PREPARA LA SENTENCIA
if(!$orden=$con->prepare("INSERT INTO usuarios VALUES(?,?)")){
	exit( "Error en el prepare ".$con->errno."-".$con->error);	
}
$nuevos_usuarios = array( 'pepe'=> '1234', 'laura'=>'1234', 'ana'=>'Nohay2sin3');
$login = $clave = '';

//3.- VINCULAR LOS PARÁMETROS.
if(!$orden->bind_param("ss",$login, $clave)){
		exit( "Error al vincular los parámetros");
	}
//4.- REALIZAR EL ALTA DE USUARIOS.
echo "Alta de usuarios en la base de datos <br>";
foreach($nuevos_usuarios as $login=>$clave){
	
	if(!$orden->execute()){
		echo "Error al insertar:".$orden->errno."-".$orden->error;
	}else if ($orden->affected_rows >0){
		echo "Usuario $login insertado con exito <br>";
	}
}
//5.- CERRAR LA CONEXIÓN.
$con->close();
?>
</body>
</html>