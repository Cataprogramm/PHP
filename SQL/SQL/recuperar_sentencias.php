<!DOCTYPE html>
<html lang="en">
<head>
<style>
table,tr,td{
	width: 50%;
	border: 1px solid black;
	margin: auto;
	text-align: center;
}


</style>
</head>
<body>
<table>
<?php
//Conexión
$conexion=new mysqli("localhost","root","","dwes");

//Comprobar la conexión
if($conexion->connect_errno){
	echo "Fallo la conexión MYSQL: " . $conexion->connect_errno . "-" . $conexion->connect_error;
	exit;

}

//Sentencia parametrizada
if(!($orden=$conexion->prepare("SELECT * from USUARIOS"))){
	echo "Fallo la preparación: " . $conexion->errno . "-" . $conexion->error;
}

$orden->execute();
$login='';
$clave='';

$orden->bind_result($login,$clave);

while($orden->fetch()){
	//echo $login . "-" . $clave . "<br>";
	echo '<tr>';
	echo '<td>' . $login . '</td>';
	echo "<td>" .  $clave . '</td>';
	echo ' </tr>';
}
$orden->close();
$conexion->close();
?>
</table>
</body>
</html>