

<?php
/*
La clase Trabajador cuenta con:
Propiedades:
-------------
-nombre
-edad
-experiencia_laboral
-------------
Constructor que recibe todos los parámetros
Constructor que recibe el nombre y la edad
getEdad()
Método  tiene_experiencia_laboral():
si tiene más de 10 años de experiencia laboral es considerado senior
------------------------------------------------------------------------
La clase Programador cuenta con:
Propiedades:
-------------------
-solucion_problema //booleano que inicializamos a false, indica que el problema no ha sido arreglado/solucionado
-----------------
Constructor que recibe los datos de la clase padre
Método solucionar() //True puesto que el problema ha sido solucionado
Método problema_solucionado() //devuelve el resultado del problema
-----------------------------------------------------------------------
La clase Diseniador cuenta con:
Propiedades:
---------------------
pagina_diseniada //lo inicializamos a false, puesto que la página no ha sido creada/diseniada
-----------------
Constructor que recibe los datos de la clase padre
La función diseniar() //devuelve true si la página ha sido diseniada
La función esta_diseniado_la_pagina() //devuelve el valor de la pagina_diseniada, si ha sido o no creada/diseniada
----------------------------------------------------------------
Por último lo testeamos
*/


	//Crear una Interfaz con dos clases
	class Trabajador{
		
			//Propiedades
			private $nombre;
			private $edad;
			private $experiencia_laboral=5;//puede ser junior si tiene menos de 2 años o senior si tiene más de 10 años
			
			
			//Constructor
		
			 function Trabajador($nombre,$edad,$experiencia_laboral){
				$this->nombre=$nombre;
				$this->edad=$edad;
				$this->$experiencia_laboral=5;
			}
			 function __construct($nombre,$edad=18){
				echo "Este es el constructor mágico <br>";
				$this->nombre=$nombre;
				$this->edad=$edad;
			
			}
			 function getEdad(){
				return $this->edad;
			}
			//Mediante está funcion, si tiene más de 10 años de experiencia laboral es considerado senior
			function tiene_experiencia_laboral(){
				if($experiencia_laboral >= 10){
					return true;
				}else{
					return false;
				}
			}
	}
	class Programador extends Trabajador{
			//Propiedades
			private $solucion_problema=false;
			
			function __construct(){
				parent::__construct("Juan",19);
			}
			
			function solucionar(){
				$this->solucion_problema = true;
			}
			function problema_solucionado(){
				return $this->solucion_problema;
			}
			
	
	}
	
	class Diseniador extends Trabajador{
			//Propiedades
			private $pagina_diseniada=false;
			//Constructor mágico
			function __construct(){
				parent::__construct("Carlos",40);
			}
			function diseniar(){
				$this->pagina_diseniada=true;
			}
			function esta_diseniado_la_pagina(){
				return $this->pagina_diseniada;
			
			}
	
	}
	$trabajador=new Trabajador("Alex",21,11);
	echo Trabajador::tiene_experiencia_laboral();
	echo $trabajador->getEdad();
	
	$programador=new Programador();
	Programador::problema_solucionado();
	
	$diseniador=new Diseniador();
	Diseniador::esta_diseniado_la_pagina();

	
	
	
	

?>