<?php
$host="localhost";
$usuario="root";
$contraseña="";
$base="prueba4";

$conexion= new mysqli($host, $usuario, $contraseña, $base);
if ($conexion -> connect_errno)
{
	die("Fallo la conexion:(".$conexion -> mysqli_connect_errno().")".$conexion-> mysqli_connect_error());
}

$datos="SELECT * FROM datos";
$resDatos=$conexion->query($datos);
?>

<html lang="es">

	<head>
		<title>MOSTRAR REGISTROS</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>

		<link href="css/estilos.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" href="./css/bootstrap.min.css" />
	</head>
	<body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="col-md-9">
                <ul class="nav navbar-nav">
                    <h1> <b>BIENVENIDO</b></h1>
                </ul>
            </div>
            <div class="col-md-2">
                <tr><td> <h4>Gabriel Chacon Hinojosa</h4> </td></tr>
                <tr><td> <h4>jgchacon</h4> </td></tr>
                <tr><td> <h4>Salir</h4> </td></tr>                
            </div>
            <div class="col-md-1">
                <img src="./img/usuario.png"  width=85%>
            </div>

        </nav>
		<section>
            <div class="col-md-5">
                <h1>NOMBRE DEL EVENTO</h1>
                <img src="./img/seminario.png" alt="" width=85%>
                <button type="button" class="btn btn-primary"><h4>RESERVA</h4></button>
                <button type="button" class="btn btn-primary"><h4>ASISTENCIA</h4></button>
                <button type="button" class="btn btn-primary"><h4>OBTENER MATERIAL</h4></button>
                <button type="button" class="btn btn-primary"><h4>CERTIFICADO</h4>  </button>

       
                
                <br></br>
                <div class="card">
                    <div class="card-header">
                        <b>COMENTAMOS QUE TAL TE PARECIO EL SEMINARIO</b>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                          <label for="" class="form-label"></label>
                          <input type="text"
                            class="form-control" name="" id="" aria-describedby="helpId" placeholder="Ingresa aqui tu comentario">
                          <small id="helpId" class="form-text text-muted"></small>
                        </div>
                        <button type="sumit" class="btn btn-primary">Enviar</button>
                    </div>
                </div>



            </div>
            <div class="col-md-7">
                <div class="card">
                    <div class="card-header">
                        <h1> LISTA DE EVENTOS </h1>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>Nro</th>
                                <th>Nombre</th>
                                <th>Fecha</th>
                                <th>Hora</th>
                                <th>Lugar</th>
                                <th>Cupo</th>
                            </tr>
                        <?php
                            while ($registroDatos = $resDatos->fetch_array(MYSQLI_BOTH))
                            {

                                echo'<tr>
                                    <td>'.$registroDatos['Nro'].'</td>
                                    <td>'.$registroDatos['Nombre'].'</td>
                                    <td>'.$registroDatos['Fecha'].'</td>
                                    <td>'.$registroDatos['Hora'].'</td>
                                    <td>'.$registroDatos['Lugar'].'</td>
                                    <td>'.$registroDatos['Cupo'].'</td>
                                    </tr>';
                            }
                        ?>
                        </table>
                    </div>

                </div>


                
                
            </div>

			

		</section>
	</body>
</html>