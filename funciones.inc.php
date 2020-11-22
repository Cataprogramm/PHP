<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="author" content="Catalin">
	<meta name="description" content="Incluir la función es_primo y mostrar los 20 primeros">
	<title>Bloque 3 ejercicio 21</title>
</head>
<body>
<!---
En un archivo funciones.inc incluir la función
es_primo().Utlizarla en una program donde muestres los 20 primeros números
primos.
-->
	<?php
	function es_primo($num){
		$condicion=false;
		if($num !==1 && $num !==0){
		
			for($i=2;$i<=$num;$i++){
				if($num % $i ==0){
					 if($num == $i){
						$condicion=true;
					
					}else{
						$condicion=false;
						return $condicion;
					}
				}
			}
		}
		else $condicion=false;
		
		return $condicion;
	}
	$num=mt_rand(1,100);

	for ($i=1;$i<=$num;$i++){
		if(es_primo($i)){
			echo $i . "<br>";
		}
	}	
	?>
</body>
</html>