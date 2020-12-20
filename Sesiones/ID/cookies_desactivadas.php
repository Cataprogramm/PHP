<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        session_start();
        echo '<pre>';
        print_r($_COOKIE);
        print_r($_POST);
        echo '</pre>';
    ?>
    <a href="session_cookies.php">Enlace</a>
</body>
</html>