<?php
    include 'conexion.php';

    
    $color = $_POST["color"];
    $nombre = $_POST["nombre"];

        

    // Ejecuta la consulta de inserción
    //mysqli_query($con, $sql);

    // Redirecciona a la página principal
    Header("Location: modificaciones_usuario.php");


    
?>