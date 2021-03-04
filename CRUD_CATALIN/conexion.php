<?php

	try{
		$base=new PDO('mysql:host=localhost; dbname=dwes','alumno','1234');
		
		$base->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		
		$base->exec("SET CHARACTER SET UTF8");
		
	}catch(Exception $e){
		
		die("Se ha producido un error" . $e->getMessage());
		
	}







?>