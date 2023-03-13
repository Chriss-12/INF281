<?php
$host="localhost";
$usuario="root";
$contraseña="";
$base="eventos";

$conexion= new mysqli($host, $usuario, $contraseña, $base);
if ($conexion -> connect_errno)
{
	die("Fallo la conexion:(".$conexion -> mysqli_connect_errno().")".$conexion-> mysqli_connect_error());
}

$datos="SELECT * FROM datos";
$resDatos=$conexion->query($datos);

$participante="SELECT * FROM participante";
$resParticipante=$conexion->query($participante);
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
                    <h1> <b>CONTROL DE ASISTENCIA</b></h1>
                </ul>
            </div>
            <div class="col-md-2">
                <tr><td> <h4>Administrador</h4> </td></tr>
                <tr><td> <h4>Atras</h4> </td></tr>
                <tr><td> <h4>Salir</h4> </td></tr>                
            </div>
            <div class="col-md-1">
                <img src="./img/usuario.png"  width=85%>
            </div>

        </nav>
		<section>
            
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

			<div class="col-md-5">
                    <div class="card">
                        <div class="card-header">
                            <h1> LISTA DE ASISTENTES DEL EVENTO: ... </h1>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <tr>
                                    <th>Nro</th>
                                    <th>Id Usuario</th>
                                    <th>Nombre Completo</th>
                                    <th>Observacion</th>
                                </tr>
                            <?php
                                while ($registroParticipante = $resParticipante->fetch_array(MYSQLI_BOTH))
                                {

                                    echo'<tr>
                                        <td>'.$registroParticipante['Nro'].'</td>
                                        <td>'.$registroParticipante['Id_usuario'].'</td>
                                        <td>'.$registroParticipante['NombreCompleto'].'</td>
                                        <td>'.$registroParticipante['Observacion'].'</td>

                                        </tr>';
                                }
                            ?>
                            </table>
                        </div>

                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Buscar</label>
                        <input type="text"
                        class="form-control" name="" id="" aria-describedby="helpId" placeholder="Ingrese el nombre a buscar">
                        <small id="helpId" class="form-text text-muted"></small>
                    </div>
                    <div class="btn-group" role="group" aria-label="">
                                    <button type="button" class="btn btn-info"><h3>Editar</h3></button>
                                    <button type="button" class="btn btn-danger"><h3>Eliminar</h3></button>
                                </div>


                </div>


                

                               


            </div>
            



		</section>
	</body>
</html>