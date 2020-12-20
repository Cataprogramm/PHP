<?php
	//Creamos una cookie
	setcookie("segura","si",time() + 30,"/","localhost",true);
	header("Location:ver_cookie.php");


?>