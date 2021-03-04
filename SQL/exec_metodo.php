<?php
//Conexión
try{
$conexion=new PDO("mysql:host=localhost;dbname=dwes;charset=utf8","alumno","1234");
}catch(PDOException $e){
	exit("Se ha producido un error de conexión" . $e->getMessage());
}


//Borramos todas las filas que tengo en mi tabla usuarios
$contador=$conexion->exec("DELETE FROM USUARIOS");

//Devuelve el número de filas que han sido eliminadas
echo("Han sido eliminadas $contador  filas");

?>