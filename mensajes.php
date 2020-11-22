<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="author" content="Catalin">
	<meta name="description" content="Formulario con asunto y opinión">
	<title>Archivo mensajes</title>
<style>
div{
padding: 10px 5px 10px 5px;
}
</style>	
</head>
<body>
<!---Crea el archivo MENSAJES.PHP que tras comprobar que se ha accedido con usuario y password correctas (
usuario con 5 o más caracteres y su password el nombre de usuario al revés) muestre un formulario con campos
para escribir tema de debate (asunto) y la opinión ( área de texto para escribir 300 o más caracteres ) ;
presentará también los siguientes elementos:

Botón de envio con etiqueta Detalle que llame a un nuevo archivo PHP ( nombralo tú ) encargado de
presentar información sobre el texto contenido en la opinión (cuantos caracteres tiene, cuantas palabras,
carácter más repetido, palabra más repetida,... y otras más elegidas por vosotros . La primera se hace sobre el
texto original, el resto sobre los 140 primeros caracteres) y enlace para volver a registrar opiniones
Enlace con etiqueta Nueva Opinión que vuelva a presentar el formulario en blanco Enlace con etiqueta Terminar que presente el documento HTML de identificación de usuario -->



	
<?php	
		
	if(isset($_GET["nombre"]) && isset($_GET["password"])){
			$nombre=$_GET["nombre"];
			$password=$_GET["password"];
			$contrasenia=strrev($nombre);
		if(strlen($nombre)>=5 && strcmp($contrasenia,$password)===0){
?>
			<form action="caracteristicas.php" method="get">

			<label for="tema">Tema:</label>
			<input type="text" name="tema"><br><br>
			
			<label for="comentario">Comentario:</label>
			<textarea id="comentario" name="comentario" maxlength="300" rows="5" cols="45">
			</textarea>
			<br><br>
				<div>
			<input type="submit" value="Detalles">
			

		
			<a href="mensajes.php?nombre=<?php echo $nombre;?>&password=<?php echo $password;?>">Nueva opinión</a>
	
			<a href="usuario.html">Terminar</a>
			</div>	
			</form>
			<?php
		}
		else{
			echo "Error,no has completado los campos correctamente";
		}
	}
	else{
		echo "Error";
	}
	
?>

</body>
</html>


