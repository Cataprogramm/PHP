<!----DROP USER IF EXISTS 'josemi@localhost';
CREATE USER 'josemi@localhost' IDENTIFIED BY '1234';
GRANT SELECT,UPDATE ON dwes.usuarios TO 'josemi@localhost';-->

<?php
//Conectarnos
$con=new mysqli('localhost','josemi','1234','dwes');
//Comprobar la conexión
if($con->connect_errno !=0){
	exit("Ha fallado la conexión " . $con->connect_error);
}
$con->set_charset("UTF-8");
//Realizar la consulta
$consulta=$con->query("select * from  usuarios");//("select * from  usuarios where login= 'pepe'");
echo "Realiza la consulta <br>";

// Procesar la consulta: Obtener resultados
echo "Número de filas de mi consulta: " . mysqli_num_rows($consulta) . "<br>";
echo "Número de filas que han sido afectadas: " . $con->affected_rows;
echo '<br> <pre>';
if($consulta){
	
	//while($ob=$consulta->fetch_row()){//Me muestra un array enumerado([0]=>Alex)
	while($ob=$consulta->fetch_assoc()){//Me muestra un array asociativo([login]=>Alex)	
		print_r($ob);//Mostrarlo con una lista o una tabla
		/*
				*****ESTO NO HACERLO****
		echo $ob['login'] . '-' . $ob['clave'] . '<br>';
		if(strcmp($obj['login'],'pepe') === 0){
			echo $obj['login'] . '-' . $ob['clave'] . '<br>';
		}*/
	}
}
echo '</pre>';
//Cerrar la conexión
$con->close();

?>