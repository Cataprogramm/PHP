
    <?php
    try{
        //$conexion = new PDO('mysql:host=localhost;database=dwes;port=3306', 'root', '', array( PDO::ATTR_PERSISTENT => true));
	$conexion=new PDO('mysql:host=localhost;port=3306;dbname=dwes;charset=utf8','root','',array(PDO::ATTR_PERSISTENT =>true));
	//En lugar de database es dbname=dwes
	
    }catch(PDOException $e){
        echo "Ha fallado la conexion ".$e->getMessage();
    }

    $apellidos = $conexion->quote($_GET['apellidos']);
    $sueldo = $conexion->quote($_GET['sueldo']);

    $sentencia = "SELECT * FROM personas WHERE apellidos = :apellidos AND sueldo = :sueldo";
    echo $apellidos, $sueldo;

    $consulta = $conexion->prepare($sentencia);
    

    var_dump($consulta->bindParam(':apellidos', $apellidos, PDO::PARAM_STR,90));
    var_dump($consulta->bindParam(':sueldo', $sueldo, PDO::PARAM_INT));

   var_dump($consulta->execute());
   //echo $consulta->error();
    // $consulta->execute();
    // $res = $consulta->fetchAll();
    // echo "Filas afectadas: ".$consulta->rowCount();

	$conexion=NULL;

    ?>