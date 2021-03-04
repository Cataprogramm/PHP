<?php
$imagen=imagecreatetruecolor(500,300) or die("No puede inicializar una imagen");
$fondo= imagecolorallocate($imagen,100,255,255);

$azul= imagecolorallocate($imagen,0,0,255);
$rojo= imagecolorallocate($imagen,255,0,0);
$verde= imagecolorallocate($imagen,0,255,0);
$blanco=imagecolorallocate($imagen,255,255,255);

//imagestring( $imagen, tamaño, x, y, $texto, $color )
imagestring($imagen,5,130,10,"hola",$rojo);

//imagerectangle( $imagen, x0, y0, x1, y1, $color )//El 0,0 es la esquina superior izquierda
imagerectangle( $imagen, 20, 20, 120, 70, $azul);
//imagefilledrectangle( $imagen, x0, y0, x1, y1, $color )
imagefilledrectangle( $imagen, 20, 90, 120, 140, $azul);

//imagearc( $imagen, xc, yc, ancho, alto, gi, gf, $color)
imagearc( $imagen,250,150 ,200 ,200 ,0 ,360 , $blanco);
imagearc( $imagen,250,150 ,160 ,180 ,0 ,360 , $blanco);
//imagefilledarc( $imagen, xc, yc, ancho, alto, gi, gf, $color1,IMG_ARC_PIE)
imagefilledarc( $imagen, 250, 150,160, 180, 0, 90, $verde,IMG_ARC_PIE);
imagefilledarc( $imagen, 250, 150,160, 180, 90, 180, $blanco,IMG_ARC_CHORD);
imagefilledarc( $imagen, 250, 150,160, 180, 180,270, $azul,IMG_ARC_NOFILL);
imagefilledarc( $imagen, 250, 150,160, 180, 270, 360, $rojo,IMG_ARC_EDGED);


//Envía imagen tras la cabecera
//Si comento el header me tiene que salir decir el error
 header("Content-type: image/png");
 imagepng($imagen);
 imagedestroy($imagen);



?>