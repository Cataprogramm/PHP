<?php
trait Info{ 
 function getType() { }
 function getDescripcion() { }
}

class B //extends A 
{ 
	use Info;
	private $tipo;
	private $descripcion;
	public function __construct($tipo,$descripcion){
		$this->tipo=$tipo;
		$this->descripcion=$descripcion;
	}
 }
class C //extends X 
{ 
	use Info; 
	private $tipo="Tipo de C";
	private $descripcion= "descripcion de C";
 }
 $objeto_B=new B("Tipo de B","descripcion de B");
 $objeto_C=new C();
 echo $objeto_B->getType() . '<br>';
 echo $objeto_B->getDescripcion() . '<br>';
  
 echo $objeto_C->getType() . '<br>';
 
?>