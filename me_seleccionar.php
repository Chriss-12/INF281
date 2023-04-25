<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css" />
    <title>Modificaciones de eventos</title>
</head>
<body>
    <?php
        include 'menuAdmin.php';
    ?>
    <div class="col-md-2">
        <h1>Ingrese datos</h1>
        <form action="mu_insertar.php" method="POST" enctype="multipart/form-data">

           
            <label for="imagen" class="form-label mb-3">Imagen de evento</label>
            
            <input type="file" class="form-control mb-3" id="imagen" name="imagen" required>

            <label for="imagen1" class="form-label mb-3">Imagen de evento1</label>
            
            <input type="file" class="form-control mb-3" id="imagen1" name="imagen" required>
            <button type="submit" class="btn btn-primary">Agregar usuario</button>
        </form>
    </div>

</body>