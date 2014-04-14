<?php
session_start();

ini_set("session.cookie_domain",".ascadsemastec.com");

$titulo='Archivo Central - MINAM';

$host='localhost';

$user='root';

$pass='';

$db='minam';

$conexion=mysql_connect("$host","$user","$pass")or die("Error en la coneccion");

$base=mysql_select_db("$db")or die("Error en la conecxion");
?>