<?php 
    include 'conexion.php';

    $id=$_GET['id'];
    $sql="SELECT * FROM ACTIVIDAD WHERE id_actividad='$id'";
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
            <form action="me_update.php" method="POST">
                <input type="hidden" name="id_actividad" value="<?php echo $row['id_actividad']?>">
                <label>Id usuario expositor<input type="text" class="form-control mb-3" name="id_usuarioExpositor" placeholder="id_usuarioExpositor" value="<?php echo $row['id_usuarioExpositor']?>"></label>
                <label>id usuario administrador<input type="text" class="form-control mb-3" name="id_usuarioAdministrador" placeholder="id_usuarioAdministrador" value="<?php echo $row['id_usuarioAdministrador']?>"></label>
                <label>cupos<input type="text" class="form-control mb-3" name="cupos" placeholder="cupos" value="<?php echo $row['cupos']  ?>"></label>
                <label>Carga horaria<input type="text" class="form-control mb-3" name="carga_horaria" placeholder="carga_horaria" value="<?php echo $row['carga_horaria'] ?>"></label>
                <label>tipo<input type="text" class="form-control mb-3" name="tipo" placeholder="tipo" value="<?php echo $row['tipo']  ?>"></label>
                <label>Tema<input type="text" class="form-control mb-3" name="tema" placeholder="tema" value="<?php echo $row['tema']  ?>"></label>
                <label>fecha actividad<input type="text" class="form-control mb-3" name="fechaActividad" placeholder="fechaActividad" value="<?php echo $row['fechaActividad']  ?>"></label>

                <input type="submit" class="btn btn-primary btn-danger" value="Actualizar">
            </form>
        </div>
    </body>
</html>