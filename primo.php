<?php
	/*function primo($num){
	$aleatorio=mt_rand(1,100);
	for($i=1;$i<$aleatorio;$i++){
			if($aleatorio % $i == 0){
				echo "No es un numero primo";
				break;
			}
			else{
				echo " es un numero primo";
				break;
			}
	}
	}
	primo(27);
^*/
/*
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
						echo "es primo"
					}
				} while (!false);
	}
	primo(13);
	
	echo "<br> <br>";
	*/
		
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
?>