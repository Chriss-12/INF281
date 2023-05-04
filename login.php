<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login con Bootstrap 5</title>
    <!-- Agregamos los enlaces necesarios para Bootstrap 5 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css" />
  </head>
  <body>
    <div class="container-fluid ">
      <div class="row justify-content-center ">
        <div class="col-md-4 mt-5">
          <div class="card bg-primary">
            <div class="card-header">
              <h3 class="text-center ">Inicio de sesión</h3>
            </div>
            <div class="card-body">
              <form action="loginControl.php" method="POST">
                <div class="form-group mb-3">
                  <label for="email">Nombre de usuario</label>
                  <input type="text" class="form-control" id="username" name="username" required placeholder="Ingresa tu nombre de usuario">
                </div>
                <div class="form-group mb-4">
                  <label for="password">Contraseña</label>
                  <input type="password" class="form-control" id="password" name="password" required placeholder="Ingresa tu contraseña">
                </div>
                <button type="submit" class="btn btn-danger w-100">Ingresar</button>
              </form>
              <a href="kattyaAvanze/index.php" class="btn btn-primary">Volver atras</a>

            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Agregamos los scripts necesarios para Bootstrap 5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
