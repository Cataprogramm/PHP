<?php
	/*$array4=array(1,50,3,4);
	$array4[8]=1500;
	$array[9]=45;
	unset($array4[9]);
	foreach($array4 as $k=>$v){
		echo "$k=>$v <br>";
	}*/
	$n=0x15;//entero en hexadecimal
	echo "$n <br>";
	
	$alumno=array("nombre"=>"pepe",
				  "edad"=>21,
				  "talla"=>180,
				  "domicilio"=>"calle a",
				  "idiomas"=>array("ingles","frances","español"),
			      "pendientes"=>false);
	
	foreach($alumno as $clave=>$valor){
		echo "$clave=> ";
		if(is_array($valor)){
			foreach($valor as $contenido){
				echo "<br> $contenido ";
			}
		}
		else{
			echo "$valor";
		}
		echo '<br>';
	}
	
	

?>