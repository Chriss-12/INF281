<?php
    include 'conexion.php';
    $actividad = "SELECT *FROM actividad";
?>
<html lang="es">

	<head>
		<title>CONTROL DE ASISTENCIA</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>

		<link href="css/estilos.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" href="./css/bootstrap.min.css" />
	</head>
	<body style="background-color:#B5B2B2">

        <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="col-md-9">
                <ul class="nav navbar-nav">
                    <h1> <b>CONTROL DE ASISTENCIA</b></h1>
                </ul>
            </div>
            <div class="col-md-2">
                <tr><td> <h4 >Controlador</h4> </td></tr>
                <tr><td> <h4>Atras</h4> </td></tr>
                <tr><td> <h4>Salir</h4> </td></tr>                
            </div>
            <div class="col-md-1">
                <img src="./img/usuario.png"  width=85%>
            </div>

        </nav>
        </header>
        <!-- inicio del cuerpo -->
		<section>
            <!-- Creacion de la tabla -->
            <div class="col-md-12">
                <!-- Lado izquierdo -->
                <div class="col-md-7">
                    <h1 style="color: white"> <B> LISTA DE ACTIVIDADES </B></h1>
                    <div class="table-responsive" >
                        <table class="table table-bordered" >
                            <thead class="thead-dark">
                                <!-- primera fila -->
                                <tr style="width:700px">
                                    <th class="bg-primary" style="width:50px" scope="col">Nro</th>
                                    <th class="bg-primary" style="width:300px" scope="col">Tema</th>
                                    <th class="bg-primary" style="width:110px" scope="col">Tipo</th>
                                    <th class="bg-primary" style="width:110px" scope="col">Fecha</th>
                                    <th class="bg-primary" style="width:90px" scope="col">Accion</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="">
                                    <!-- listando la base de datos -->

                                    <?php $listar = mysqli_query($con,$actividad);
                                    while($row=mysqli_fetch_assoc($listar)){?>
                                        <tr>
                                        <td class="table-light" style="width:50px"><?php echo $row["id_actividad"];?></td>
                                        <td class="table-light" style="width:300px"><?php echo $row["tema"];?></td>
                                        <td class="table-light" style="width:110px"><?php echo $row["tipo"];?></td>
                                        <td class="table-light" style="width:110px"><?php echo $row["fechaActividad"];?></td>
                                        <td class="table-light" style="width:90px">
                                            <form action="" method="post">
                                                <input type="hidden" name="id" id="id" value="<?php echo $row["id_actividad"];?>">
                                                <input type="submit" value="Seleccionar" name="accion" class="btn btn-primary btn-lg">
                                            </form>

                                        </td>
                                        </tr>
                                    <?php } ?>
                                </tr>

                            </tbody>
                        </table>
                        
                        <a href="reporte.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Generar</a>
                        <a href="reporte.php" class="btn btn-primary btn-lg active" download="actividades.pdf" role="button" aria-pressed="true">Descargar</a>
                        
                    </div>
                </div>

                <!-- Fin del lado izquierdo -->
                
                <!-- Lado derecho-->

                <div class="col-md-5">
                    <div class="table-responsive">
                            <table class="table  table-bordered">
                                <thead class="thead-dark">
                                    <tr>
                                        <th class="bg-primary" scope="col">Nro</th>
                                        <th class="bg-primary" scope="col">Participante</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                     if(isset($_POST["accion"]))
                                     {
        
                                        $id_act = $_POST["id"]; 
                                        $participantes ="SELECT concat(p.nombre,' ', p.apPaterno,' ',p.apMaterno) as part FROM usuario p
                                        INNER JOIN reserva r ON p.id_usuario = r.id_usuarioParticipante
                                        INNER JOIN actividad act ON act.id_actividad = r.id_actividad 
                                        INNER JOIN inscripcion i ON r.id_reserva = i.id_reserva
                                        INNER JOIN asistencia asi ON i.id_inscripcion = asi.id_inscripcion
                                        WHERE $id_act = act.id_actividad";
                                        $listar = mysqli_query($con,$participantes);
                                        $cont = 0;
                                        while($row=mysqli_fetch_assoc($listar)){
                                            $cont = $cont + 1;?>
                                            <tr>
                                            <td class="table-light"><?php echo $cont;?></td>
                                            <td class="table-light"><?php echo $row["part"];?></td>
                                        
                                            </tr>
                                    <?php } }?>

                                </tbody>
                            </table>
                            <form action="" method="post">
                                <a href="reporte.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true" name="bt1">Generar</a>
                                <a href="reporte.php" class="btn btn-primary btn-lg active" download="actividades.pdf" role="button" aria-pressed="true">Descargar</a>
                            
                            </form>
                            
                        </div>
                </div>                      
                

                <!-- Fin del lado derecho -->
            </div>

            
            <!-- Fin de la tabla -->
		</section>
        <!-- fin del cuerpo -->
	</body>
</html>