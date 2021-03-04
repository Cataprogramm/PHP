<?php
$imagen=imagecreate(500,300);
$fondo=imagecolorallocate($imagen,100,255,255);

$azul=imagecolorallocate($imagen,0,0,255);

header("Content-type: image/png");

imagepng($imagen);
imagedestroy($imagen);

?>