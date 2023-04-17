<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    --><link rel="stylesheet" href="style.css">
    <title>LEX-CORP</title>
    
  </head>
  <body class="sidebar-mini fixed">
    <div class="wrapper">
      <!-- Navbar-->
"      <header class="main-header hidden-print"><a class="logo" href="index.php">Lex-Corp</a>
        <nav class="navbar navbar-static-top">
          <div class="container-fluid">
            
            <div class="collapse navbar-collapse" id="navbarColor01">
              <ul class="navbar-nav me-auto">
                <li class="navbar-custom-menu">
                  <a href="index.php"><span >Inicio
                  </span></a>
                </li>
                
              
                <li class="nav-item">
                  <a class="nav-link" href="usuario.php">usuario</a>
                
              </ul>
             
            </div>
          </div>
          
        </nav>
      </header>"
      <!-- Side-Nav-->

      <div class="content-wrapper">
       
      <div class="row">
          <div class="col-md-8">
            <div class="card">
            <div class="login-container">
              <div class="login-form">
              <h2 class="card-title">EDICION DE PERFIL</h2>
                <form action="procesar.php" method="post">
                <label for="n-organizacion">NOMBRE DE LA ORGANIZACION</label>
                <br>

                <input type="text" id="nombre" name="nombre" placeholder="Ingrese nombre" required>
                <br>
                <label for="email">Email</label>
                <br>
                <input type="email" id="email" name="email" placeholder="Ingresa tu email" required>
                <br>
                <label for="descripcion">DESCRIPCION</label>
                <br>
                <input type="text" id="descripcion" name="descripcion" placeholder="Ingresar Descripcion" required>
                <br>
                <h2> REDES SOCIALES</h2>
                <br>
                <label for="facebook">Facebook</label>
                <br>
                <input type="text" id="facebook" name="facebook" placeholder="Ingrese Pagina de Facebook" required>
                <br>
                <label for="facebook">Instagram</label>
                <br>
                <input type="text" id="Instagram" name="Instagram" placeholder="Ingrese Pagina de Instagram" required>
                <br>
                <label for="facebook">WhatsApp</label>
                <br>
                <input type="text" id="whatsapp" name="whatsapp" placeholder="ConfiIngrese Pagina de WhatsApp" required>
               
             
                <h2> DISEÑO DE PAGINA </h2>
              <!--<label for="n-organizacion">COLORES DE PAGINA</label>
                <br>
                <input type="color" id="color">

                <br>
                <label for="email">Color de Texto</label>
                <br>
                <input type="color" id="colorPicker1">
-->             <div class="container"  class="align-center" aria-hidden="true">
                      <div class="output"></div>
                      <div class="gradient">
                          <span>Colores</span>
                          <div>
                              <input type="color" id="color1" value="#CD58D5">
                              <input type="color" id="color2" value="#5747D1">
                          </div>
                      </div>
                      <div class="direction">
                          <span>Direccion</span>
                          <select id="direction">
                              <option value="to right">izquierda a derecha</option>
                              <option value="to left">derecha a izquierda</option>
                              <option value="to bottom">arriba a abajo</option>
                              <option value="to top">abajo a arriba</option>
                              <option value="to bottom right">arriba izquierda a abajo derecha</option>
                              <option value="to bottom left">arriba derecha a abajo izquierda</option>
                          </select>
                      </div>
                      <div class="buttons">
                          <button id="generate">Generar codigo</button>
                          <button id="refresh">Refrescar</button>
                      </div>
                      <div class="css-output">
                          <textarea id="css-output" placeholder="css output"></textarea>
                      </div>
                      <button id="copy">Copy CSS Code</button>
                  </div>
                  <script src="javascrip.js"></script>
                <br>
                <button type="submit" href="nueva.php">crear</button>
                <br>
            </form>
            </div>
            </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <h3 class="card-title">Dise;a tu pagina de acuerdo a tus necesidades.</h3>
              <p>Aqui puedes Ingresar los datos de tu Organizacion</p>
              <p>Para poder crear diferentes eventos y asi compartirlo con los participantes</p>

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