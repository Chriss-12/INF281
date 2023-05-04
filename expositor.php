<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css" />
    <title>Pagina expositor</title>
</head>
<body>
    <?php
        include 'menuExpositor.php';
        include 'conexion.php';
        session_start();
        $nombre_usuario = $_SESSION['nombre_usuario'];
        $contrasenia = $_SESSION['contrasenia'];
        
        $sql = "SELECT * FROM USUARIO WHERE tipoUsuario like 'Expositor' and nombreUsuario like '$nombre_usuario' and contrasenia like '$contrasenia'";
        $resultado = mysqli_query($con, $sql);
        $filas=mysqli_fetch_array($resultado)
        
    ?>

    <div class="container">
    <div class="row">
        <div class="col-md-5">
            <img src="<?php echo $filas["imagen"]?>" alt="Imagen">
        </div>
        <div class="col-md-7">
        <h2><?php echo $filas["nombre"]." ".$filas["apPaterno"]." ".$filas["apMaterno"]?></h2>
        <hr>
        <h3>Datos Personales</h4>
        <ul class="list-unstyled">
            <li class="fs-4"><strong>Fecha de nacimiento:</strong> "<?php echo $filas["fechaNac"]?>"</li>
            <li class="fs-4"><strong>Correo electrónico:</strong> "<?php echo $filas["correoElectronico"]?>"</li>
            <li class="fs-4"><strong>Nombre usuario:</strong> "<?php echo $filas["nombreUsuario"]?>"</li>
            <li class="fs-4"><strong>Tipo usuario:</strong>"<?php echo $filas["tipoUsuario"]?>"</li>
        </ul>
        </div>
    </div>
    </div>

</body>
</html>