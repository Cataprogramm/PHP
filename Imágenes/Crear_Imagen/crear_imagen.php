<?php 
$imagen=imagecreatefrompng("foto20.png");
 header("Content-type: image/png");
 imagepng($imagen);
 imagedestroy($imagen);
 /*
// script img1.php
 $imagen= imagecreate(300, 30); // ancho x alto
// establece color de fondo
 //$fondo= imagecolorallocate($imagen,100,255,255);
 //$azul= imagecolorallocate($imagen,0,0,255);
 $rojo= imagecolorallocate($imagen,255,0,0);
 //$verde= imagecolorallocate($imagen,0,255,0);
// envía imagen tras la cabecera
*/
?>
