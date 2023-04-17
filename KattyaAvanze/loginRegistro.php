<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Formulario de registro con Bootstrap 5</title>
    <!-- Agregamos los enlaces necesarios para Bootstrap 5 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css" /></head>
  <body>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6 mt-5">
          <div class="card bg-primary">
            <div class="card-header">
              <h3 class="text-center">Registro</h3>
            </div>
            <div class="card-body">
              <form action="registro.php" method="POST">
                <div class="form-group">
                  <label for="nombre">Nombre completo</label>
                  <input type="text" class="form-control" name="nombre" placeholder="Ingresa tu nombre completo">
                </div>
                <div class="form-group">
                  <label for="apPaterno">Apellido paterno</label>
                  <input type="text" class="form-control" name="apPaterno" placeholder="Ingresa tu apellido paterno">
                </div>
                <div class="form-group">
                  <label for="apMaterno">Apellido materno</label>
                  <input type="text" class="form-control" name="apMaterno" placeholder="Ingresa tu apellido materno">
                </div>
                <div class="form-group">
                  <label for="ci">CI</label>
                  <input type="text" class="form-control" name="ci" placeholder="Ingresa tu ci">
                </div>
                <div class="form-group">
                  <label for="fechaNac">Ingresa tu fecha de nacimiento</label>
                  <input type="text" class="form-control" name="fechaNac" placeholder="Ingresa tu fecha de nacimiento">
                </div>
                <div class="form-group">
                  <label for="correoElectronico">Correo electrónico</label>
                  <input type="email" class="form-control" name="correoElectronico" placeholder="Ingresa tu correo electrónico">
                </div>
                <div class="form-group">
                  <label for="nombreUsuario">Nombre de usuario</label>
                  <input type="text" class="form-control" name="nombreUsuario" placeholder="Ingresa tu nombre de usuario">
                </div>
                <div class="form-group">
                  <label for="contrasenia">Contraseña</label>
                  <input type="password" class="form-control" name="contrasenia" placeholder="Ingresa tu contraseña">
                </div>
                <div class="form-group">
                  <label for="confirmar-password">Confirmar contraseña</label>
                  <input type="password" class="form-control" name="confirmar-password" placeholder="Confirma tu contraseña">
                </div>
                <div class="form-group">
                    <label for="tipo-de-usuario">Tipo de usuario</label>
                    <select class="form-control mb-3" name="tipoUsuario">
                        <option value="control">control</option>
                        <option value="participante">participante</option>
                        <option value="expositor">expositor</option>
                        <option value="administrador">administrador</option>
                    </select>
                </div>
                <div class="form-group">
                  <label for="codigoVerificacion">Ingresar codigo de verificacion</label>
                  <input type="text" class="form-control" name="codigoVerificacion" placeholder="Introducir el codigo de verificacion">
                </div>
                <button type="submit" class="btn btn-danger btn-block">Registrarse</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Agregamos los scripts necesarios para Bootstrap 5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>