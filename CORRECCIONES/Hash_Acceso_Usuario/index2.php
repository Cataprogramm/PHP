<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="author" content="Belmont">
    <meta name="description" content="">
    <title>YourPage</title>
    <style>
        h1 {
            color: green;
            text-align: center;
        }
    </style>
</head>
<body>

    <?php
    session_start();
    if (isset($_SESSION['nombre'])) {
    ?>

    <h1>Bienvenido <?php echo $_SESSION['nombre']?> a tu sesión</h1>

    <?php
        unset($_SESSION['nombre']);
    }

    ?>

</body>
</html>