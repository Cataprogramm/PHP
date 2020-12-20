<?php
class Miclase {
public $resultado , $indice = 0 ;
function producto($a,$b) {
	 $this ->resultado [$this ->indice] = $a * $b ;
	 $this ->indice ++ ;
 }
function imprime() {
	foreach($this->resultado as $valor) {
		echo $valor , '<br>'; }
	}
}
// Crea objeto con plantilla Miclase
$objeto = new Miclase;
// Aplica función sobre objeto creado
$objeto -> producto(3,4);
$objeto -> producto(10,10);
$objeto -> producto(20,4);
$objeto -> imprime();
?>