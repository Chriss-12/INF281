<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <title>Contactanos</title>

  </head>
  <body class="sidebar-mini fixed">
    <div class="wrapper">
      <!-- Navbar-->
      <header class="main-header hidden-print"><a class="logo" href="index.php">Conahibol</a>
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
              <h2 class="card-title">NUESTRAS REDES</h2>               
              <br>
  
              <table>
                <thead>
                  <tr>
                    <th>FACEBOOK:</th>
                    <th>  conahibol</th>
                    <th><a href="https://www.facebook.com">
                        <img src="imagenes/logo facebook.png" height="20px" width="20px" alt="Descripción de la imagen">
                    </a></th>

                    
                  </tr>
                  <tr>
                    <th>WhatsApp:</th>
                    <th>  (591) 78980977 </th>
                    <th><a href="https://www.whatsapp.com">
                        <img src="imagenes/WhatsApp.png" height="20px" width="20px" alt="Descripción de la imagen">
                    </a></th>

                    
                  </tr>

                  
                  <tr>
                    <p>Correo: conahibol@gmail.com</p>

                  </tr>
                </thead>
              </table>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card">
              <h3 class="card-title">CONTACTANOS</h3>
              <p>Aun tienes dudas? no dudes en escribirnos!</p>
              <section id="contacto">
                
                <form action="enviar.php" method="POST">
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" required>
    
                    <label for="correo">Correo electrónico:</label>
                    <input type="email" id="correo" name="correo" required>
    
                    <label for="mensaje">Mensaje:</label>
                    <textarea id="mensaje" name="mensaje" required></textarea>
    
                    <input type="submit" value="Enviar">
                </form>
            </section>            </div>
          </div>
        </div>
      </div>
    </div>
      <main>
		
	</main>
    <!-- Javascripts-->
    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/pace.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>