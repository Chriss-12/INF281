<?php
include("conexion.php");

$nombre = $_POST['txtusuario'];
$pass = $_POST['txtpassword'];

$query = mysqli_query($conn,"SELECT * FROM usuario WHERE nombre= '".$nombre."' and password = '".$pass."'");
$nr = mysqli_num_rows($query);
echo $nr;

if($nr == 2)
{
    
    //header("Location: pagina.html")
    echo "Bienvenido:".$nombre;
  // include("nueva.php");

}
else if($nr==0)
{
    echo "No ingreso";
    
}
?>