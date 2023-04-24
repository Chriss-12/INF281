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
    $confirmado = '';
    $codigo = '';
    $correoElectronico = $_POST['correoElectronico'];
    $nombreUsuario = $_POST['nombreUsuario'];

        // Si se ha enviado una imagen, guarda la imagen en la carpeta de imágenes
        if ($_FILES["imagen"]["name"]) {
            $archivo_temporal = $_FILES["imagen"]["tmp_name"];
            $ruta_archivo = "pictures/usuarios/" . $_FILES["imagen"]["name"];
            move_uploaded_file($archivo_temporal, $ruta_archivo);

            $sql="INSERT INTO USUARIO VALUES('$id_usuario','$nombre','$apPaterno','$apMaterno', '$contrasenia', '$ci', '$fechaNac', '$correoElectronico', '$nombreUsuario', '$tipoUsuario', '$confirmado', '$codigo', '$ruta_archivo')";
    
        } else {
            $sql="INSERT INTO USUARIO VALUES('$id_usuario','$nombre','$apPaterno','$apMaterno', '$contrasenia', '$ci', '$fechaNac', '$correoElectronico', '$nombreUsuario', '$tipoUsuario', '$confirmado', '$codigo')";
    
        }

        // Ejecuta la consulta de inserción
        mysqli_query($con, $sql);

        // Redirecciona a la página principal
        Header("Location: modificaciones_usuario.php");
    

    
?>