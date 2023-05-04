<?php
    include 'conexion.php';
    session_start();

    $nombre_usuario = $_SESSION['nombre_usuario'];
    $contrasenia = $_SESSION['contrasenia'];

    $sql = "SELECT * FROM USUARIO WHERE nombreUsuario like '$nombre_usuario' and contrasenia like '$contrasenia' and tipoUsuario like 'expositor'";
    $resultado1 = mysqli_query($con, $sql);
    $filas=mysqli_fetch_array($resultado1);

    $id_expositor = $filas["id_usuario"];
    $descripcion = $_POST['descripcion'];

        // Si se ha enviado una imagen, guarda la imagen en la carpeta de imágenes
        if ($_FILES["pdf"]["name"]) {
            $archivo_temporal = $_FILES["pdf"]["tmp_name"];
            $ruta_archivo = "pictures/repositorio/" . $_FILES["pdf"]["name"];
            move_uploaded_file($archivo_temporal, $ruta_archivo);

            $sql="INSERT INTO REPOSITORIO(id_usuarioExpositor, descripcion, pdf) VALUES('$id_expositor', '$descripcion', '$ruta_archivo')";
    
        } else {
            $sql="INSERT INTO REPOSITORIO(id_usuarioExpositor, descripcion, pdf) VALUES('$id_expositor', '$descripcion')";
    
        }

        // Ejecuta la consulta de inserción
        mysqli_query($con, $sql);

        // Redirecciona a la página principal
        Header("Location: subirExpositor.php");
    

    
?>