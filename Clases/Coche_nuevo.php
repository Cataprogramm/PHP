<?php
class Coche_nuevo{
	//propiedades
	private $color;
	private $velocidad;
	const VELOCIDAD_MAXIMA = 120;
	const COLOR_SERIE = "blanco";
	const VELOCIDAD_INICIAL = 0;
	
	//constructores
	/*
	- no recibe nada: inicialice los valores a color=<COLOR DE SERIE>, velocidad =<VELOCIDAD INICIAL >
	- recibe la color: color será el que nos dan,  y la velocidad la inicial
	- recibe la color y la velocidad: inicializa las propiedades con los valores que nos dan. 
	*/
	public function __construct(){
		func_num_args();
		if(func_num_args==0){
			//__construct0();
		$this->color=self::COLOR;
		$this->velocidad=self::VELOCIDAD_INICIAL;
		} 
		if(func_num_args==1){
			//__construct1(func_get_arg(0));
			$this->color=func_get_arg(0);
			$this->velocidad=self::VELOCIDAD_INICIAL; 
		}
		if(func_num_args==2){
			//__construct2(func_get_arg(0,func_get_arg(1)));
			$this->color=func_get_arg(0);
			$this->velocidad=func_get_arg(1);
		}
	}
	/*
	//esto no está terminado y no está bien
	private function __construct0(){
		$this->construct2(self::COLOR,self::VELOCIDAD);
	
	}
	private function __construct1(){
		$this->;
	
	}
	private function __construct2(){
		$this->color=self::COLOR;
		$this->velocidad=self::VELOCIDAD_INICIAL;
	
	}
	*/
	
	

	public function getVelocidad(){
		return $this->velocidad;
	}
	

//PROGRAMA PRINCIPAL.
$seat = new Coche_nuevo("verde", 100);
echo Coche_nuevo::VELOCIDAD_MAXIMA .'<br>';
echo $seat->getVelocidad(). '<br>';

?>