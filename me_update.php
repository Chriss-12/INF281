<?php

    include 'conexion.php';

    $id_actividad = $_POST["id_actividad"];
    $id_usuarioExpositor = $_POST['id_usuarioExpositor'];
    $id_usuarioAdministrador = $_POST['id_usuarioAdministrador'];
    $cupos = $_POST['cupos'];
    $carga_horaria = $_POST['carga_horaria'];
    $tipo = $_POST['tipo'];
    $tema = $_POST['tema'];
    $fechaActividad = $_POST['fechaActividad'];

    $sql="UPDATE ACTIVIDAD SET id_actividad='$id_actividad', id_usuarioExpositor='$id_usuarioExpositor', id_usuarioAdministrador='$id_usuarioAdministrador', cupos='$cupos', carga_horaria='$carga_horaria', tipo='$tipo', tema='$tema', fechaActividad='$fechaActividad' WHERE id_actividad='$id_actividad'";
    $query=mysqli_query($con,$sql);
    if($query){
        Header("Location: modificaciones_evento.php");
    }
?>