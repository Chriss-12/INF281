<?php
$dbhost = "localhost";
$dbuser = "id18360938_root";
$dbpass = "w5[U$(*YZ]J#?^I^";
$dbname = "id18360938_test1";




$conexion = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
//$mysqli->set_charset("UTF-8");

if($conexion->connect_error){

     die("connection failed : " . $conexion-> connect_error);
}

?>