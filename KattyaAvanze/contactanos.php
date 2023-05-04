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
      <?php
        include 'menu.php';
      ?>
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
                    <th>Immat</th>
                    <th><a href="https://www.facebook.com">
                        <img src="imagenes/logo facebook.png" height="20px" width="20px" alt="Descripción de la imagen">
                    </a></th>

                    
                  </tr>
                  <tr>
                    <th>WhatsApp:</th>
                    <th>  (591) 77789098 </th>
                    <th><a href="https://www.whatsapp.com">
                        <img src="imagenes/WhatsApp.png" height="20px" width="20px" alt="Descripción de la imagen">
                    </a></th>

                    
                  </tr>

                  <tr>
                    <p>Tel.: (591-2) 2256789</p>

                  </tr>
                  <tr>
                    <p>Correo: Immat.@gmail.com</p>

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