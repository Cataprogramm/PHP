<?php

// ----------- Proceso principal
include_once('Patron.php');
//$obj = new Patron('dwes');
$obj = Patron::singleton(); // crea conexión para usar bd dwes
//$obj2= clone($obj);
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
 
 /*
 ----------Modificación de tareas----------
 $obj=Patron::singleton();
 if($obj->cambiaSubject(10,'Registra clientes')){
	 echo 'Se modificó con éxito la tarea 10';
 }
 else{
	 echo 'Error al modificar la tarea 10';
 }
 
 ------------Borrado de tareas-----------------------
 $obj=Patron::singleton();
 if($obj->borrarId(15)){
	 echo 'Se modificó con éxito la tarea 15 <br>';
 }
 else{
	 echo 'Error al modificar la tarea 15 <br>';
 }
 
 $mis_tareas=$obj->consultaTareas();
 foreach($mis_tareas as $id=>$fila){
	 echo $fila['task_id'] . ' : ' . $fila['subject'] . ' - ' . $fila['description'] . '<br>';
 }
 
 */
 
?>