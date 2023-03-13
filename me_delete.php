<?php

    include 'conexion.php';

    $id = $_GET["id"];

    $sql="DELETE FROM ACTIVIDAD WHERE id_actividad='$id'";
    $query=mysqli_query($con,$sql);

    if($query){
        Header("Location: modificaciones_evento.php");
    }
?>