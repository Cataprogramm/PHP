<?php

include('conexion.php');

$id = $_GET["id"];

$base->query("DELETE FROM CARRERAS WHERE ID='$id'"); 

header('Location:index.php');



?>