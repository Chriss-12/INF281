
<?php

include_once 'bd.php';
$conexionBD = BD::crearInstancia();


$Nombre=isset($_POST['Nombre'])?$_POST['Nombre']:'';
$accion=isset($_POST['accion'])?$_POST['accion']:'';

if($accion!='')
{
    switch($accion)
    {
        case 'Seleccionar':
            $sql="SELECT * FROM datos WHERE Nombre=:Nombre";
            $consulta = $conexionBD->prepare($sql);
            $consulta->bindParam(':Nombre',$Nombre);
            $consulta->execute();
            $datos=$consulta->fetch(PDO::FETCH_ASSOC);  
            
        break;
    }
}


$consulta=$conexionBD->prepare("SELECT * FROM datos");
$consulta->execute();
$listaDatos=$consulta->fetchAll();



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
	<body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="col-md-9">
                <ul class="nav navbar-nav">
                    <h1> <b>CONTROL DE ASISTENCIA</b></h1>
                </ul>
            </div>
            <div class="col-md-2">
                <p align="right"> <h2>Controlador</h2></p>       
                <p align="right"> <h2>Atras</h2></p>  
                <p align="right"> <h2>Salir</h2></p>     
            </div>
            <div class="col-md-1">
                <img src="./img/usuario.png"  width=85%>
            </div>

        </nav>
		<section>

            <!-- Lado izquierdo-->
            <div class="col-md-6"> 
                <div class="card">
                    <div class="card-header">
                        <h1> <B> Actividad: </B>  <?php echo $Nombre; ?></h1>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="" class="form-label"></label>
                            <input type="text"
                                class="form-control" 
                                name="Nombre" 
                                id="Nombre" 
                                value = "<?php echo $Nombre; ?>"
                                aria-describedby="helpId" 
                                placeholder="Ingrese o seleccione la actividad">
                        </div>
                        <button name="Buscar" type="sumit" class="btn btn-success"> Buscar </button>
                    
                        <div class="table-responsive">
                            <table class="table table-primary">
                                <thead>
                                    <tr>
                                        <th style="text-align: center;" scope="col">NRO</th>
                                        <th scope="col">NOMBRE</th>
                                        <th scope="col">OBSERVACION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="">
                                        <td scope="row"></td>
                                        <td></td>
                                        <td></td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                        



                    </div>
                            
                </div>


                            
                            
            </div>
                        <!-- lado dereho -->
                        <div class="col-md-6">
                            
                            <div class="card">
                                <div class="card-header">
                                    <h1><center> LISTA DE ACTIVIDADES </center></h1>
                                </div>

                                    
                            <div class="table-responsive">
                                <table class="table table-primary">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center;" scope="col">NRO</th>
                                            <th scope="col">NOMBRE</th>
                                            <th scope="col">LUGAR</th>
                                            <th scope="col">ACCION</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($listaDatos as $datos){?>
                                            <tr>
                                                <td style="text-align: center;" scope="row"><?php echo $datos['Nro'];?></td>
                                                <td scope="row"><?php echo $datos['Nombre'];?></td>
                                                <td scope="row"><?php echo $datos['Lugar'];?></td>
                                                <td scope="row">

                                                    <form action="" method="post">
                                                        <input type="hidden" name="Nombre" id="Nombre" value="<?php echo $datos['Nombre'];?>"/>
                                                        <input type="submit" value="Seleccionar" name="accion" class="btn btn-success">
                                                    </form>


                                                </td>

                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            
                
                    </div>

                </div>

                
            </div>
            

        



		</section>
	</body>
</html>