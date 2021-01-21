<?php
 $Id = new mysqli("127.0.0.1", "root", "", "dwes");
if ($Id ->connect_errno) {
 echo "Falló conexión a MySQL: " . $Id ->connect_errno . " - " . $Id ->connect_error ;
 exit;
 }
 
 $Id->autocommit(false);
 $Id->query("INSERT INTO usuarios(login) VALUES ('Cata')");

 $Id ->rollback();
 $Id ->query("INSERT INTO usuarios(login) VALUES ('Juan')");
 $Id ->commit();
?>