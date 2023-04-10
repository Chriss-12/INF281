<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css" />
    <title>Modificaciones de eventos</title>
</head>
<body>
    <?php
      include 'conexion.php';
      $sql = "SELECT a.id_actividad, a.id_usuarioExpositor, a.id_usuarioAdministrador, a.tema, CONCAT(e.nombre, ' ', e.apPaterno,' ', e.apMaterno) AS Expositor, CONCAT(e1.nombre, ' ',e1.apPaterno, ' ', e1.apMaterno) AS Administrador, a.fechaActividad, a.carga_horaria, a.tipo
      FROM ACTIVIDAD a, Usuario e, Usuario e1
      Where a.id_usuarioExpositor = e.id_usuario and e.tipoUsuario = 'expositor' and e1.id_usuario = a.id_usuarioAdministrador";
      $resultado = mysqli_query($con, $sql);
      
    ?>
    <!-- Codigo en html -->
    <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        
        <div class="col-md-6">
            <ul class="nav navbar-nav">
                <li>
                    <a><img class="a1" src="img/logo.png" class="icono"></a>
                </li>
                <li>
                    <h1><b>Pagina administrativa</b></h1>
                </li>
            </ul>
            
        </div>
        <div class="col-md-6">
            <tr>
                <td>
                    <a href="http://localhost/alexCorp1/modificaciones_evento.php" class="btn btn-info">
                        Modificaciones evento
                    </a>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="http://localhost/alexCorp1/modificaciones_usuario.php" class="btn btn-info">
                        Modificaciones usuario
                    </a>
                </td>
            </tr>

            <tr>
                <td>
                    <a href="http://localhost/alexCorp1/backup_usuario.php" class="btn btn-dark">
                        Backup usuario
                    </a>
                </td>
            </tr> 
            <tr>
                <td>
                    <a href="http://localhost/alexCorp1/backup_evento.php" class="btn btn-dark">
                        Backup evento
                    </a>
                </td>
            </tr>  


            <tr>
                <td>
                    <a href="http://localhost/alexCorp1/modificaciones_evento.php" class="btn btn-success">
                        Atras
                    </a>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="http://localhost/alexCorp1/modificaciones_evento.php" class="btn btn-danger">
                        Salir
                    </a>
                </td>
            </tr>     
             
        </div>
    </nav>
    <!--asdf-->
    <div class="container mt-5">
        <div class="row"> 
            <!-- Botones para cambio entre paguinas-->
            
            <!-- -->
            <div class="col-md-2">
                <h1>Ingrese datos</h1>
                    <form action="me_insertar.php" method="POST">
                        <input type="text" class="form-control mb-3" name="id_actividad" placeholder="id actividad">   
                        
                        <input type="text" class="form-control mb-3" name="cupos" placeholder="cupos">
                        <input type="text" class="form-control mb-3" name="carga_horaria" placeholder="carga horaria">
                        <select class="form-control mb-3" name="tipo">
                            <option value="conferencia">conferencia</option>
                            <option value="seminario">seminario</option>
                        </select>
                        <input type="text" class="form-control mb-3" name="tema" placeholder="tema">
                        <input type="text" class="form-control mb-3" name="fechaActividad" placeholder="fechaActividad">
                        <!-- 

                        <input type="text" class="form-control mb-3" name="id_usuarioExpositor" placeholder="id usuario expositor">
                        
                        -->
                        <select name="id_usuarioExpositor" class="form-control mb-3">
                            <!--Aqui va el codigo de prueba-->
                            <?php
                            include 'conexion.php';
                            $getExpositores = "Select * from usuario where tipoUsuario = 'expositor'";
                            $getExpositores2 = mysqli_query($con, $getExpositores);

                            while($row = mysqli_fetch_array($getExpositores2)){
                                $id = $row["id_usuario"];
                                $nombre = $row["nombre"];
                                $apPaterno = $row["apPaterno"];
                                $apMaterno = $row["apMaterno"];
                                
                                ?>

                                <option value="<?php echo $id; ?>"><?php echo $nombre." ".$apPaterno." ".$apMaterno;?></option>

                                <?php
                            }
                            ?>
                            <!--Aqui va el codigo de prueba-->
                        </select>
                        <select class="form-control mb-3" name="id_usuarioAdministrador">
                            <!--Aqui va el codigo de prueba-->
                            <?php
                            include 'conexion.php';
                            $getExpositores = "Select * from usuario where tipoUsuario = 'administrador'";
                            $getExpositores2 = mysqli_query($con, $getExpositores);

                            while($row = mysqli_fetch_array($getExpositores2)){
                                $id = $row["id_usuario"];
                                $nombre = $row["nombre"];
                                $apPaterno = $row["apPaterno"];
                                $apMaterno = $row["apMaterno"];
                                
                                ?>

                                <option value="<?php echo $id; ?>"><?php echo $nombre." ".$apPaterno." ".$apMaterno;?></option>

                                <?php
                            }
                            ?>
                            <!--Aqui va el codigo de prueba-->
                        </select>
                        <input type="submit" class="btn btn-primary" value="Adicionar">
                    </form>
            </div>

            



            
            <div class="col-md-10">
                <table class="table" >
                    <thead class="table-primary table-striped" >
                        <tr>
                            <th>Id actividad</th>
                            <th>Tema</th>
                            <th>Tipo</th>
                            <th>Expositor</th>
                            <th>Id usuario expositor</th>
                            <th>Administrador</th>
                            <th>Id usuario administrador</th>
                            <th>fecha de actividad</th>
                            <th>carga horaria</th>
                            <th>Accion</th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                            <?php
                                while($filas=mysqli_fetch_array($resultado)){
                            ?>
                                <tr>
                                    <td><?php echo $filas["id_actividad"]?></td>
                                    <td><?php echo $filas["tema"]?></td>
                                    <td><?php echo $filas["tipo"]?></td>
                                    <td><?php echo $filas["Expositor"]?></td>
                                    <td><?php echo $filas["id_usuarioExpositor"]?></td>
                                    <td><?php echo $filas["Administrador"]?></td>
                                    <td><?php echo $filas["id_usuarioAdministrador"]?></td>
                                    <td><?php echo $filas["fechaActividad"] ?></td>
                                    <td><?php echo $filas["carga_horaria"] ?></td>
                                    <th>
                                        <a href="me_actualizar.php?id=<?php echo $filas['id_actividad'] ?>" class="btn btn-primary">Editar</a>   
                                    </th>
                                    <th>
                                        <a href="me_delete.php?id=<?php echo $filas['id_actividad'] ?>" class="btn btn-danger">Eliminar</a>
                                    </th> 
                                </tr>
                            <?php 
                                }
                            ?>
                    </tbody>
                </table>
            </div>
        </div>  
    </div>
    <!--Creacion del menu-->
    
</body>

</html>