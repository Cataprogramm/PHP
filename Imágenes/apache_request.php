<?php
header( 'X-Powered-By: adivina-adivinanza' );
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title>Apache</title>
<link href="dwes.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
 $x=apache_request_headers();
 foreach($x as $k=>$v)
 echo " $k : $v <br>";
 //header ( 'Location: inicio.php' );
 //header ('Refresh: 5; url=imagen1.php');
 //header( 'X-Powered-By: adivina-adivinanza' );
 
?>
<body>
</html>