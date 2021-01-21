<?php

//PASO 1.-CONEXION
try{
	$con=new PDO('mysql:host=localhost;port=3306;dbname=dwes;charset=utf8','alumno','1234',array(PDO::ATTR_PERSISTENT =>true));
}catch(PDOException $e){
		exit ("Fallo la conexion ".$e->getMessage());
}
//PASO 2.- REALIZAR LA CONSULTA

if(empty($_GET['apellidos'])){
	exit ("Debe indicarse los apellidos");
}else if(empty($_GET['sueldo'])){
	exit("Debe indicarse el sueldo");
}

$apellidos=$_GET['apellidos'];
$sueldo=$_GET['sueldo'];
$sentencia="select * from personas where apellidos like :apellidos and sueldo= :sueldo";

/*
//PASO 4.- PREOCESAR LA CONSULTA:OBTENER RESULTADOS
//1ª FORMA--------------------------------------------
$consulta=$con->prepare($sentencia);
$consulta->execute(array(':apellidos'=>$apellidos,':sueldo'=>$sueldo));//no hay que hacer referencia a la conexion
echo "<pre>";
while($fila=$consulta->fetch(PDO::FETCH_ASSOC)){
	foreach($fila as $key =>$valor){
		echo $key." -> ".$valor . "<br>";
	}
}
echo "</pre><br><br>";

*/

//2ª FORMA--------------------------------------------
$consulta=$con->prepare($sentencia);
$consulta->bindParam(':apellidos',$apellidos,PDO::PARAM_STR,90);
$consulta->bindParam('sueldo',$sueldo,PDO::PARAM_INT);

$consulta->execute();

echo "<pre>";
while($fila=$consulta->fetch(PDO::FETCH_ASSOC)){
	foreach($fila as $key =>$valor){
		echo $key." -> ".$valor . "<br>";
	}
}
echo "</pre><br><br>";

//PASO 5.- CERRAR CONEXION
//$con->close();//me da un error si cierro la conexión de esta forma
//$con=NULL;
//unset($con);//para cerrar la conexión puedo usar el unset, el unset destruye la conexión


?>