<?php
//Conexión
$conexion=new mysqli("localhost","alumno","1234","dwes");

if(!$conexion->set_charset("utf8")){
	exit("No se ha podido establecer el UTF-8");
}
//Comprobar la conexión
if($conexion->connect_errno != 0){
	echo ("Se ha producido un error de conexión " . $conexion->connect_error);
}
//Ejecutamos sentencia que no almacena resultados en buffer
$conexion->real_query("SELECT login FROM usuarios order by login ASC");//"SELECT login FROM usuarios order by login DESC"

$resultado=$conexion->store_result();

$resultado->data_seek(0);

echo "Mostramos los datos de usuarios en orden ascendente <br>";//Mostramos los datos de usuarios en orden descendente <br>
while($fila=$resultado->fetch_assoc()){
	echo "login = " . $fila['login'] . "<br>";
}

?>