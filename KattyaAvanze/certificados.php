<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">


    <title>Emisión de Certificados</title>
   
  </head>
  <body class="sidebar-mini fixed">
    <div class="wrapper">
      <!-- Navbar-->
      <header class="main-header hidden-print"><a class="logo" href="index.html">Lex-Corp</a>
        <nav class="navbar navbar-static-top">
          <div class="container-fluid">
            
            <div class="collapse navbar-collapse" id="navbarColor01">
              <ul class="navbar-nav me-auto">
                <li class="navbar-custom-menu">
                  <a href="index.html"><span >Inicio
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
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="certificados.php">Certificado</a>
                  </li>
              </ul>
             
            </div>
          </div>

          <!-- Navbar Right Menu-->
          
        </nav>
      </header>
      <!-- Side-Nav-->
<!---contenido-->
<div class="form-certi">
<div class="formulario-certificado">
    <h2 class="h2-certificado">Ingresa tus datos para recibir tu certificado</h2>
    <form class="form-certificado">
        <div class="input-group-certificado">
            <label class="label-certificado" for="nombre">Nombre:</label>
            <input type="text" id="nombre" required>
        </div>
        <div class="input-group-certificado">
            <label class="label-certificado" for="apellido">Apellido:</label>
            <input type="text" id="apellido" required>
        </div>
        <div class="input-group-certificado">
            <label class="label-certificado" for="correo">Correo electrónico:</label>
            <input type="email" id="correo" required>
        </div>
        <div class="input-group-certificado">
            <label class="label-certificado" for="curso">Curso:</label>
            <input type="text" id="curso" required>
        </div>
        <p class="mt-40 mb-20"><a class="btn btn-primary icon-btn mr-10" href="certi.html" target="_blank"><i class="fa fa-file"></i>OBTENER</a>
        </form>
</div>
</div>
    <!-- Javascripts-->
    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/pace.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>


