<?php
class Base{ 
	public function decirHola() {
		echo '¡Hola '; 
	}
}

trait DecirMundo{ 
	public function decirHola(){ 
		//parent::decirHola(); si lo descomentamos me mostrará un Hola Mundo
		echo 'Mundo!'; 
	}
}
class saludo extends Base {
	use DecirMundo; 
	/*
	public function decirHola(){
		echo 'Hola de la clase saludo <br>';
	}
	*/
}
$objeto_saludo = new saludo();
// los métodos de la clase actual sobreescriben los del Trait,
// y los del trait sobreecriben los de la clase base
$objeto_saludo->decirHola(); // mostraría ¡ Hola Mundo!
?>