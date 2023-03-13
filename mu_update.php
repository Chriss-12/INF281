<?php

    include 'conexion.php';

    $id_usuario=$_POST['id_usuario'];
    $nombre = $_POST['nombre'];
    $apPaterno = $_POST['apPaterno'];
    $apMaterno = $_POST['apMaterno'];
    $contrasenia = $_POST['contrasenia'];
    $ci = $_POST['ci'];
    $fechaNac = $_POST['fechaNac'];
    $tipoUsuario = $_POST['tipoUsuario'];

    $sql="UPDATE USUARIO SET nombre='$nombre', apPaterno='$apPaterno', apMaterno='$apMaterno', contrasenia='$contrasenia', ci='$ci', fechaNac='$fechaNac', tipoUsuario='$tipoUsuario' WHERE id_usuario='$id_usuario'";
    $query=mysqli_query($con,$sql);
        if($query){
            Header("Location: modificaciones_usuario.php");
        }
?>