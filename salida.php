<?php
	echo 'Hola ' . $_GET['textNombre'];
	echo '<br>';
	echo ' Tu idioma es el ' . $_GET['idioma'];
	echo '<br>';
	echo 'Cursas las siguientes asignaturas: ';
	foreach($_GET['asignaturas'] as $asignatura){
		echo $asignatura . '  ';
	}
	echo '<br>';
	echo 'Tu curso es ' . $_GET['curso'];
	echo '<br>';
	echo 'Tu domicilio se encuentra en ' . $_GET['domicilio'];
	echo '<br>';
	echo 'Tu usuario es ' . $_GET['username'];
	echo '<br>';
	echo 'Tu contraseña es ' . $_GET['pwd'];
	echo '<br>';
	echo 'Tu cumpleaños es ' . $_GET['cumpleaños'];
	echo '<br>';
	echo 'Llevas un total de ' . $_GET['años_estudio'] . ' años estudiando';
	
?>
