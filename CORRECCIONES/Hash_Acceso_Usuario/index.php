<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="author" content="Belmont">
    <meta name="description" content="ConstructorClasePhp">
    <title>Index</title>
    <style>
        body {
            display: flex;
            justify-content: center;
        }
    </style>
    <?php
    
    ?>
</head>
<body>
    <fieldset>
        <legend>Crea una cuenta</legend>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
            <input type="text" name="_login" placeholder="Nombre" required="required"><br><br>
            <input type="password" name="_clave" placeholder="Clave" required="required"><br><br>
            <input type="submit" value="OK"><br>
            <br>
            <br>
        </form>
    </fieldset>

    <fieldset>
        <legend>Accede a tu cuenta</legend>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
            <input type="text" name="login" placeholder="Nombre" required="required"><br><br>
            <input type="password" name="clave" placeholder="Clave" required="required"><br><br>
            <input type="submit" value="OK"><br>
            <br>
            <br>
        </form>
    </fieldset>
    
    <?php
    
    const SALT = "miSalt";

    if (isset($_POST['_login']) && !empty($_POST['_login']) && isset($_POST['_clave']) && !empty($_POST['_clave'])) {
        $conexion = new mysqli("localhost", "alumno", "1234", "dwes");

        if($conexion->connect_errno != 0) {
            exit("Se ha producido un error al hacer la conexion" . $conexion->connect_error);
        }

        $login = $conexion->real_escape_string($_POST['_login']);
        $clave_hash = hash("sha512", SALT . $_POST['_clave']);

        $sql = "insert into usuarios_hash values ('$login', '$clave_hash')";

        if ($consulta = $conexion->query($sql)) {
            echo "Se ha podido dar de alta como $login";
            unset($conexion);
        } else {
            echo $sql . "<br>";
            exit("Se ha producido un error al crear la cuenta");
        }
    } if (isset($_POST['login']) && !empty($_POST['login']) && isset($_POST['clave']) && !empty($_POST['clave'])) {
        $conexion = new mysqli("localhost", "alumno", "1234", "dwes");

        if($conexion->connect_errno != 0) {
            exit("Se ha producido un error al hacer la conexion" . $conexion->connect_error);
        }

        $login = $_POST['login'];
        $clave_hash = hash("sha512", SALT . $_POST['clave']);

        $sql = "select * from usuarios_hash where login = '$login' and clave = '$clave_hash'";

        if ($consulta = $conexion->query($sql)) {
            if ($conexion->affected_rows > 0) {
                session_start();
                $_SESSION["nombre"] = $login;
                header("location: index2.php");
                unset($conexion);
            } else {
                echo "<div style='color: red'>Los datos no son correctos</div>";
            }
        } else {
            exit("Se ha producido un error al entrar en tu cuenta");
        } 
    }


    /*
        $conexion = new mysqli("localhost", "root", "", "dwes");

        if($conexion->connect_errno != 0) {
            exit("Se ha producido un error al hacer la conexion" . $conexion->connect_error);
        }

        $sql = "select * from dwes.usuarios where login = ?";

        if (!$consulta = $conexion->prepare($sql)) {
            exit("Error al preparar la consulta" . $conexion->error);
        }

        $nombre = "Raquel";

        $consulta->bind_param("s", $nombre);
        $consulta->execute();
        $consulta->bind_result($login, $clave);

        while($consulta->fetch()) {
            echo "$login $clave <br>";
        }*/
    ?>
</body>
</html>