<?php
require_once 'Users.php';
$user = new Users(); //crea una instancia y dentro tenemos todas las propiedades y métodos de la clase
$datos = $user->usuarios(); // llamamos al método usuarios y mostramos los datos
	echo "<table>";
	foreach ( $datos as $fila){
		echo "<tr>";
	foreach ( $fila as $columna){
		 echo  "<td> $columna </td>"; 
	}
	 echo "</tr>";
	}
	echo "</table>";
?>