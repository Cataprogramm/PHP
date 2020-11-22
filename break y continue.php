<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="author" content="Catalin">
	<meta name="description" content="Bucle con continue y break">
	<title>Bucle break y continue</title>
</head>
<body>
<!---
EJ1. Dado un número indicar si es primo o no. Uso de break.
EJ2. Obtener 10 números aleatorios del 1 al 100, pero ignorar los números múltiplos de 7. Uso de continue.
-->
	<?php
	function primo($num){
			do{
			if($num == 1 || $num == 2 || $num == 3 || $num == 5 || $num == 7){
				return true;
				break;
			}
			if($num >= 8 ){
					if ($num%2==0 || $num%3==0 || $num%5==0) {
					return false;
					break;
					}
					}
			if($num >= 8 ){
					if ($num%2>=1 || $num%3>=1 || $num%5>=1) {
					return true;
					break;
					}
			}
			}while(!false);
		
		}
		$numero=79;
 
		if(primo($numero)){
		echo " el numero $numero es primo";
		}
		else {
			echo " el numero $numero no es primo";
		}
		echo "<br> <br>";
	?>

	<?php
	echo "Números que no sean múltiplos del 7 <br>";
	function aleatoria(){
            /*$numeros = [];
            for($i=0; $i <= 10; $i++) { 
                $aleatorios = mt_rand(1,100);
                if($aleatorios%7==0){
                    continue;
                }else{
				}
             //array_push($numeros,$aleatorios);
            }
            for($j=0; $j < count($numeros); $j++) { 
                echo $numeros[$j] . "<br>";
            } 
			*/
			$contador=10;
			for($i=0;$i<$contador;$i++){
				$aleatorios=mt_rand(1,100);
				if($aleatorios%7==0){
					continue;
				}
				echo $aleatorios . "<br>";
			}			
    }
	aleatoria();
	?>
</body>
</html>