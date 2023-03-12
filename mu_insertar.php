<?php
    include 'conexion.php';

    $id_usuario = $_POST["id_usuario"];
    $nombre = $_POST['nombre'];
    $apPaterno = $_POST['apPaterno'];
    $apMaterno = $_POST['apMaterno'];
    $contrasenia = $_POST['contrasenia'];
    $ci = $_POST['ci'];
    $fechaNac = $_POST['fechaNac'];
    $tipoUsuario = $_POST['tipoUsuario'];
    


    $sql="INSERT INTO USUARIO VALUES('$id_usuario','$nombre','$apPaterno','$apMaterno', '$contrasenia', '$ci', '$fechaNac', '$tipoUsuario')";
    $query= mysqli_query($con,$sql);

    if($query){
        Header("Location: modificaciones_usuario.php");
    }
?>