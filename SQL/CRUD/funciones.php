<?php

function filtrado($datos){
	$datos=trim($datos);//Elimina espacios en blanco
	$datos=stripslashes($datos);//Elimina los backslashes
	$datos=htmlspecialchars($datos);//Convierte caracteres especiales en entidades HTML
	return $datos;
	
}

?>