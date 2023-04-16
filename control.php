<?php
    include 'conexion.php';
    $actividad = "SELECT *FROM actividad";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>CONTROL DE ASISTENCIA</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>

	<link href="css/estilos1.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>

<body style="background-color:#B5B2B2"> <!-- color de pagina -->
<div class="navegacion">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        
        <div class="col-md-10">
            <ul class="nav navbar-nav">
                <li>
                    <h1><b>Paguina de Control</b></h1>
                </li>
            </ul>
            
        </div>
        <div class="col-md-2">
            <tr>
                <td>
                    <a href="salirSesion.php" class="btn btn-danger">
                        Salir
                    </a>
                </td>
            </tr>     
             
        </div>
    </nav>

            </div> 
            <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
            <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <!-- Comienzo de la tabla -->
    <section>
            <!-- Creacion de la tabla -->
            <div class="col-md-12">
                <!-- Lado izquierdo -->
                <div class="col-md-7">
                    <div class="card">
                        <div class="card-header">
                        <h1 style="color:rgb(71, 0,100)"> <B> LISTA DE ACTIVIDADES </B></h1>
                        </div>
                        <div class="card-body">
                        <table class="table align-middle">
                            <thead class="table-dark">
                                <tr>
                                <th scope="col"><h2><b>Nro</b></h2></th>
                                <th scope="col"><h2><b>Tema</b></h2></th>
                                <th scope="col"><h2><b>Tipo</b></h2></th>
                                <th scope="col"><h2><b>Fecha</b></h2></th>
                                <th scope="col"><h2><b>Accion</b></h2> </th>
                                </tr>
                            </thead>
                            <tbody>
                                 <!-- listando la base de datos -->

                                 <?php $listar = mysqli_query($con,$actividad);
                                    while($row=mysqli_fetch_assoc($listar)){?>
                                        <tr>
                                        <td><h4><?php echo $row["id_actividad"];?></h4></td>
                                        <td><h4><?php echo $row["tema"];?></h4></td>
                                        <td><h4><?php echo $row["tipo"];?></h4></td>
                                        <td><h4><?php echo $row["fechaActividad"];?></h4></td>
                                        <td>
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
                   
                    </div><!-- Fin del lado izquierdo -->
                    <a href="listaA.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true" name="bt1">Generar Lista de actividades</a>
                    <a href="listaA.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true" name="bt2" download="a.pdf">Descargar Lista de actividades</a>
                    <a href="listaAsistentes.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true" name="bt1">Participantes</a>
                    <a href="qr.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true" name="bt1">Codigo de Asistencia</a>
                    
                </div>
                    <!-- Lado izquierdo -->
                    <div class="col-md-5">
                    <div class="card">
                        <div class="card-header">
                        <h1 style="color:rgb(71, 0,100)"> <B> ACTIVIDAD:  </B></h1>
                        </div>
                        <div class="card-body">
                        <table class="table align-middle">
                            <thead class="table-dark">
                                <tr>
                                <th scope="col"><h2>Nro</h2></th>
                                <th scope="col"><h2>Nombre</h2></th>
                                <th scope="col"><h2>Ingreso</h2></th>
                                <th scope="col"><h2>Salida</h2></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
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
                                            <td class="table-light"><h4><?php echo $cont;?></h4></td>
                                            <td class="table-light"><h4><?php echo $row["part"];?></h4></td>
                                            <td class="table-light"><h4>null</h4></td>
                                            <td class="table-light"><h4>null</h4></td>
                                        
                                            </tr>
                                    <?php } }?>
                                
                                </tr>
                                
                            </tbody>
                        </table>                     
                    
                    </div>
                    
                    </div>
                    </div>
                </div>
                    
    </section>
</body>
</html>