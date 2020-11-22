<!DOCTYPE html>
<html lang="es">
<head>
<!---
EJ1. Dado un número indicar si es primo o no. Uso de break.
EJ2. Obtener 10 números aleatorios del 1 al 100, pero ignorar los números múltiplos de 7. Uso de continue.
-->
	<meta charset="UTF-8">
	<meta name="author" content="Catalin">
	<meta name="description" content="Bucle con continue y break">
	<title>Bucle break y continue</title>
</head>
<body>
	<?php
	function primo($numero){
				do {
					if ($numero == 2 || $numero == 3 || $numero == 5 || $numero == 7) {
						echo "Es primo";    
					break;
					}
					else if($numero%2 == 0 || $numero%3 == 0 || $numero%5 == 0 || $numero%7 == 0){
						echo "No es primo";
					break;
					}	
					else{
						echo "Es primo";
					break;
					}
						
				} while (!false);
			}
	primo(7);
	echo "<br> <br>";
?>

	<?php
	function continuee(){
            $numeros = [];
            for ($i=0; $i <= 11; $i++) { 
                $tmp = mt_rand(1,100);
                if($tmp%7==0){
                    continue;
                }
                array_push($numeros,$tmp);
            }

            echo "-------------------------------------<br>";
            for ($i=0; $i < count($numeros); $i++) { 
                echo $numeros[$i] . "<br>";
            }
            
        }
	continuee();
	?>
</body>
</html>