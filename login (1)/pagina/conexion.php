<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "pagina";

$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
if (!$conn)
{
    echo("No hay conexion: ".mysqli_connect_error());
}
if($conn){
    echo("Conectado");
}
?>