<?php
// ----------- Proceso principal
include_once('conectaBD3.php');

$obj = new conectaBD3('dwes'); // crea conexión para usar bd dwes
If ($obj->insertaFila('2021-01-27','2021-01-31','Asignatura nueva') !== false)
{
 echo 'se inserto con exito <br>';
 $obj->cambiaSubject(15,'DWES');
 }
else{
 echo ' fallo al insertar';
}
 /*Borramos la consulta con id 9 después de crearla,para comprobar que se ha introducido miramos la tabla tasks
 $obj->borrarId(9);
 echo "Se borro la asignatura 9";
 */
 
?>