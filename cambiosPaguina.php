<?php
    include 'conexion.php';

    
    //$color = $_POST["color"];
    $nombre = $_POST["nombre"];
    echo $nombre;
    if(!isset($nombre)){
        $nombre = 'LexCorp';
    }   

    // Ejecuta la consulta de inserción
    //mysqli_query($con, $sql);

    // Redirecciona a la página principal
    


    
?>