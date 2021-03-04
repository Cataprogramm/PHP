<?php
$conn=new PDO('mysql:host=localhost;charset=utf8','root','',array(PDO::ATTR_PERSISTENT =>true));

$attributes = array( "AUTOCOMMIT", "ERRMODE", "CASE", "CLIENT_VERSION", "CONNECTION_STATUS",
 "ORACLE_NULLS", "PERSISTENT", "PREFETCH", "SERVER_INFO", "SERVER_VERSION", "TIMEOUT");
foreach ($attributes as $val) { 
	 echo "PDO::ATTR_$val: ";
	 echo $conn->getAttribute(constant("PDO::ATTR_$val")) . "<br>"; 
	 
 }
?>