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
      $sql = "SELECT ab.id_actividad, concat(exp.nombre, ' ', exp.apPaterno, ' ', exp.apMaterno) as expositor, concat(adm.nombre, ' ', adm.apPaterno, ' ', adm.apMaterno) as administrador, ab.cupos,  ab.carga_horaria, ab.tipo, ab.tema, ab.fechaActividad, ab.accion
      From actividades_backup ab, usuario exp, usuario adm
      Where ab.id_usuarioExpositor = exp.id_usuario and exp.tipoUsuario like 'expositor'
      and ab.id_usuarioAdministrador = adm.id_usuario AND
      adm.tipoUsuario like 'administrador'";
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
                    <a href="modificaciones_evento.php" class="btn btn-info">
                        Modificaciones evento
                    </a>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="modificaciones_usuario.php" class="btn btn-info">
                        Modificaciones usuario
                    </a>
                </td>
            </tr>

            <tr>
                <td>
                    <a href="backup_usuario.php" class="btn btn-dark">
                        Backup usuario
                    </a>
                </td>
            </tr> 
            <tr>
                <td>
                    <a href="backup_evento.php" class="btn btn-dark">
                        Backup evento
                    </a>
                </td>
            </tr>  


            
            <tr>
                <td>
                    <a href="salirSesion.php" class="btn btn-danger">
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
            

            



            
            <div class="col-md-10">
                <table class="table" >
                    <thead class="table-primary table-striped" >
                        <tr>
                            <th>Id actividad</th>
                            <th>Usuario expositor</th>
                            <th>Usuario administrador</th>
                            <th>Cupos</th>
                            <th>Carga horaria</th>
                            <th>Tipo</th>
                            <th>Tema</th>
                            <th>fecha de actividad</th>
                            <th>Accion</th>
                        </tr>
                    </thead>

                    <tbody>
                            <?php
                                while($filas=mysqli_fetch_array($resultado)){
                            ?>
                                <tr>
                                    <td><?php echo $filas["id_actividad"]?></td>
                                    <td><?php echo $filas["expositor"]?></td>
                                    <td><?php echo $filas["administrador"]?></td>
                                    <td><?php echo $filas["cupos"]?></td>
                                    <td><?php echo $filas["carga_horaria"]?></td>
                                    <td><?php echo $filas["tipo"]?></td>
                                    <td><?php echo $filas["tema"]?></td>
                                    <td><?php echo $filas["fechaActividad"] ?></td>
                                    <td><?php echo $filas["accion"] ?></td>
                                    
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