<!DOCTYPE html>
<html leng="es">
<head>
	<title>Página de muestra de nombre</title>
</head>
<body>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
 

   
</style>
    <title><?php 
        $nombre = $_GET['nombre'];

            echo $nombre; ?></title>
    
  </head>
  <body class="sidebar-mini fixed">
    <div class="wrapper">
      <!-- Navbar-->
      <header class="main-header hidden-print"><a class="logo" href="index.php"><?php 
        $nombre = $_GET['nombre'];

            echo $nombre; ?></a>
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
                  <a class="nav-link" href="contactanos1.php">Contactanos</a>
                
              </ul>
             
            </div>
          </div>

          <!-- Navbar Right Menu-->
          
        </nav>
      </header>
      <!-- Side-Nav-->

      <div class="content-wrapper">
       
        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <h2 class="card-title">EVENTOS Y CONFERENCIAS</h2>
              <p> El Congreso Nacional de Historia de Bolivia, CONAHIBOL, es una iniciativa
de la Carrera de Historia de la UMSA que busca generar un espacio de
reflexión con miras al Bicentenario de Bolivia. Se propone realizar
reuniones anuales. La primera versión de este congreso se titula Pensar el
Bicentenario: balances historiográficos y nuevos enfoques.
Se convoca a estudiantes y docentes de las Carreras de Historia así como a
todos los interesados (que incorporen la metodología histórica), a
presentar ponencias sobre las temáticas habilitadas.
El Congreso se realizará los días 10 y 11 de agosto de 2023 en laUMSA (La
Paz, Bolivia).</p> <br>

              <p class="mt-40 mb-20"><a class="btn btn-primary icon-btn mr-10" href="registrar.php" target="_blank"><i class="fa fa-file"></i>REGISTRATE</a>
                <a class="btn btn-success icon-btn" href="iniciar.php" target="_blank">INICIAR SESION</a></p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card">
              <h3 class="card-title">Compatible con tus necesidades</h3>
              <p></p>
              <img class="img-ambiente" src="imagenes/principal.png">
            </div>
          </div>
        </div>
      </div>
    </div>
   
  
</body>
</html>