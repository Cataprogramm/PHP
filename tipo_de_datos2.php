 <?php
	$cont = 1;
    $codigo_error = error_reporting(E_ERROR );
    $array = array(5, 2.5, "klk", true, null);
    $res;

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
	echo "Ha cargado ésta página ".$cont." veces";
	echo "<table><tr><th></th><th colspan=\"2\">Operaciones</th></tr>";
	echo "<tr class=\"cabecera\"><td>valores</td><td>a+b</td><td>a.b</td><td>a>b</td>";
    for($i=0;$i<count($arraybi);$i++) {
            echo "<tr>";
            $valor = $array[$arraybi[$i][0]];
            $valorseg = $array[$arraybi[$i][0+1]];
           
            echo "<td>a=$valor,b=$valorseg</td>";

            $res = $array[$arraybi[$i][0]] + $array[$arraybi[$i][0+1]];
            echo "<td>".$res."</td>";

            $res = $array[$arraybi[$i][0]].$array[$arraybi[$i][0+1]];
            echo "<td>".$res."</td>";

            $res = $array[$arraybi[$i][0]] > $array[$arraybi[$i][0+1]];
            echo "<td>".$res."</td>";
        echo "</tr>";
    }
    echo "</table>";
	if (isset($_GET['cont'])){
		$cont = $_GET['cont'];
	}
	$cont++;
	echo "<button onclick=\"location.href=\'file:///K:/AServidor/2.1.2.html?cont=$cont\'\">Actualizar</button>";
	?>