<?php
include_once('conectaBD.php');
// ----------- Proceso principal
$obj = new conectaBD('dwes'); // crea conexión para usar bd dwes
if ( $obj->creaTablaTask() ) // invoca método de objeto para crear tabla
 echo 'tabla Tasks table creada';
else echo 'Error al crear table Task';
?>