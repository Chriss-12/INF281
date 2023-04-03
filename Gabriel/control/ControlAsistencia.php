<?php
    include 'conexion.php';
    $actividad = "SELECT *FROM actividad";
?>

<html lang="es">

	<head>
		<title>CONTROL DE ASISTENCIA</title>
        </style>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
		<link href="css/estilos.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" href="./css/bootstrap.min.css" />
	</head>
	<body>
        <div class="col-md-12">
            <!-- inicio de la tabla -->
                <!-- lado derecho -->
                <div class="col-md-7">

                    <!-- inicio de la table-->
                
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="thead-dark">
                                <tr style="width:700px">
                                    <th style="width:50px" scope="col">Nro</th>
                                    <th style="width:300px" scope="col">Tema</th>
                                    <th style="width:110px" scope="col">Tipo</th>
                                    <th style="width:110px" scope="col">Fecha</th>
                                    <th style="width:90px" scope="col">Accion</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="">
                                    <?php $listar = mysqli_query($con,$actividad);
                                    while($row=mysqli_fetch_assoc($listar)){?>
                                        <tr>
                                        <td style="width:50px"><?php echo $row["id_actividad"];?></td>
                                        <td style="width:300px"><?php echo $row["tema"];?></td>
                                        <td style="width:110px"><?php echo $row["tipo"];?></td>
                                        <td style="width:110px"><?php echo $row["fechaActividad"];?></td>
                                        <td style="width:90px">
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
                    </div>
                    
                    <!-- fin de la tabla-->


                </div>

            <!-- fin de la tabla -->
                <!-- lado izquierdo-->
                <div class="col-md-5">
                    
                        <div class="table-responsive">
                            <table class="table table-primary">
                                <thead>
                                    <tr>
                                        <th scope="col">Nro</th>
                                        <th scope="col">Participante</th>

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
                                            <td ><?php echo $cont;?></td>
                                            <td ><?php echo $row["part"];?></td>
                                        
                                            </tr>
                                    <?php } }?>

                                </tbody>
                            </table>
                        </div>
                        
                    

                </div>
                
        </div>
    </body>
</html>