<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css" />
    <title>Document</title>
</head>
<body>
    <?php 
        include 'menuAdmin.php';
    ?>
    <div class="col-md-6">
        <h1>Cambiar paguina</h1>
        <form action="cambiosPaguina.php" method="POST">

            <input type="text" class="form-control mb-3" name="nombre" placeholder="nombre">
            <select class="form-control mb-3" name="color">
                <option value="rojo">rojo</option>
                <option value="verde">verde</option>
                <option value="naranja">naranja</option>
                <option value="negro">negro</option>
            </select>
            <button type="submit" class="btn btn-primary">Guardar cambios</button>
        </form>
    </div>
</body>
</html>