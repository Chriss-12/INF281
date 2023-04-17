<?php
    include 'conexion.php';

    $nombre = $_POST["nombre"];
    $apPaterno = $_POST['apPaterno'];
    $apMaterno = $_POST['apMaterno'];
    $contrasenia = $_POST['contrasenia'];
    $contraseniaVerificacio = $_POST['confirmar-password'];
    $ci = $_POST['ci'];
    $fechaNac = $_POST['fechaNac'];
    $correoElectronico = $_POST['correoElectronico'];
    $nombreUsuario = $_POST['nombreUsuario'];
    $tipoUsuario = $_POST['tipoUsuario'];

    


    if($contrasenia == $contraseniaVerificacio){
        $sql="INSERT INTO USUARIO(nombre, apPaterno, apMaterno, contrasenia, ci, fechaNac, correoElectronico, nombreUsuario, tipoUsuario)
        VALUES('$nombre','$apPaterno','$apMaterno', '$contrasenia', '$ci', '$fechaNac', '$correoElectronico', '$nombreUsuario', '$tipoUsuario')";
        $query= mysqli_query($con,$sql);

        if($query){
            Header("Location: index.php");
        }
    }
    else{
        echo "algo esta incorrecto con la contrasenia";
    }
?>