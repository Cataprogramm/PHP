<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="author" content="Catalin">
	<meta name="description" content="Dado dos números enteros calcular la división entera en función de varias condiciones">
	<title>Bloque 3 ejercicio 19</title>
</head>
<body>
<!---19. Dado dos números, calcular la división entera, comprobando primero que
los números son positivos, que el primero es mayor que el segundo y que el
divisor es distinto de 0. Dar mensajes de error adecuados en función del fallo.
Hacer el ejercicio utilizando @ y die.
-->
	<?php
	// comprobando primero que los números son positivos
	$num1=6;
	$num2=3;
	$resultado=0;
	@ ($num1>0 && $num2>0) or die("Los números no son positivos");
	$resultado= $num1/$num2;
	echo $resultado . "<br>";
	
	//que el primero es mayor que el segundo
	$num1=6;
	$num2=3;
	$resultado=0;
	@ ($num1>$num2) or die("Los números no son positivos");
	$resultado= $num1/$num2;
	echo $resultado . "<br>";
	
	//que el divisor es distinto de 0
	$num1=6;
	$num2=3;
	$resultado=0;
	@ ($num2>0) or die("Los números no son positivos");
	$resultado= $num1/$num2;
	echo $resultado . "<br>";
	
	
	/*function division($num1,$num2){
		return $num1/$num2;		
	}
	 $resultado=division(6,2);
	 	if(@ (($num1 && $num2)>0) or die("Los números no son positivos")){
			return $num1/$num2;
		}
		else if (@ ($num1>$num2) or die("El número 1 no es mayor que el número 2")){
			 return $resultado=$num1 / $num2;
		}
		else if	(@ $num2 >0 or die("El divisor no es distinto de 0")){
			return $resultado=$num1/$num2;
		}
		*/
	?>
</body>
</html>