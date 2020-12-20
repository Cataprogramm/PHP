<?php

 class Coche{

	//Propiedades
	private $color;
	private $velocidad;


	public function Coche($color,$velocidad=0){
		$this->color=$color;
		$this->velocidad=$velocidad;
	
	}
	//constructor mágico
	public function __construct($color,$velocidad=0){
		echo "Este es el constructor mágico <br>";
		$this->color=$color;
		$this->velocidad=$velocidad;
	
	}
	public function getVelocidad(){
		return $this->velocidad;
	
	}

}
//Programa principal
$micoche=new Coche("rojo",110);
echo Coche::VELOCIDAD_MAXIMA . '<br>';
echo $micoche->getVelocidad();

?>