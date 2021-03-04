<?php
class Users{
	private $Idb;
	//private $filas = array();
	public function __construct(){
		$host = 'localhost'; $db = 'dwes'; $usuario = 'root'; $password = '';
		$this->Idb = new PDO( "mysql:host=$host; dbname=$db" , $usuario , $password );
	}
	private function set_names() //método para evitar problemas de ñ y acentos con la base de datos
	{ 
	return $this->Idb->query("SET NAMES 'utf8'"); 
	}
	public function usuarios() //método con el que obtenemos datos de la tabla usuarios
	{ 
	self::set_names();
	$consulta = $this->Idb->prepare("SELECT * FROM usuarios");
	$consulta->execute();
	if ($consulta->rowCount()>0) :
		while($row=$consulta->fetch()) {
			//$this->filas[] = $row;
			print_r($row);
		}
			//return $this->filas;
	endif;
	}
}
?>