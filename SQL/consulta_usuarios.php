<?php
//Conectarnos
$con=new mysqli('localhost','root','','dwes');
//Comprobar la conexión
if($con->connect_errno !=0){
	exit("Ha fallado la conexión " . $con->connect_error);
}

//Realizar la consulta
$consulta=$con->query("select * from  usuarios");
echo "Realiza la consulta <br>";

// Procesar la consulta: Obtener resultados
echo "Número de filas: " . $con->affected_rows;
echo '<br> <pre>';
if($consulta){
	while($ob=$consulta->fetch_row()){
		print_r($ob);
		
	}
}
echo '</pre>';
//Cerrar la conexión
$con->close();

?>