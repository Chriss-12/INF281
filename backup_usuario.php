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
      $sql = "SELECT * FROM usuarios_backup";
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
            

            <div class="col-md-8">
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