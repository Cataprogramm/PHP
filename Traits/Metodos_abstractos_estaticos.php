<?php
trait T1{
	 public function Hola($n) {
		return 'Hola ' .$n ; 
	 }
	 public abstract function prueba();
	 public static function suma($a, $b) {
		return $a+$b ; 
	 }
}
class Ejemplo{ 
	use T1;
	public function prueba() {
		return 'Probando ';
	}
}
$o = new ejemplo();
echo $o->prueba();
echo Ejemplo::suma(3,6) ;
?>