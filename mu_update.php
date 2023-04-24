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
    $confirmado = '';
    $codigo = '';
    $correoElectronico = $_POST['correoElectronico'];
    $nombreUsuario = $_POST['nombreUsuario'];


    if ($_FILES["imagen"]["name"]) {
		$archivo_temporal = $_FILES["imagen"]["tmp_name"];
		$ruta_archivo = "imagenes/usuarios" . $_FILES["imagen"]["name"];
		move_uploaded_file($archivo_temporal, $ruta_archivo);

		$sql="UPDATE USUARIO SET nombre='$nombre', apPaterno='$apPaterno', apMaterno='$apMaterno', contrasenia='$contrasenia', ci='$ci', fechaNac='$fechaNac', tipoUsuario='$tipoUsuario', correoElectronico = '$correoElectronico', nombreUsuario = '$nombreUsuario', imagen = '$ruta_archivo' WHERE id_usuario='$id_usuario'";
	} else {
		$sql="UPDATE USUARIO SET nombre='$nombre', apPaterno='$apPaterno', apMaterno='$apMaterno', contrasenia='$contrasenia', ci='$ci', fechaNac='$fechaNac', tipoUsuario='$tipoUsuario', correoElectronico = '$correoElectronico', nombreUsuario = '$nombreUsuario' WHERE id_usuario='$id_usuario'";
	}

	// Ejecuta la consulta de actualización
	mysqli_query($con, $sql);

	// Redirecciona a la página principal
	header("Location: modificaciones_usuario.php");
    


    
    

?>