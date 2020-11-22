<!DOCTYPE html>
<html lang="es">
    <head>
<!--- Realiza una nueva versión del script anterior que muestre el nº de visitas a la página
y un enlace para volver a cargar la página, según se muestra en la figura)-->	
	<meta charset="UTF-8">
	<meta name="author" content="Catalin">
	<meta name="description" content="contador">
	<title>Tipos de datos 3</title>
    <style>
            body      {
                text-align:center;
            }
            table {
                text-align:center; 
                width:550px; 
                background-color: lavender;
            }
            table th {
                border:thin inset; 
                width:9%; 
                font-size:18; 
                font-weight:bold;
                color:blue;
            }
            table td {
                border:thin inset; 
                height: 1em;
                width:9%;   
            }
            .cabecera {
                font-weight:bold;
                color:maroon;
            }
            .valores{
                font-weight:bold;
                color:maroon;
            }            
        </style>
    </head>
    <body>
  <?php
	$cont = 0;
    $codigo_error = error_reporting(E_ERROR );
    $array = array(5, 2.5, "valor", true, null);
    $solucion;

    $a = 0;
    $b = 1;
    $c = 2;
    $d = 3;
    $e = 4;
    $arraybi = array(
            array($a, $b),
            array($a, $c),
            array($a, $d),
            array($a, $e),
            array($c, $d),
            array($c, $e),
            array($d, $e)
    );
	
	$cont = $_GET['cont'];
		
	echo "Ha cargado ésta página ".$cont." veces";
	echo "<table><tr><th></th><th colspan=\"2\">Operaciones</th></tr>";
	echo "<tr class=\"cabecera\"><td>valores</td><td>a+b</td><td>a.b</td><td>a>b</td>";
    for($i=0;$i<count($arraybi);$i++) {
            echo "<tr>";
            $valor = $array[$arraybi[$i][0]];
            $valorseg = $array[$arraybi[$i][0+1]];
           
            echo "<td>a=$valor,b=$valorseg</td>";

            $solucion = $array[$arraybi[$i][0]] + $array[$arraybi[$i][0+1]];
            echo "<td>".$solucion."</td>";

            $solucion = $array[$arraybi[$i][0]].$array[$arraybi[$i][0+1]];
            echo "<td>".$solucion."</td>";

            $solucion = $array[$arraybi[$i][0]] > $array[$arraybi[$i][0+1]];
            echo "<td>".$solucion."</td>";
        echo "</tr>";
    }
    echo "</table>";
	$cont++;
	echo "<a href=\"http://localhost/2.1.2.php?cont=$cont\">Actualizar</a>";
	?>
    </body>
</html>