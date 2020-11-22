<?php
//paso por referencia y por valor
//crear una función que reciba un parámetro por valor y le concatene un texto
function concatenaValor($cadena){
	$cadena= $cadena . "concatena un texto por valor";
	
}

//crear una función que reciba un parámetro por referencia y le concatene un texto
function concatenaReferencia(&$cadena){
	$cadena= $cadena . " concatena un texto por referencia";
}	
	//crear una variable tipo string
	$texto="hola";
//probar las funciones
concatenaValor($texto);
echo "$texto <br>";
concatenaReferencia($texto);
echo "$texto <br>"; 


?>