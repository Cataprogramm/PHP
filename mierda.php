<?php
$comision =0;
 $cantidad =3000;
 do
 { $comision +=10;
 $cantidad -=1000;
 } while ( $cantidad >= 0 ) ;
 echo $comision;

?>
