<?php

class Figura{

	//Propiedades
	private $nombre;
	private $color;
	private $esRellena;
	
	//Métodos
	public function getNombre(){
		return $this->nombre;
	}
	public function getColor(){
		return $this->color;
	}
	public function setColor($color){
		$this->color=$color;
	}
	public function estaRellena(){
		if($this->esRellena == true){
			return true;
		}	
	}	
	public function estaVacia(){
		if($this->esRellena == false){
			return false;
		}
	}
	public function showInfo(){
			if($this->estaRellena()){
				return "Está rellena la figura" . $this->nombre . " de color " . $this->color;
			}
			else{
				return "La figura está vacía" ;
			}
		
	}
	
	public function __construct(){
			$this->nombre=function(){
				return "Triángulo";
			};
	}
}	
	class Circulo extends Figura{
		//Propiedades
		private $radio;
		//Getters y Setters
		public function getRadio(){
			return $this->radio;
		}
		public function setRadio($radio){
			$this->radio=$radio;
		}
		public function getArea(){
			return pi()*$this->radio*$this->radio;
		}
	
	}
	class Cuadrado extends Figura{
		//Propiedades
		private $lado;
		//Getters y Setters
		public function getLado(){
			return $this->lado;
		}
		public function setLado($lado){
			$this->lado=$lado;
		}
		public function getArea(){
			return $this->$lado*$this->$lado;
		}
	}
	





$f1=new Figura();
echo $f1->getNombre() . "<br>";
echo $f1->getColor() . "<br>";
echo $f1->setColor("rojo");
echo $f1->estaRellena() . "<br>";
echo $f1->estaVacia();
echo $f1->showInfo();


?>