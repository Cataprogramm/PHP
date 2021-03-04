<?php
$nombre_fichero = 'foto20.png';

$im = imagecreatefrompng($nombre_fichero);
$i= !empty($_GET['tipo'])?$_GET['tipo']:0;
switch($i){
	case 1: 
		imageflip($im, IMG_FLIP_VERTICAL);
		break;
	case 2:
		imageflip($im, IMG_FLIP_HORIZONTAL);
		break;
	case 3:
		imageflip($im, IMG_FLIP_BOTH);
		break;
}


/*
// Voltea imagen verticalmente
//imageflip($im, IMG_FLIP_VERTICAL);
//imageflip($im, IMG_FLIP_HORIZONTAL);
imageflip($im, IMG_FLIP_BOTH);
*/
header("Content-type: image/png");
// Enviar
imagepng($im);
imagedestroy($im);
?>