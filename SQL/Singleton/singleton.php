<?php
class patronSingleton{ 
	private $Idb; 
	private $filas = array();
	private static $instancia; // contenedor de la instancia
 
	private function __construct() // un constructor privado evita crear nuevos objetos desde fuera de la clase
	{ 
	$this->Idb = new PDO( "mysql:host=localhost; dbname=database" , 'root' , ''); 
	}
 
	public static function singleton() //método singleton que crea instancia sí no está creada
	{ 
		if (!isset(self::$instancia)) {
			 $miclase = __CLASS__;
			 self::$instancia = new $miclase;
		}
		return self::$instancia;
	}
 
	public function __clone() // Evita que el objeto se pueda clonar
	{
	 trigger_error('La clonación de este objeto no está permitida', E_USER_ERROR);
	 }
 
	public function usuarios() //método con el que obtenemos datos de la tabla usuarios
	{ 
	$consulta = $this->Idb->prepare("SELECT * FROM usuarios");
	$consulta->execute();
	if ($consulta->rowCount()>0) :{
		while($row=$consulta->fetch()) {
		$this->filas[] = $row; 
		}
		return $this->filas;
	}
	}
}
?>