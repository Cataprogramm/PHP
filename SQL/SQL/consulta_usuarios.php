<?php
//Conectarnos
$con=new mysqli('localhost','root','','dwes');
//Comprobar la conexión
if($con->connect_errno !=0){
	exit("Ha fallado la conexión " . $con->connect_error);
}
$con->set_charset("UTF-8");
//Realizar la consulta
$consulta=$con->query("select * from  usuarios");
echo "Realiza la consulta <br>";

// Procesar la consulta: Obtener resultados
echo "Número de filas de mi consulta: " . mysqli_num_rows($consulta) . "<br>";
echo "Número de filas que han sido afectadas: " . $con->affected_rows;
echo '<br> <pre>';
if($consulta){
	
	//while($ob=$consulta->fetch_row()){//Me muestra un array enumerado([0]=>Alex)
	while($ob=$consulta->fetch_assoc()){//Me muestra un array asociativo([login]=>Alex)	
		print_r($ob);//Mostrarlo con una lista o una tabla

	}
}
echo '</pre>';
//Cerrar la conexión
$con->close();

?>