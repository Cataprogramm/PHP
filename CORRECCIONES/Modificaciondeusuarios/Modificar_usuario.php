<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Modificacion de usuarios</title>
        <meta name="author" content="Catalin Mazarache">
        <meta name="description" content="Modificar contraseña del usuario">
		<!---
		Dada la tabla de usuarios que encontraréis en dwes.sql. Hay que hacer un programa que me permita realizar el cambio de contraseña.

		Para ello vamos a aplicar las medidas de seguridad vistas en clase: crear un usuario especifico en la base de datos mysql que tenga nombre: alumno contraseña: 1234, y que pueda realizar únicamente las tareas requeridas para este ejercicio. Por tanto en vez del usuario root, tendremos que usar el usuario alumno, para las conexiones con la base de datos.

		El ejercicio consiste en: crear un formulario donde se indique el usuario, la contraseña anterior y la nueva contraseña. Si el usuario y la contraseña son correctas (tendréis que realizar una consulta en la base de datos aplicando las medidas de seguridad vistas en clase: uso de real_escape_string), entonces realizar una modificación en la base de datos con la nueva contraseña. Si no se ha encontrado al usuario con esa contraseña tendréis que informarle diciendo: "El Usuario o la contraseña no son correctos", pero si el usuario existe y se ha podido realizar la modificación tendréis que informar del exito: "Usuario modificado correctamente".



		Mejoras (opcionales): 

		Mostrar una lista con los usuarios y contraseñas de la tabla, antes del formulario y cuando se actualice la contraseña que se refresque.
		Poner un formulario con dos campos para la nueva contraseña, para que el usuario tenga que repetir la contraseña que quiere modificar, y comprobar que ambas coinciden. Si no coinciden tendréis que informar del error.
		Afinar en el mensaje de error: indicar si el usuario es el que no existe en la base de datos, o bien el usuario existe pero la contraseña no es correcta, es decir la contraseña que hay actualmente registrada, no la que queremos poner nueva. 
		Subir el formulario.php y el fichero de la creación del usuario de la base de datos con los permisos asignados: permisos.sql. 
		--->
		
    </head>
    <body>
	<?php
	
	$conexion = new mysqli('localhost', 'alumno', '1234', 'dwes');
   
    if ($conexion->connect_errno !=0){
        exit("Ha fallado la conexión ". $conexion->connect_error);
    }
	if(!$conexion->set_charset("utf8")){
        exit("Fallo al establecer el charset");
    }
	
	$consulta="SELECT * FROM tabla_usuarios";
	$resultado=$conexion->query($consulta);
	while($fila=$resultado->fetch_object()){
		echo "Usuario: " . $fila->login . "<br>"  . "Contraseña: " . $fila->clave . "<br>";
	}
	$errores=array();
			$validaNombre=false;
			$validaOldPass=false;
			$validaNewPass=false;
			if ($_SERVER['REQUEST_METHOD']!='GET'){
			if(!empty($_POST['nombre'])){
				$validaNombre=true;
			}else{
				$errores[]="No has introducido el nombre";
			}
			if(!empty($_POST['oldpass'])){
				$validaOldPass=true;
			}else{
				$errores[]="No has introducido la contraseña antigua";
			}
			if(!empty($_POST['newpass'])){
				$validaNewPass=true;
			}else{
				$errores[]="No has introducido la nueva contraseña";
			}
			}
    if(isset($_POST['enviar'])&& $validaNombre && $validaOldPass && $validaNewPass){

        $nombre=$_POST['nombre'];
        $usuario=$conexion->real_escape_string($nombre);

        $oldcontra=$_POST['oldpass'];
        $pass_usu=$conexion->real_escape_string($oldcontra);

        $nueva_contra=$_POST['newpass'];
        $new_pass_usu=$conexion->real_escape_string($nueva_contra);
        
        $sentencia="UPDATE tabla_usuarios SET clave='$new_pass_usu' where login='$usuario'";

        $sentencia_usu="SELECT login FROM tabla_usuarios WHERE login='$usuario'";
        $sentencia_pass="SELECT clave FROM tabla_usuarios WHERE clave='$pass_usu' and login='$usuario'";
		
		$conexion->query($sentencia_usu);
		if($conexion->affected_rows>0){
			$conexion->query($sentencia_pass);
			if($conexion->affected_rows>0){
				$conexion->query($sentencia);
				header("Location:Modificar_usuario.php");
			}else{
					echo "La contraseña actual es incorrecta";
				}
			}else{
				echo "El usuario no existe";
			}
        
            $conexion->close();
        
    }else{
    ?>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
        <label for="nombre">Nombre: </label>
        <input type="text" name="nombre" id="nombre"><br>
        <label for="oldpass">Contraseña actual: </label>
        <input type="password" name="oldpass" id="oldpass"><br>
        <label for="newpass">Nueva contraseña: </label>
        <input type="password" name="newpass" id="newpass"><br>
        <input type="submit" name="enviar" value="Enviar">
    </form>
<?php
    if(!empty($errores)){
        echo "Eche un vistazo a los errores de validación: <br>";
        foreach($errores as $contenido){
            echo $contenido . '<br>';
        }
    }
}
?>
	
	
	
	</body>
	</html>