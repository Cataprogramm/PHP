<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="author" content="Catalin">
	<meta name="description" content="Características del comentario">
	<title>Características</title>
	<style>
table{
	border:1px solid black;
	border-collapse:collapse;

}
h1{
	margin: auto;
	text-align: center;
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
//if(isset($_GET["tema"]) && isset($GET_["comentario"]))
	$tema=$_GET["tema"];
	echo 'El tema es ' .  $tema .'<br>';
	$comentario=$_GET["comentario"];
	echo 'El comentario es ' . $comentario . '<br>';

	echo "<table>";
	echo "<h1>Informe sobre el comentario</h1>";
		echo "<tr>";
	
	echo substr($_GET["comentario"],0,140);
	echo "<td>";
	echo "Longitud"; 
	echo "</td>";
	echo "<td>" .
		$longitud=strlen($comentario);
		echo "<pre>";
		print_r($longitud);
		echo "</pre>"
	. "</td>";
			
		echo "</tr>";
		
		
		echo "<tr><td>";
		echo "Nº_de_palabras";  
		echo "</td>";
		echo "<td>" . 
		$comentario=$_GET["comentario"];
		$array_comentario=explode(" ",$comentario);
		echo "<pre>";
		print_r(count($array_comentario));
		echo "</pre>";
		
		echo "</td>";
		
		
		echo "</tr>";
		
		echo "<tr>";
		
		echo "<td>";
		echo "Letra_más_repetida"; 
		echo "</td>";
		echo "<td>";
			$carac_repetido=count_chars($comentario,0);
			foreach(count_chars($comentario,1) as $i => $val){
				echo "Hay $val instancias de \"" , chr($i) , "\" en la cadena <br><br>"; 
			
				
				/*
				if(max($array_comentario==$val)){
					echo "El carácter que más se repite es " . max($array_comentario);
				
				}*/
			};
				echo "La letra más usada se repite " . max($carac_repetido) . " veces";
		
			
			/*echo "<pre>";
			print_r(str_word_count($comentario,0));
			echo "</pre>";*/
		echo "</td>";	
		
		echo "</tr>";
		
			echo "<tr>";
		
		echo "<td>";
		echo "Palabra_más_repetida: ";  
		echo "</td>";
		echo "<td>";
			

		//substr_count($comentario,$_GET["comentario"])

			echo "<pre>";
			print_r(array_count_values($array_comentario));
			echo max($array_comentario);
			echo "</pre>";
		echo "</td>";	
		
		echo "</tr>";
	
	echo "</table>";
	

/*



$tema=$_GET["tema"];
echo 'El tema es ' .  ($tema) .'<br>';

$comentario=$_GET["comentario"];
echo 'El comentario es ' . $comentario . '<br>';

$longitud=strlen($comentario);
	echo "<pre>";
	print_r($longitud);
	echo "</pre>";

$carac_repetido=count_chars($comentario,0);
	foreach(count_chars($comentario,1) as $i => $val){
		echo "Hay $val instancias de \"" , chr($i) , "\" en la cadena <br><br>";
	}
	/*echo "<pre>";
	print_r($carac_repetido);
	echo "</pre>";*/
/*
print_r(str_word_count($comentario,0));

print_r(array_count_values($comentario));

*/


?>

	<!----<a href="mensajes.php?nombre=<?php echo $nombre;?>&password=<?php echo $password;?>">Volver</a>-->
	<a href="mensajes.php?tema=<?php echo $_GET["tema"];?>&comentario=<?php echo $_GET["comentario"];?>">Volver</a>
</body>
</html>