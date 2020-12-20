<?php
class Clase1{
	public $a='a es Public <br>';
	protected $b='b es Protected<br>';
	private $c='c es Private';
	function mostrar(){
		echo $this->a .  'accede desde ' .__CLASS__ . 'y el método' . __METHOD__ . '<br>';  
		echo $this->b .  'accede desde ' .__CLASS__ . 'y el método' . __METHOD__ . '<br>'; 
		echo $this->c .  'accede desde ' .__CLASS__ . 'y el método' . __METHOD__ . '<br>'; 
	}
	
}
class Clase2 extends Clase1{




}



?>

include_once 'Clase1.php';
$obj=new Clase1();
obj->mostrar();