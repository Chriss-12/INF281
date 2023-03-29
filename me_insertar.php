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
    


    $sql="INSERT INTO ACTIVIDAD VALUES('$id_actividad','$id_usuarioExpositor','$id_usuarioAdministrador', '$cupos', '$carga_horaria', '$tipo', '$tema', '$fechaActividad')";
    $query= mysqli_query($con,$sql);

    if($query){
        Header("Location: modificaciones_evento.php");
    }
?>