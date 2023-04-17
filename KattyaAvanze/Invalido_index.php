 

<meta charset="utf-8">

<link rel="stylesheet" type="text/css" href="style1.css">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<div class="login-container">
    <div class="login-form">
      <h1>Registrarse</h1>
      <form method="post" action="mail2.php">
        <label for="nombre">NOMBRE</label>
        <input type="text" id="nombre" name="nombre" placeholder="Ingresar nombre" required>
        
        <label for="ap-paterno">APELLIDO</label>
        <input type="text" id="ap-paterno" name="apellido" placeholder="Ingresar Apellido" required>
        
          
        <label for="email">EMAIL</label>
        <input type="email" id="email" name="email" placeholder="Ingresa tu email" required>
       
        
        <label for="password">PASSWORD</label>
        <input type="password" id="password" name="password" placeholder="Ingresar PASSWORD" required>
      <label for="confirm-password">Confirmar PASSWORD</label>
      <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirmar" required>
      

     
      
  <label>
    <input type="radio" name="opcion" value="participante">
    participante
  </label>
  <br>
  <label>
    <input type="radio" name="opcion" value="administrador">
    administrador
  </label>
  <br>
  <label>
    <input type="radio" name="opcion" value="controlador">
    controlador
  </label>
  <br>

    </li>
 
      <button type="submit" value="registrar" name="enviar">Registrar</button>
      </form>
    </div>
  </div>
  <?php 
  include ("mail2.php");
  ?>