<?php 
    include 'conexion.php';

    $id=$_GET['id'];
    $sql="SELECT * FROM ACTIVIDAD a, USUARIO u WHERE a.id_actividad='$id' and a.id_usuarioExpositor = u.id_usuario";
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
                <label>Usuario expositor
                    <select name="id_usuarioExpositor" class="form-control mb-3">
                        <!--Aqui va el codigo de prueba-->
                        <?php
                        include 'conexion.php';
                        $getExpositores = "Select * from usuario where tipoUsuario = 'expositor'";
                        $getExpositores2 = mysqli_query($con, $getExpositores);

                        while($row1 = mysqli_fetch_array($getExpositores2)){
                            $id = $row1["id_usuario"];
                            $nombre = $row1["nombre"];
                            $apPaterno = $row1["apPaterno"];
                            $apMaterno = $row1["apMaterno"];
                            
                            //prueba de codigo
                            if($id == $row["id_usuarioExpositor"]){
                                ?>
                                <option value="<?php echo $id; ?>" selected><?php echo $nombre." ".$apPaterno." ".$apMaterno;?></option>
                                <?php
                                
                            }
                            else{
                                ?>
                                <option value="<?php echo $id; ?>"><?php echo $nombre." ".$apPaterno." ".$apMaterno;?></option>
                                <?php
                            }
                            ?>
                            //prueba de codigo
                            ?>

                            
                            


                            <?php
                        }
                        
                        ?>
                        
                        <!--Aqui va el codigo de prueba-->
                    </select>
                </label>
                <label>Usuario administrador
                    <select class="form-control mb-3" name="id_usuarioAdministrador">
                        <!--Aqui va el codigo de prueba-->
                        <?php
                        include 'conexion.php';
                        $getExpositores = "Select * from usuario where tipoUsuario = 'administrador'";
                        $getExpositores2 = mysqli_query($con, $getExpositores);

                        while($row1 = mysqli_fetch_array($getExpositores2)){
                            $id = $row1["id_usuario"];
                            $nombre = $row1["nombre"];
                            $apPaterno = $row1["apPaterno"];
                            $apMaterno = $row1["apMaterno"];
                            
                            //prueba de codigo
                            if($id == $row["id_usuarioAdministrador"]){
                                ?>
                                <option value="<?php echo $id; ?>" selected><?php echo $nombre." ".$apPaterno." ".$apMaterno;?></option>
                                <?php
                                
                            }
                            else{
                                ?>
                                <option value="<?php echo $id; ?>"><?php echo $nombre." ".$apPaterno." ".$apMaterno;?></option>
                                <?php
                            }
                            ?>
                            //prueba de codigo
                            ?>

                            
                            


                            <?php
                        }
                        ?>
                        <!--Aqui va el codigo de prueba-->
                    </select>
                </label>
                <label>cupos
                    <input type="text" class="form-control mb-3" name="cupos" placeholder="cupos" value="<?php echo $row['cupos']  ?>">
                </label>
                <label>Carga horaria
                    <input type="text" class="form-control mb-3" name="carga_horaria" placeholder="carga_horaria" value="<?php echo $row['carga_horaria'] ?>"></label>
                <label>tipo evento
                    <select class="form-control mb-3" name="tipo">
                        <?php
                            $arrayTipos = array('conferencia', 'seminario');
                            for ($i = 0; $i < count($arrayTipos); $i++) {
                                if($row["tipo"] == $arrayTipos[$i]){
                                    ?>
                                    <option value="<?php echo $row["tipo"]; ?>" selected><?php echo $row["tipo"];?></option>
                                    <?php
                                }
                                else{
                                    ?>
                                    <option value="<?php echo $arrayTipos[$i]; ?>"><?php echo $arrayTipos[$i];?></option>

                                    <?php
                                }
                            }
                        ?>
                        
                        
                    </select>
                </label>
                <label>Tema
                    <input type="text" class="form-control mb-3" name="tema" placeholder="tema" value="<?php echo $row['tema']  ?>">
                </label>
                <label>fecha actividad
                    <input type="text" class="form-control mb-3" name="fechaActividad" placeholder="fechaActividad" value="<?php echo $row['fechaActividad']  ?>">
                </label>

                <input type="submit" class="btn btn-primary btn-danger" value="Actualizar">
            </form>
        </div>
    </body>
</html>