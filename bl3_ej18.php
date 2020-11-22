<!DOCTYPE html>
<html lang="es">
<head>
<!---Hacer un programa que reciba un número de mes de la url (método
GET) y visualice a qué trimestre pertenece o error en caso de que no sea un mes
válido. Utilizar un switch, con el número mínimo de breaks posibles.
-->
	<meta charset="UTF-8">
	<meta name="author" content="Catalin">
	<meta name="description" content="Un programa que reciba un mes de la url y visualice el trimestre,switch">
	<title>Bloque 3 ejercicio 18</title>
</head>
<body>
	<?php
		if(isset($_GET['trimestres'])){
		$trimestres = $_GET['trimestres'];
		
		}switch($trimestres){
		case 1:
		case 2:
		case 3:
				echo 'Pertenece al primer trimestre';
				break;
		case 4:
		case 5:
		case 6:
				echo 'Pertenece al segundo trimestre';
				break;
		case 7:
		case 8:
		case 9:
				echo 'Pertenece al tercer trimestre';
				break;
		case 10:
		case 11:
		case 12:
				echo 'Pertenece al cuarto trimestre';
				break;
		default:
				echo 'Error, no es un mes válido';
		}	
	?>
</body>
</html>