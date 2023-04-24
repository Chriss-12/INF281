<?php 
    include 'conexion.php';

    $id=$_GET['id'];
    $sql="SELECT * FROM USUARIO WHERE id_usuario='$id'";
    $query=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($query);
    
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Actualizar</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" href="./css/bootstrap.min.css" />
    </head>
    <body>
    <?php
        include 'menuAdmin.php';
    ?>
        <div class="container mt-5">
            <form action="mu_update.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id_usuario" value="<?php echo $row['id_usuario']?>">
                <label>Nombre
                    <input type="text" class="form-control mb-3" name="nombre" placeholder="nombre" value="<?php echo $row['nombre']?>">
                </label>
                <label>Apellido parterno
                    <input type="text" class="form-control mb-3" name="apPaterno" placeholder="apellido paterno" value="<?php echo $row['apPaterno']?>">
                </label>
                <label>Apellido materno
                    <input type="text" class="form-control mb-3" name="apMaterno" placeholder="apMaterno" value="<?php echo $row['apMaterno']  ?>">
                </label>
                <label>Contrasenia
                    <input type="text" class="form-control mb-3" name="contrasenia" placeholder="contrasenia" value="<?php echo $row['contrasenia'] ?>">
                </label>
                <label>CI
                    <input type="text" class="form-control mb-3" name="ci" placeholder="ci" value="<?php echo $row['ci']  ?>">
                </label>
                <label>Fecha de nacimiento
                    <input type="text" class="form-control mb-3" name="fechaNac" placeholder="fecha de nacimiento" value="<?php echo $row['fechaNac']  ?>">
                </label>
                <label>tipo de usuario
                    <select class="form-control mb-3" name="tipoUsuario">
                        <?php
                            $arrayTipoUsuarios = array('participante', 'expositor', 'administrador', 'control');
                            for ($i = 0; $i < count($arrayTipoUsuarios); $i++) {
                                if($row["tipoUsuario"] == $arrayTipoUsuarios[$i]){
                                    ?>
                                        <option value="<?php echo $row["tipoUsuario"];?>" selected><?php echo $row["tipoUsuario"]?></option>
                                    <?php
                                }
                                else{
                                    ?>
                                        <option value="<?php echo $arrayTipoUsuarios[$i];?>"><?php echo $arrayTipoUsuarios[$i]?></option>
                                    <?php
                                }
                            }
                        
                        ?>
                    </select>
                </label>
                <label>Correo electronico
                    <input type="email" class="form-control mb-3" name="correoElectronico" placeholder="Correo electronico" value="<?php echo $row['correoElectronico']  ?>">
                </label>
                <label>Nombre de usuario
                    <input type="text" class="form-control mb-3" name="nombreUsuario" placeholder="Nombre de usuario" value="<?php echo $row['nombreUsuario']  ?>">
                </label>
                <label>Imagen
                    <input type="file" class="form-control mb-3" id="imagen" name="imagen" value = "<?php echo $row['imagen']  ?>" required>
                </label>
                <br>
                <label>Imagen
                    <td><img src="<?php echo $row["imagen"]; ?>" alt="" width="300"></td>
                </label>
                <br>
                <input type="submit" class="btn btn-primary btn-danger mb-3" value="Actualizar">
            </form>
        </div>
    </body>
</html>