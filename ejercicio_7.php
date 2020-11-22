<!DOCTYPE html>
<html lang="es">
<head>
<!---Realiza el ejercicio 5 teniendo en cuenta que las variables están en un array asociativo-->
	<meta charset="UTF-8">
	<meta name="author" content="Catalin">
	<meta name="description" content="Array asociativo de la ficha del alumno">
	<title>Ejercicio 7</title>

</head>
<body>
	
</body>
</html>

<?php
	$datos=["Nombre" => "Catalin" , "Apellidos" => "Mazarache" , "Calle" => "calle daw2" , "telefono" => 624034034];
		foreach($datos as $clave=>$valor){
			echo "<tr>". "<th>" .$clave . "</th>" . "=>" . "<th>" . $valor . "<br>" . "</th>"  . "</tr>";
		}
	?>