<?php
require_once 'singleton.php'; //incluimos el archivo que contiene nuestra clase

$conBD = patronSingleton::singleton(); //el metodo singleton es quien crea la instancia de la clase

$usuario = $conBD->usuarios(); //accedemos al método usuarios para obtener datos de una tabla

foreach ($usuario as $fila) // mostramos los datos de la tabla
{
	……
}

// si se crean instancias con new dará error, ya que el constructor es de ámbito privado
$conBD_2 = new patronSingleton() ; // Error

// La creación de nuevas instancias devuelven la instancia ya creada ( $conBD )
$conBD_2 = patronSingleton::singleton();

// Si se quiere clonar el objeto tampoco nos deja y da error
$conBD_2 = clone $conBD;
$otro_usuario = $conBD_2->usuarios();
?>