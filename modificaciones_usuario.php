<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css" />
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
    <?php
        include 'menuAdmin.php';
    ?>
    <!--asdf-->
    <div class="container mt-5">
        <div class="row"> 
            <!-- Botones para cambio entre paguinas -->
            
            <!-- -->
            <div class="col-md-2">
                <h1>Ingrese datos</h1>
                    <form action="mu_insertar.php" method="POST" enctype="multipart/form-data">

                        <input type="text" class="form-control mb-3" name="nombre" placeholder="nombre">
                        <input type="text" class="form-control mb-3" name="apPaterno" placeholder="apellido paterno">
                        <input type="text" class="form-control mb-3" name="apMaterno" placeholder="apMaterno">
                        <input type="text" class="form-control mb-3" name="contrasenia" placeholder="password">
                        <input type="text" class="form-control mb-3" name="ci" placeholder="ci">
                        <input type="text" class="form-control mb-3" name="fechaNac" placeholder="fecha de naciemiento">
                        <select class="form-control mb-3" name="tipoUsuario">
                            <option value="participante">participante</option>
                            <option value="expositor">expositor</option>
                            <option value="administrador">administrador</option>
                            <option value="control">control</option>
                        </select>
                        <input type="email" class="form-control mb-3" id="email" name="correoElectronico" required>
                        <input type="text" class="form-control mb-3" name="nombreUsuario" placeholder="nombre de usuario">
                        
				        <input type="file" class="form-control mb-3" id="imagen" name="imagen" required>
                        <button type="submit" class="btn btn-primary">Agregar usuario</button>
                    </form>
            </div>

            <div class="col-md-10">
                <table class="table" >
                    <thead class="table-primary table-striped" >
                        <tr>
                            <th>id usuario</th>
                            <th>nombre</th>
                            <th>apellido paterno</th>
                            <th>apellido materno</th>
                            <th>contrasenia</th>
                            <th>ci</th>
                            <th>fecha de nacimiento</th>
                            <th>tipo de usuario</th>
                            <th>email</th>
                            <th>nombre usuario</th>
                            <th>imagen</th>
                            <th>Accion</th>
                            <th></th>
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
                                    <td><?php echo $filas["correoElectronico"] ?></td>
                                    <td><?php echo $filas["nombreUsuario"] ?></td>
                                    <td><?php echo substr($filas["imagen"], 0, 7) ?></td>
                                    <th>
                                        <a href="mu_actualizar.php?id=<?php echo $filas['id_usuario'] ?>" class="btn btn-primary">Editar</a>   
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