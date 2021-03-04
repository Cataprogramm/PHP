<?php
	$contrasenia='1234';
	$contrasenia_hasheada=password_hash($contrasenia,PASSWORD_DEFAULT,[10]);
	//$contrasenia_hasheada=password_hash($contrasenia,PASSWORD_DEFAULT,array('cost'=>15));
	
	//password_hash recibe tres parámetros
	//el segundo dolar nos indica el cost, el número de veces que se puede usar
	
	
	echo $contrasenia . '<br>';
	echo $contrasenia_hasheada . '<br>';

	if(password_verify('1234',$contrasenia_hasheada)){
		echo "Contraseña verificada <br>";
	}else{
		echo "Contraseña no válida <br>";
	}
?>