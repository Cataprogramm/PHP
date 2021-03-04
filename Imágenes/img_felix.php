<?php
     $tamañoCuadrado = 500;
     $tamañoCirculo = 200;
     $distancia = 30;
​
     $imagen = imagecreate($tamañoCuadrado, $tamañoCuadrado);
     $fondo = imagecolorallocate($imagen, 0, 0, 0);
​
     $rojo = imagecolorallocate($imagen, 255, 0, 0);
     $verde = imagecolorallocate($imagen, 0, 255, 0);
     $blanco = imagecolorallocate($imagen, 255, 255, 255);
​
     $gradosTotales = 0;
​
     imagerectangle($imagen, 200, 100 ,  400, 100, $blanco);
​
     foreach($_GET as $clave => $valor){
          if(strcmp($clave, 'enviado') !== 0){
               $grados = $valor * 360 / 100;
               $mitadAngulo = $grados / 2;
​
               $gradosPrevios = $gradosTotales;
               $gradosTotales = $gradosTotales + $grados;
​
               /*
               $x = $tamañoCuadrado/2 + ($distancia * sin($gradosTotales + $mitadAngulo));
               $y = $tamañoCuadrado/2 + $distancia * sin($mitadAngulo + $gradosPrevios);
               echo $clave.'<br>';
               echo $grados.' grados<br>';
               echo $mitadAngulo.' mitad<br><br>';
               echo sin($mitadAngulo).'<br>';
               echo sin(180 - (90 + $mitadAngulo)).'<br><br>';
               echo $mitadAngulo + $gradosPrevios.' mitad + previos<br>';
               echo $x.'     --------  '.$y.'<br>';
               echo $grados.'     --------  '.$mitadAngulo.' grados y mitad<br>';
               echo $gradosPrevios.'<br>';
               echo $gradosTotales.'<br>';
               echo $distancia.' distancia'.'<br>';
               echo '<br>';
               */
​
               imagestring($imagen, 10, $x, $y, $clave, $blanco);
​
              imagerectangle($imagen, $x, $y , $x + 5, $y + 5, $blanco);
     
               imagefilledarc($imagen, $tamañoCuadrado/2, $tamañoCuadrado/2, $tamañoCirculo, $tamañoCirculo, $gradosPrevios, $gradosTotales, $$clave, IMG_ARC_PIE);
              
          }
        
     }
​
     if($gradosTotales < 360){
          imagefilledarc($imagen, $tamañoCuadrado/2, $tamañoCuadrado/2, $tamañoCirculo, $tamañoCirculo, 0, 360, $blanco, IMG_ARC_PIE); 
     }
     // imagefilledarc($imagen, $tamañoCuadrado/2, $tamañoCuadrado/2, $tamañoCirculo, $tamañoCirculo, 0, 10, $blanco, IMG_ARC_PIE); 
     imagestring($imagen, 10, 250, 400, 'hola', $blanco);
     imagestring($imagen, 15, 20, 20, 'Elecciones delegado', $blanco);
     header("Content-Type: image/png");
     imagepng($imagen);
     imagedestroy($imagen);
    
?>