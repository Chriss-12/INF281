
<html lang="es">

	<head>
		<title>MODIFICACIONES DE EVENTO</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>

		<link href="css/estilos.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" href="./css/bootstrap.min.css" />
	</head>
	<body>
        <?php
        include 'conexion.php';
        $sql = "SELECT * FROM ACTIVIDAD";
        $resultado = mysqli_query($con, $sql);
        
        ?>
        <!-- Codigo en html-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="col-md-9">
                <ul class="nav navbar-nav">
                    <h1> <b>Pagina administrativa</b></h1>
                </ul>
            </div>
            <div class="col-md-2">
                <tr><td> <h4>Administrador</h4> </td></tr>
                <tr><td> <h4>Atras</h4> </td></tr>
                <tr><td> <h4>Salir</h4> </td></tr>                
            </div>
            <div class="col-md-1">
                <img src="./imagenes/logo.png"  width=85%>
            </div>

        </nav>
	</body>
</html>