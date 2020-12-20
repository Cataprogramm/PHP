<?php
	session_start();
	echo "<pre>";
	print_r($_SESSION);
	echo "</pre>";
	
	
	//Borrar sesiones
	session_destroy();
?>