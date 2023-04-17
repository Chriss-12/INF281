<?php
include "conexion.php";
?>

<meta charset="utf-8">

<link rel="stylesheet" type="text/css" href="css/style1.css">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<div class="login-container">
    <div class="login-form">
      <h1>Registrarse</h1>
      <form method="post" action="mail2.php">
        <label for="nombre">nombre</label>
        <input type="text" id="nombre" name="nombre" placeholder="Ingresar usuario" required>
        
        <label for="ap-paterno">Apellido</label>
        <input type="text" id="ap-paterno" name="apellido" placeholder="Ingresar usuario" required>
        
          
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Ingresa tu email" required>
       
        
        <label for="password">Contraseña</label>
        <input type="password" id="password" name="password" placeholder="Ingresar contraseña" required>
      <label for="confirm-password">Confirmar Contraseña</label>
      <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirmar" required>
      
       <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
      Loggin
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="">participante</a>
        <a class="dropdown-item" href="">Usuario administrador</a>       
        <a class="dropdown-item" href="">usuario control</a>
      </div>
    </li>

      <button type="submit" value="registrar" name="enviar">Registrar</button>
      </form>
    </div>
  </div>
  <?php 
  include ("mail2.php");
  ?>