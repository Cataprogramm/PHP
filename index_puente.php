<?php	
	
	echo "Ejercicio 3,tema 1 porcentaje de niños y niñas en el colegio <br>";
	$num_niños=30;
	$num_niñas=25;
	$total=$num_niños + $num_niñas;
	$porcentaje_niños =($num_niños*100)/$total;
	$porcentaje_niñas =($num_niñas*100)/$total;
	echo "El porcentaje de niños es $porcentaje_niños % <br>";
	echo "El porcentaje de niñas es $porcentaje_niñas % <br>";
		

	/*
	echo "Ejercicio 2,tema 1 operaciones con dos variables <br>";
	$num1=2;
	$num2=5;
	$suma=$num1 + $num2;
	echo "La suma de $num1 + $num2 es $suma<br>";
	$resta=$num1 - $num2;
	echo "La resta de $num1 - $num2 es $resta <br>";
	$multiplicacion=$num1 * $num2;
	echo "La multiplicacion de $num1 * $num2 es $multiplicacion <br>";
	$division=$num1 / $num2;
	echo "La division de $num1 / $num2 es $division <br>";
	*/

	/*
	echo "Ejercicio 1,tema1 cambio de variables <br>" ;
	$a= 6;
	$b= 4;
	$c= $a;
	$a= $b;
	$b= $c;
	echo "El valor de la variable a = $a <br>";
	echo "El valor de la variable b = $b <br>";
	*/

	/*
	$a= 6;
	$b= 4;
	$a= &$b;
	echo "El valor de la variable a = $a <br>";
	*/
	
	

	/*
	<pre>
	$x=10;
	print_r($GLOBALS);
	</pre>
	*/
	
	/*
	function ambito(){
	$x=1;//local
	$y=2;//local
	echo "Variables locales la función <br>";
	echo "x = $x <br>";
	echo "y = $y <br>";
	global $x,$y;
	echo "Variables globales";
	$x=10; 
	$y=20;
	ambito();
		echo "Variables locales  a la función <br>";
		echo "x = $x <br>";//10
		echo "y = $y <br>";//20
	}	
	*/
	

		

/*
	echo "Ambito de las variables <br>";
	$x=10; 
	$y=20;
	ambito();
		echo "Variables locales  a la función <br>";
		echo "x = $x <br>";//10
		echo "y = $y <br>";//20

	function ambito(){
	$x=1;//local
	$y=2;//local
	echo "Variables globales la función <br>";
	echo "x = $x <br>";
	echo "y = $y <br>";
	}
*/

	/*echo "Variables <br>";
	$var1 = 100;
	$var2 = 100;
	$var3 = &$var2;
	echo 'Comienzo: $var1,$var2,$var3 <br>';
	$var2=200;
	echo "Asignar:\$var2=$var2 <br>";
	echo "Fin: $var1,$var2,$var3";
	unset($var2);
	//var2=null;
	echo "var2=$var2 <br>";
	echo "var3=$var3 <br>";
	*/

	/*echo "Variables <br>";
	$var1 = 100;
	$var2 = 100;
	$var3 = &$var2;
	echo 'Comienzo: $var1,$var2,$var3 <br>';
	$var2=200;
	echo "Asignar:var2=$var2 <br>";
	echo "Fin: $var1,$var2,$var3";
	unset($var2);
	//var2=null;
	echo "var2=$var2 <br>";
	echo "var3=$var3 <br>";
*/

	/*
	echo "Variables";
	$var1 = 100;
	$var2 = 100;
	$var3 = &$var2;
	echo "Comienzo: $var1,$var2,$var3 <br>";
	$var2=200;
	echo "Asignar:var2=$var2 <br>";
	echo "Fin: $var1,$var2,$var3";
	unset($var2);
	//var2=null;
	echo "var2=$var2 <br>";
	echo "var3=$var3 <br>";
*/

/*
<?php
	$var1 = 100;
	$var2 = 100;
	$var3 = &$var2;
	echo "Comienzo: $var1, $var2,$var3 <br>";
	$var2=200;
	echo "Asignar: var2= $var2 <br>";


?>
*/
?>



