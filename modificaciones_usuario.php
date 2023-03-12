<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Modificaciones de usuario</title>
</head>
<body>
    <?php
      include 'conexion.php';
      $sql = "SELECT * FROM USUARIO";
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
                    <form action="mu_insertar.php" method="POST">

                        <input type="text" class="form-control mb-3" name="nombre" placeholder="nombre">
                        <input type="text" class="form-control mb-3" name="apPaterno" placeholder="apellido paterno">
                        <input type="text" class="form-control mb-3" name="apMaterno" placeholder="apMaterno">
                        <input type="text" class="form-control mb-3" name="contrasenia" placeholder="password">
                        <input type="text" class="form-control mb-3" name="ci" placeholder="ci">
                        <input type="text" class="form-control mb-3" name="fechaNac" placeholder="fecha de naciemiento">
                        <input type="text" class="form-control mb-3" name="tipoUsuario" placeholder="tipo de usuario">
                        
                        <input type="submit" class="btn btn-success" value="Adicionar">
                    </form>
            </div>

            <div class="col-md-8">
                <table class="table" >
                    <thead class="table-success table-striped" >
                        <tr>
                            <th>id usuario</th>
                            <th>nombre</th>
                            <th>apellido paterno</th>
                            <th>apellido materno</th>
                            <th>contrasenia</th>
                            <th>ci</th>
                            <th>fecha de nacimiento</th>
                            <th>tipo de usuario</th>
                            <th>Accion</th>
                        </tr>
                    </thead>

                    <tbody>
                            <?php
                                while($filas=mysqli_fetch_array($resultado)){
                            ?>
                                <tr>
                                    <td><?php echo $filas["id_usuario"]?></td>
                                    <td><?php echo $filas["nombre"]?></td>
                                    <td><?php echo $filas["apPaterno"]?></td>
                                    <td><?php echo $filas["apMaterno"]?></td>
                                    <td><?php echo $filas["contrasenia"] ?></td>
                                    <td><?php echo $filas["ci"] ?></td>
                                    <td><?php echo $filas["fechaNac"] ?></td>
                                    <td><?php echo $filas["tipoUsuario"] ?></td>
                                    <th>
                                        <a href="mu_actualizar.php?id=<?php echo $filas['id_usuario'] ?>" class="btn btn-success">Editar</a>   
                                    </th>
                                    <th>
                                        <a href="mu_delete.php?id=<?php echo $filas['id_usuario'] ?>" class="btn btn-danger">Eliminar</a>
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