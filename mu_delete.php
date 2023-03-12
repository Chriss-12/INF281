<?php

    include 'conexion.php';

    $id_usuario = $_GET["id"];

    $sql="DELETE FROM USUARIO WHERE id_usuario='$id_usuario'";
    $query=mysqli_query($con,$sql);

    if($query){
        Header("Location: modificaciones_usuario.php");
    }
?>