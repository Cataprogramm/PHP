<?php
		//Crear cookies
		setcookie("curso","DAW", time() + 3600, '/' , 'localhost');
		header("Location:Cookie_con_dominio.php");
	?>