<?php
// Comprobar si se ha seleccionado una imagen
if(isset($_FILES['imagen'])) {
    // Obtener detalles de la imagen
    $nombre = $_FILES['imagen']['name'];
    $tipo = $_FILES['imagen']['type'];
    $tamano = $_FILES['imagen']['size'];
    $tmp = $_FILES['imagen']['tmp_name'];
    $error = $_FILES['imagen']['error'];
    $ruta = '';
    
    // Comprobar si el archivo subido es una imagen
    $permitidos = array('image/jpeg', 'image/png', 'image/gif');
    if(in_array($tipo, $permitidos)) {
        // Comprobar si no hay errores en la c
        
        if($error == 0) {
            // Mover la imagen cargada a la carpeta deseada
            $ruta = "pictures/usuarios" . $nombre;
            if(move_uploaded_file($tmp, $ruta)) {
                echo "La imagen se ha subido correctamente";
                
            } else {
                echo "Ha ocurrido un error al subir la imagen";
            }
        } else {
            echo "Ha ocurrido un error en la carga de la imagen";
        }
    } else {
        echo "El formato de la imagen no es válido";
    }
}
?>