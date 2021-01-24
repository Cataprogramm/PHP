<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Document</title>
    <meta name="author" content="Dalwin">
    <meta name="description" content="consulta PDO preparada de la tabla personas">
</head>
<body>
<?php
/**
 * Realizar una consulta PDO, con conexión persistente.
 *
 * A la tabla personas.
 *
 * Los parámetros de búsqueda son apellidos y sueldo, y deben recibirse por GET.
 *
 * Realizar la consulta de dos formas distintas:
 *
 * 1º en el execute ( pasar los valores de apellidos y sueldo).
 *
 * 2º antes del execute, usar bindParam() y asociar los valores de apellidos y sueldo.
 */
$valido = true;
$error = [];
if(isset($_GET['buscar'])){
    //PASO 1. Conectarnos.
    try {
        $con = new PDO('mysql:hosts=localhost;dbname=dwes;charset=utf8','alumno', '1234', [PDO::ATTR_PERSISTENT => true]);
        //PASO 2. Comprobar la conexión
    } catch (PDOException $e) {
        exit ('Falló la conexión: ' . $e->getMessage());
    }
    //PASO Check
    if (empty ($_GET['apellidos'])){
        $error[] = "Debe indicar los apellidos.";
        $valido = false;
    }else if (empty ($_GET['sueldo'])){
        $error[] = "Debe indicar el sueldo.";
        $valido = false;
    }
    if($valido == true) {
        //PASO 3. Realizar la consulta
        $apellidos = $_GET['apellidos'].'%';
        $sueldo = intval($_GET['sueldo']);
        $sentencia = "select * from dwes.personas where apellidos like :apellidos and sueldo = :sueldo";

        /*1ª forma
        $consulta = $con->prepare($sentencia);
        $consulta->bindParam(':apellidos', $apellidos, PDO::PARAM_STR, 90);
        $consulta->bindParam(':sueldo', $sueldo, PDO::PARAM_INT);
		$consulta->execute();//Ejecutamos la consulta
		*/
        //2ª forma
        $consulta=$con->prepare($sentencia);
        $consulta->execute(array(':apellidos'=>$apellidos, ':sueldo'=>$sueldo));

        
       
        //PASO 4. Procesar la consulta: Obtener resultados
        while ($fila = $consulta->fetch(PDO::FETCH_ASSOC)) {
            echo "<pre>";
            print_r($fila);
            echo '</pre><br>';
        }
        //PASO 5. Cerrar la conexión
        unset($con);
    }
    }else{
        ?>
    <form action="<?php $_SERVER['PHP_SELF'];?>" method="get">
        <label for="apellidos">apellidos:</label>
        <input name="apellidos" type="text" id="apellidos" value="<?php echo !empty($_POST['apellidos']) ? $_POST['apellidos']:"" ?>">
        <label for="sueldo">sueldo:</label>
        <input name="sueldo" type="number" id="sueldo" value="<?php echo !empty($_POST['sueldo']) ? $_POST['sueldo']: 0 ?>">
        <input type="submit" name="buscar">
    </form>
    <?php
    if (!empty($error)){
        foreach ($error as $value) {
            echo "<p class='errores'>".$error = $value . "</p><br>";
        }
    }
}
?>
</body>
</html>
