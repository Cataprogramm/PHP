<?php
include_once('Password.php');
include_once('funciones_formulario.php');
try{
	if(empty($_POST['login'])){
		exit("Debe introducir un usuario");
	}else if(empty($_POST['clave'])){
		exit("Debe introducir una clave");
	}
	$login=filtrado($_POST['login']);
	$clave=filtrado($_POST['clave']);
	
	Password::hash($clave);
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
	//Si pongo clave_hash=:clave me va a salir siempre que está bien, no lo tengo que poner
	//Preparo la sentencia
	$resultado=$conexion->prepare($sql);
	
	//Ejecuto la consulta SQL
	$resultado->execute(array(":login"=>$login));
	
	
	//Lo guardo en un array asociativo y lo recorremos
	if($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
			if(Password::verify($clave,$registro['clave_hash'])){
				$contador++;
			}
			/*
		if(strcmp(sha1($clave),$registro['clave_hash']) === 0){
			$contador++;
			*/
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