<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css" />
    <title>Pagina expositor</title>
</head>
<body>
    <?php
        include 'menuExpositor.php';
    ?>
    <div class="col-md-7">
        <h1>Ingrese datos</h1>
            <form action="mex_insertar.php" method="POST" enctype="multipart/form-data">


                <input type="text" class="form-control mb-3" name="descripcion" placeholder="descripcion">
                
                
                <input type="file" class="form-control mb-3" id="pdf" name="pdf" required>
                <button type="submit" class="btn btn-primary">Agregar archivo</button>
            </form>
    </div>
</body>
</html>