<?php

class Password {
    const SALT = 'EstoEsUnSalt';
    public static function hash($password) {
        return hash('sha512', self::SALT . $password);
    }
    public static function verify($password, $hash) {
        return strcmp($hash,self::hash($password))===0;
    }
}
// Crear la contraseña:
if(!empty($_GET['pwd'])){
	$micontraseña=$_GET['pwd'];
}else{
	//$micontraseña='micontraseña';
	exit("Introduce una contraseña");
}

$hash = Password::hash('micontraseña');
// Comprobar la contraseña introducida
if (Password::verify('micontraseña', $hash)) {
    echo 'Contraseña correcta! <br>';
} else {
    echo "Contraseña incorrecta! <br>";
}


?>