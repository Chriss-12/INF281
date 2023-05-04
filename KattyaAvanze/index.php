<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS-->
    <!-- CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>LexCorp</title>
    
  </head>
  <body class="sidebar-mini fixed">
    <div class="wrapper">
      <!-- Navbar-->
      <?php
        include 'menu.php';
      ?>
      <!-- Side-Nav-->

      <div class="content-wrapper">
       
        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <h2 class="card-title">EVENTOS Y CONFERENCIAS</h2>
              <p>Nuestra página de eventos educativos te ofrece una amplia variedad de actividades y eventos educativos que te permitirán aprender de manera divertida y enriquecedora. </p>
              <p>Desde conferencias y talleres hasta cursos y seminarios, nuestra página te ofrece una amplia variedad de opciones para que puedas encontrar la actividad que más se adapte a tus necesidades y preferencias. Nuestros eventos están dirigidos tanto a estudiantes como a profesionales y personas interesadas en aprender y desarrollar nuevas habilidades. </p>
              <p>Además, podrás encontrar información detallada sobre cada evento, incluyendo la fecha, hora, lugar, descripción y precio de inscripción, lo que te permitirá tomar una decisión informada y registrarte fácilmente. ¡Únete a nuestra comunidad educativa y descubre todo lo que tenemos para ofrecerte!"</p>
              <br>

              <p class="mt-40 mb-20"><a class="btn btn-primary icon-btn mr-10" href="loginRegistro.php" target="_blank"><i class="fa fa-file"></i>REGISTRATE</a>
                <a class="btn btn-success icon-btn" href="login.php" target="_blank">INICIAR SESION</a></p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card">
              <h3 class="card-title">Compatible con tus necesidades</h3>
              <p>Ofertas actuales y comodas</p>
              <img class="img-ambiente" src="imagenes/principal.png">
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Javascripts-->
    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/pace.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>