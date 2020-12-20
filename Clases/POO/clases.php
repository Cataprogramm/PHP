<?php
/*
Crea una interfaz que sea Imprimible con el método imprime(), 
que la implemente el método Cuadrado.
Cuando se imprime un cuadrado tendrás que comprobar si es relleno o no.
Si es relleno lo pintará completo y si no vacío.
*/
interface MiInterfaz{
	public function imprime($comprobar);
}

class Cuadrado implements MiInterfaz{
	public function imprime($comprobar){
		$comprobar=true;
		if($comprobar == true){
			echo "Es relleno";
		
		}else{
			echo "No es relleno";
		}
		return $comprobar;
	}
	


}
$cuadrado = new Cuadrado();
echo $cuadrado->imprime(false);

?>