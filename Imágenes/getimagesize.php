<?php
$datos = getimagesize('foto20.png');
foreach ($datos as $k=>$v)
echo " indice $k contiene $v <br>";
?>