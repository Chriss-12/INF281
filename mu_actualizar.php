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
                <input type="text" class="form-control mb-3" name="nombre" placeholder="nombre" value="<?php echo $row['nombre']?>">
                <input type="text" class="form-control mb-3" name="apPaterno" placeholder="apellido paterno" value="<?php echo $row['apPaterno']?>">
                <input type="text" class="form-control mb-3" name="apMaterno" placeholder="apMaterno" value="<?php echo $row['apMaterno']  ?>">
                <input type="text" class="form-control mb-3" name="contrasenia" placeholder="contrasenia" value="<?php echo $row['contrasenia'] ?>">
                <input type="text" class="form-control mb-3" name="ci" placeholder="ci" value="<?php echo $row['ci']  ?>">
                <input type="text" class="form-control mb-3" name="fechaNac" placeholder="fecha de nacimiento" value="<?php echo $row['fechaNac']  ?>">
                <input type="text" class="form-control mb-3" name="tipoUsuario" placeholder="tipo de usuario" value="<?php echo $row['tipoUsuario']  ?>">

                <input type="submit" class="btn btn-primary btn-danger" value="Actualizar">
            </form>
        </div>
    </body>
</html>