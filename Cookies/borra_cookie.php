
	<?php
		//Borrar cookies
		setcookie("nombre","Catalin", time() - 1);
		header("Location:cookie_caduca.php");
		
	?>
	
