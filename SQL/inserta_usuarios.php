<?php
//Conectarnos
$con=new mysqli('localhost','root','','dwes');
//Comprobar la conexión
if($con->connect_errno !=0){
	exit("Ha fallado la conexión " . $con->connect_error);
}
if(!$con->set_charset("utf8")){
	exit("Ha fallado establecer el charset");
}
//Realizar la consulta
$usuario=$con -> real_escape_string('Domingo9');
$clave=$con -> real_escape_string('Nohay2sin3');
$sentencia = "insert into usuarios values('$usuario','$clave')";
echo $sentencia;
$insert=$con->query($sentencia);
echo "<br> Realiza el insert <br>";
if(!$insert){
	echo "Ha fallado el insert <br>";
}
// Procesar la consulta: Obtener resultados
echo "Número de filas: " . ($numfilas = $con->affected_rows);
echo '<br>';
if($numfilas > 0){
	echo "Se ha insertado un usuario <br>";
}else{
	echo "No se ha insertado un usuario <br>";
}

//Cerrar la conexión
$con->close();
?>