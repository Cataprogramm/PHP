<!DOCTYPE html>
<html lang="es">
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
<!--<table>-->
<?php
include_once('conectaBD2.php');
// ----------- Proceso principal
$obj = new conectaBD2('dwes'); // crea conexión para usar bd dwes
if ( $obj->creaTablaTask()){ // invoca método de objeto para crear tabla
 echo 'tabla Tasks table creada';
}
else{
	echo 'Error al crear table Task';
}
$obj->consultaTareas();

//if($consulta=$obj->consultaTareas())
/*
while($fila=$consulta->fetch(PDO::FETCH_ASSOC)){
	echo "<pre>";
	print_r($fila);
	echo "</pre>"; 
	
	echo '<tr>';
	echo '<td>' . $fila['task_id'] . '</td>';
	echo "<td>" .  $fila['subject'] . '</td>';
	echo "<td>" .  $fila['start_date'] . '</td>';
	echo "<td>" .  $fila['end_date'] . '</td>';
	echo "<td>" .  $fila['description'] . '</td>';
	echo ' </tr>';
	
}*/

?>
<!---</table>--->
</body>
</html>