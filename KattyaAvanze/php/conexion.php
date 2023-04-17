<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "test1";

$conexion = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
if (!$conexion)
{
    echo("No hay conexion: ".mysqli_connect_error());
}
if($conexion){
    echo("Conectado");
}
?>