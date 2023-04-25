<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <title>LEX-CORP</title>
    
  </head>
  <body class="sidebar-mini fixed">
    <?php
      include '../conexion.php';
      $sql = "Select *
      From actividad a, usuario u
      where a.id_usuarioExpositor = u.id_usuario
      and u.tipoUsuario = 'expositor'";
      $resultado = mysqli_query($con, $sql);
      
    ?>
    <div class="wrapper">
      <!-- Navbar-->
        <header class="main-header hidden-print"><a class="logo" href="index.php">Lex-Corp</a>
        <nav class="navbar navbar-static-top">
          <div class="container-fluid">
            
            <div class="collapse navbar-collapse" id="navbarColor01">
              <ul class="navbar-nav me-auto">
                <li class="navbar-custom-menu">
                  <a href="index.php"><span >Inicio
                  </span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="quienes.php">Quienes somos?</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="eventos.php">Eventos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contactanos.php">Contactanos</a>
                
              </ul>
             
            </div>
          </div>

          <!-- Navbar Right Menu-->
          
        </nav>
         </header>
            <div class="content-wrapper-quienes">
            <?php
            while($filas=mysqli_fetch_array($resultado)){
            ?>
                
                  <div class="team-member">
                    <img src="../<?php echo $filas["imagen"]?>" alt="Imagen">
                    <h2>Tema <?php echo $filas["tema"]?></h2>
                    <h3><?php echo $filas["nombre"]. ' '. $filas["apPaterno"]. ' '. $filas["apMaterno"]?></h3>
                    <p>Fecha: <?php echo $filas["fechaActividad"]?></p>
                    <p>Tipo de evento: <?php echo $filas["tipo"]?></p>
                    <p>Carga horaria: <?php echo $filas["carga_horaria"]?> horas</p>
                    <p>Descripcion: <?php echo $filas["descripcion"]?> horas</p>
                    <a href="mu_actualizar.php?id=<?php echo $filas['id_usuario'] ?>" class="btn btn-primary disabled">Inscribirse</a>  
                </div>
            <?php
            }
        ?>
            
  </body>
</html>