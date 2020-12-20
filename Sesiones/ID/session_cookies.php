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
        if(isset($_GET['PHPSESSID'])){
            echo $_GET['PHPSESSID'];
        }else{
            echo "no hay get";
        }
        echo '</pre>';
    ?>
            <form action="cookies_desactivadas.php" method = "post">
                <input type="submit" name = "submit">
            </form>
            <a href="cookies_desactivadas.php">Enlace</a>
</body>
</html>