<?php

	class Coche{
		private $color;
		function __construct($color){
			$this->color
			
		}
		function __destruct(){
			print "destruyendo el coche ...";
				$this->color . '<br>';
		}
		}
		$seat = new Coche("rojo");
		$seat = new Coche("azul");
		$audi = new Coche("verde");
		$citroen = new Coche("amarillo");
		echo "Realizando otras tareas <br>";




?>