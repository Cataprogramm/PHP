<?php
	//Creamos una cookie
	setcookie("cookie_httponly","si",time() + 30,"/","localhost",false,false);
	setcookie("borra","cookie",time() +3600,"/","localhost",true,true);
	header("Location:crear_cookie_httponly.php");

	

?>