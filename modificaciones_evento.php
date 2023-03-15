<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/estilos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css" />
    <title>Modificaciones de eventos</title>
</head>
<body>
    <?php
      include 'conexion.php';
      $sql = "SELECT * FROM ACTIVIDAD";
      $resultado = mysqli_query($con, $sql);
      
    ?>
    <!-- Codigo en html -->
    <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        
        <div class="col-md-9">
            <ul class="nav navbar-nav">
                <li>
                    <a href="#">Inicio <img src="img/logo.jp" alt="Inicio"></a>
                </li>
                <li><h1> <b>Pagina administrativa</b></h1></li>
            </ul>
        </div>
        <div class="col-md-2">
            <tr><td> <h4>Administrador</h4> </td></tr>
            <tr><td> <h4>Atras</h4> </td></tr>
            <tr><td> <h4>Salir</h4> </td></tr>                
        </div>
    </nav>
    <!--asdf-->
    <div class="container mt-5">
        <div class="row"> 
            
            <div class="col-md-3">
                <h1>Ingrese datos</h1>
                    <form action="me_insertar.php" method="POST">

                        <input type="text" class="form-control mb-3" name="id_usuarioExpositor" placeholder="id usuario expositor">
                        <input type="text" class="form-control mb-3" name="id_usuarioAdministrador" placeholder="id usuario administrador">
                        <input type="text" class="form-control mb-3" name="cupos" placeholder="cupos">
                        <input type="text" class="form-control mb-3" name="carga_horaria" placeholder="carga horaria">
                        <input type="text" class="form-control mb-3" name="tipo" placeholder="tipo">
                        <input type="text" class="form-control mb-3" name="tema" placeholder="tema">
                        <input type="text" class="form-control mb-3" name="fechaActividad" placeholder="fechaActividad">
                        
                        <input type="submit" class="btn btn-primary" value="Adicionar">
                    </form>
            </div>

            <div class="col-md-8">
                <table class="table" >
                    <thead class="table-primary table-striped" >
                        <tr>
                            <th>id actividad</th>
                            <th>id expositor</th>
                            <th>id administrador</th>
                            <th>cupos</th>
                            <th>carga horaria</th>
                            <th>tipo</th>
                            <th>tema</th>
                            <th>fecha de actividad</th>
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
                                    <td><?php echo $filas["id_usuarioExpositor"]?></td>
                                    <td><?php echo $filas["id_usuarioAdministrador"]?></td>
                                    <td><?php echo $filas["cupos"]?></td>
                                    <td><?php echo $filas["carga_horaria"] ?></td>
                                    <td><?php echo $filas["tipo"] ?></td>
                                    <td><?php echo $filas["tema"] ?></td>
                                    <td><?php echo $filas["fechaActividad"] ?></td>
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