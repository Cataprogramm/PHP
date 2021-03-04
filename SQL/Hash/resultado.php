<?php

try{
	$login=htmlentities(addslashes($_POST['login']));
	$clave=htmlentities(addslashes($_POST['clave']));
	$contrasenia_hasheada=password_hash($clave,PASSWORD_DEFAULT,array['cost']=>15);
	//Conexión
	$servidor='localhost';
	$db='dwes';
	$usuario='alumno';
	$contrasenia='1234';
	//Para comprobar después si está o no creado el usuario
	$contador=0;
	//Conexión con PDO
	$conexion=new PDO("mysql:host=$servidor;dbname=$db",$usuario,$contrasenia);
	//Establecemos el charset
	$conexion->exec("SET CHARACTER SET utf8");
	
	//Sentencia sql
	$sql="SELECT * FROM usuarios where login = :login";//SELECT * FROM usuarios where login = :login and clave=sha1($clave);
	
	//Preparo la sentencia
	$resultado=$conexion->prepare($sql);
	
	//Ejecuto la consulta SQL
	$resultado->execute(array(":login"=>$login));
	
	
	//Lo guardo en un array asociativo y lo recorremos
	while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
			if(password_verify($clave,$contrasenia_hasheada)){
				$contador++;
			}
			/*
		if(strcmp(sha1($clave),$registro['clave_hash']) === 0){
			$contador++;
			*/
		}
	}
	//si el contador es mayor que 0 el usuario existe y se le da la bienvenida, lo contrario es que no existe
	if($contador>0){
		echo "Bienvenido " . $login;
	}else{
		echo "Acceso no autorizado";
	}
	$conexion=null;
	
}catch(PDOException $e){
	die($e->getMessage());
}



?>