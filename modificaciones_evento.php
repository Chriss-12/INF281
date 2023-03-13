<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
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
    <nav class="navbar navbar-expand-lg navbar-light bg-success">
        <div class="container-fluid">
            <img src="https://via.placeholder.com/40x40" alt="Logo" class="navbar-brand me-auto">
            <h1 class="navbar-brand mx-3 text-warning" >Paguina administrativa</h1>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Cristhian</a>
                    </li>
                </ul>
                <button class="btn btn-outline-light btn btn-danger" type="submit">Cerrar sesion</button>
            </div>
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
                        
                        <input type="submit" class="btn btn-success" value="Adicionar">
                    </form>
            </div>

            <div class="col-md-8">
                <table class="table" >
                    <thead class="table-success table-striped" >
                        <tr>
                            <th>id actividad</th>
                            <th>id usuario expositor</th>
                            <th>id usuario administrador</th>
                            <th>cupos</th>
                            <th>carga horaria</th>
                            <th>tipo</th>
                            <th>tema</th>
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
                                    <td><?php echo $filas["id_usuarioExpositor"]?></td>
                                    <td><?php echo $filas["id_usuarioAdministrador"]?></td>
                                    <td><?php echo $filas["cupos"]?></td>
                                    <td><?php echo $filas["carga_horaria"] ?></td>
                                    <td><?php echo $filas["tipo"] ?></td>
                                    <td><?php echo $filas["tema"] ?></td>
                                    <td><?php echo $filas["fechaActividad"] ?></td>
                                    <th>
                                        <a href="me_actualizar.php?id=<?php echo $filas['id_actividad'] ?>" class="btn btn-success">Editar</a>   
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