<?php
	function saludo(){
		switch(func_num_args()){
			case 0: $mensaje="Buenos dias";
					$persona="pepe";
					break;
			case 1:
					$persona=func_get_arg(0);
					$mensaje="Buenos dias";
					break;
			case 2:
					$persona=func_get_arg(0);
					$mensaje=func_get_arg(1);
					break;
		
		}
		echo "$mensaje $persona<br>";
		
	}
	saludo();
	saludo("eva");
	saludo("Juan","Buenas tardes");
	
	/*function saludo(){
		switch(func_num_args()){
			case 0: $mensaje="Buenos dias";
					$persona="pepe";
					break;
			case 1:
					$persona=func_get_arg(0);
					$mensaje="Buenos dias";
					break;
			case 2:
					$persona=func_get_arg(0);
					$mensaje=func_get_arg(1);
					break;
		
		}
		echo "$mensaje $persona<br>";
		
	}
	saludo();
	saludo("eva");
	saludo("Juan","Buenas tardes");
	*/
	
	
	/*function saludo($mensaje,$persona){
			echo "$mensaje $persona <br>";
	}
	saludo("Buenos dias" , "pepe");
	saludo("Buenos dias" , "ana");
	saludo("Buenos dias" , "eva");
	
	echo "<br>";
	function saludo2($persona,$mensaje = "Buenos dias"){
			echo "$mensaje $persona <br>";
	}
	saludo2("pepe");
	saludo2("ana","Buenas tardes");
	saludo2("eva");
	
	echo "<br>";
	
	function saludo3($persona="pepe", $mensaje="Buenos dias"){
		echo "$persona $mensaje <br>";
	}
*/
?>