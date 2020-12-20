<?php

class Datos{
	
	protected $datos=array();
	public function __set($nombre,$valor){
		$this->datos[$nombre] = $valor;
	}
	public function __get($nombre){
		return $this->datos[$nombre];
	}
}
$datos=new Datos;
$datos->primero ="Este es el primer dato";
$datos->segundo ="Este es el segundo dato";
$datos->tercero ="Este es el tercero dato";
echo $datos->primero . "<br>";	
echo $datos->segundo . "<br>";
echo $datos->tercero . "<br>";	
	
	
	
	/*private $color;
	public function __set($propiedad,$valor){
		$this->$propiedad = $valor;
	}
	public function __get($propiedad){
		if(property_exists($this,$propiedad)){
			return $this->$propiedad;
		}
	}
}
$datos= new Datos();
$datos->noexisto="Ahora si que existo";
$datos->color="rojo";
echo '<pre>';
print_r($datos);
echo '</pre>';
//var_dump($datos);

*/


?>