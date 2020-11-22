<?php
/*
constantes:definición y uso
*/
	define("Sobresaliente",10);
	const NOTABLE=8;
	echo Sobresaliente . '<br>';
	echo constant("NOTABLE") . '<br>';
	
	echo defined("Sobresaliente")?"Sobresaliente está definida" : "Sobresaliente no está definida";


?>