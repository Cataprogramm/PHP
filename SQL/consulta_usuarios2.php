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
echo "Número de filas de mi consulta: " . $consulta->num_rows . "<br>";
echo "Número de filas que han sido afectadas: " . $con->affected_rows;
echo '<br> <pre>';
if($consulta){
	
	/*while($ob=$consulta->fetch_row()){//Me muestra un array enumerado([0]=>Alex)
		print_r($ob);
	}*/
	while($ob=$consulta->fetch_assoc()){//Me muestra un array asociativo([login]=>Alex)	
		print_r($ob);
	}
	/*while($ob=$consulta->fetch_all(MYSQLI_ASSOC)){
	
	
		print_r($ob);//Mostrarlo con una lista o una tabla

	}*/
	/*while($ob=$consulta->fetch_all(MYSQLI_NUM)){//me muestra un array numérico [0]=>ana
			print_r($ob);//Mostrarlo con una lista o una tabla

	}*/
	/*while($ob=$consulta->fetch_all(MYSQLI_BOTH)){//[0]=>ana [login]=>ana
		print_r($ob);//Mostrarlo con una lista o una tabla

	}*/
	/*while($ob=$consulta->fetch_all()){//Me muestra un array numérico([0]=>Alex)
		print_r($ob);//Mostrarlo con una lista o una tabla

	}*/
	
	/*while($ob=$consulta->fetch_field()){//Devuelve información sobre la columna
		print_r($ob);//Mostrarlo con una lista o una tabla

	}
	*/
	
}
echo '</pre>';
//Cerrar la conexión
$con->close();



?>