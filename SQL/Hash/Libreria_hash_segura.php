<?php

class Password {
	
    public static function hash($password) {
        return password_hash($password, PASSWORD_DEFAULT, ['cost' => 15]);
    }
    public static function verify($password, $hash) {
        return password_verify($password, $hash);
    }


}

	$hash = Password::hash('micontraseña');
	// Comprobar la contraseña introducida
	if (Password::verify('micontraseña', $hash)) {
		echo 'Contraseña correcta! <br>';
	} else {
		echo "Contraseña incorrecta! <br>";
	}

?>