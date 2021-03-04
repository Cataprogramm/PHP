<?php

echo $hash = password_hash('micontraseña', PASSWORD_DEFAULT, [15]);

if(password_verify('micontraseña',$hash)){
	echo " <br> correcto <br>";
}else{
	echo "Incorrecto <br>";
}

?>