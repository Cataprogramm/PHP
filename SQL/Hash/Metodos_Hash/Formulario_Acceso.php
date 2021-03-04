<!DOCTYPE html>
<html lang="es">
<head>

	<title>Formulario de usuario</title>
	<meta charset="UTF8">
	<meta name="description" content="Acceso de usuario usando métodos">
	<meta name="author" content="Catalin Mazarache">
<!--
Acceso de usuarios identificado por login y con contraseña clave.

formulario login/clave.
Conectar con la base de datos - ver que existe el usuario.
Comprobar si la contraseña es correcta - consultar la contraseña de ese usuario, password_verify (contraseña del usuario y la clave introducida.)
Permitir el acceso o no.
Informar al usuario de los errores.
Utilizar la Clase Password.

Clase Password, con estos métodos de password_hash, password_verify.
class Password {
    public static function hash($password) {
        return password_hash($password, PASSWORD_DEFAULT, ['cost' => 15]);
    }
    public static function verify($password, $hash) {
        return password_verify($password, $hash);
    }
}
-->
</head>
<body>


<?php






?>

<form action="Acceso_usuarios.php" method="POST">
	<label for="login">Login:</label>
	<input type="text" name="login" placeholder="Nombre" required>
	<br><br>
	<label for="clave">Clave:</label>
	<input type="password" name="clave" placeholder="Contraseña" required>
	<br><br>
	<input type="submit" value="Enviar">
</form>


</body>
</html>