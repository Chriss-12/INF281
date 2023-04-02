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
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
        <div class="container mt-5">
            <form action="mu_update.php" method="POST">
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

                <input type="submit" class="btn btn-primary btn-danger" value="Actualizar">
            </form>
        </div>
    </body>
</html>