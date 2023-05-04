<?php
    include 'conexion.php';
    $actividad = "SELECT *FROM actividad";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>PARTICIPANTE</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>

	<link href="css/estilos1.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>

<body style="background-color:#B5B2B2"> <!-- color de pagina -->
            <div class="navegacion">
                <h1 class="logo">
                    <b>Bienvenido</b>
                </h1>
                <nav>                
                    <ul>
                        <li class="listas">
                            <a href="login.php">
                                <span class="icon">
                                    <ion-icon name="home-outline"></ion-icon>
                                    
                                </span>
                                <span class="text">Inicio</span>
                            </a>
                        </li>
                    </ul>
                </nav>

            </div> 
            <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
            <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <!-- Comienzo de la tabla -->
    <section>
            <!-- Creacion de la tabla -->
            <div class="col-md-12">
                <!-- Lado izquierdo -->
                <div class="col-md-5">
                    <h1>NOMBRE DEL EVENTO</h1>
                    <center>
                    <img src="./img/i1.png" alt=""  width="500" height="400">
                    </center>
                    <a href="#" class="btn btn-primary btn-lg active" role="button" aria-pressed="true" name="bt2"><h3>ASISTENCIA</h3></a>
                    <a href="c1.pdf" class="btn btn-primary btn-lg active" role="button" aria-pressed="true" name="bt2" download="c1.pdf"><h3>CERTIFICADO</h3></a>

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

                    <!-- Lado derecho -->
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
                                    <td>
                                        <tr>
                                        <td><h3>1</h3></td>
                                        <td><h3>Gabriel Moreno en su tiempo</h3></td>
                                        <td><h3>conferencia</h3></td>
                                        <td><h3>2023-03-14</h3></td>
                                        <td> <a href="./material/m1.pdf" class="btn btn-primary btn-lg active" role="button" aria-pressed="true" name="bt2" download="m1.pdf">Material</a> </td>
                                        </tr>
                                    </td>
                                    <td>
                                        <tr>
                                        <td><h3>2</h3></td>
                                        <td><h3>Ofrecimiento del Congreso</h3></td>
                                        <td><h3>conferencia</h3></td>
                                        <td><h3>2023-03-14</h3></td>
                                        <td> <a href="./material/m2.pdf" class="btn btn-primary btn-lg active" role="button" aria-pressed="true" name="bt2" download="m2.pdf">Material</a> </td>
                                        </tr>
                                    </td>
                                    <td>
                                        <tr>
                                        <td><h3>3</h3></td>
                                        <td><h3>El pensamiento de Garcia Moreno</h3></td>
                                        <td><h3>conferencia</h3></td>
                                        <td><h3>2023-03-14</h3></td>
                                        <td> <a href="./material/m3.pdf" class="btn btn-primary btn-lg active" role="button" aria-pressed="true" name="bt2" download="m3.pdf">Material</a> </td>
                                    </td>
                                    <td>
                                        <tr>
                                        <td><h3>4</h3></td>
                                        <td><h3>	La imagen de Garcia Moreno</h3></td>
                                        <td><h3>conferencia</h3></td>
                                        <td><h3>2023-03-14</h3></td>
                                        <td> <a href="./material/m4.pdf" class="btn btn-primary btn-lg active" role="button" aria-pressed="true" name="bt2" download="m4.pdf">Material</a> </td>
                                        </tr>
                                    </td>
                                    <td>
                                        <tr>
                                        <td><h3>5</h3></td>
                                        <td><h3>La huella de Garcia Moreno</h3></td>
                                        <td><h3>conferencia</h3></td>
                                        <td><h3>2023-03-14</h3></td>
                                        <td> <a href="./material/m5.pdf" class="btn btn-primary btn-lg active" role="button" aria-pressed="true" name="bt2" download="m5.pdf">Material</a> </td>
                                        </tr>
                                    </td>

                                    <td>
                                        <tr>
                                        <td><h3>6</h3></td>
                                        <td><h3>Hispanoamerica entre la tradicion y la revolucion</h3></td>
                                        <td><h3>conferencia</h3></td>
                                        <td><h3>2023-03-14</h3></td>
                                        <td> <a href="./material/m6.pdf" class="btn btn-primary btn-lg active" role="button" aria-pressed="true" name="bt2" download="m6.pdf">Material</a> </td>
                                        </tr>
                                    </td>
                                    <td>
                                        <tr>
                                        <td><h3>7</h3></td>
                                        <td><h3>El ultra montanismo hispanoamericano</h3></td>
                                        <td><h3>conferencia</h3></td>
                                        <td><h3>2023-03-14</h3></td>
                                        <td> <a href="./material/m7.pdf" class="btn btn-primary btn-lg active" role="button" aria-pressed="true" name="bt2" download="m7.pdf">Material</a> </td>
                                        </tr>
                                    </td>


                                </tbody>
                            </table>                     
                            
                        </div>

                        
                    
                        </div><!-- Fin del lado derecho -->
                 
                    
            </div>
                    
    </section>
</body>
</html>