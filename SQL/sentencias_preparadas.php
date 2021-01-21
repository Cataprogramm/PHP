
<?php

//Conexión
$conexion=new mysqli("localhost","root","","dwes");

if(!$conexion->set_charset("utf8")){
	exit("Ha fallado establecer el charset");
}
//Comprobar la conexion
if($conexion->connect_errno !=0){
	echo "No se ha podido establecer la conexión " . $conexion->connect_error;
}
if(!($orden=$conexion->prepare("INSERT into USUARIOS VALUES(?,?)"))){
	echo "Fallo la preparación: " . $conexion->errno . "-" . $conexion->error;
}
//Sentencia parametrizada: etapa 2 vinculación y ejecución
$y=array('Cata','Alex','Juan');
$x=0; $z=$y[$x];
if (!$orden->bind_param("is",$x,$z)){
	echo "Fallo la vinculación de parámetros: " . $orden->errno . "-" . $orden->error;
}

for($x=0;$x<3;$x++){
	for($z=$y[$x];$z<3;$z++){
		if(!$orden->execute()){
			echo "Fallo la ejecución: " . $orden->errno . "-" . $orden->error;
		}
	}

}
$orden->close();
$conexion->close();
?>