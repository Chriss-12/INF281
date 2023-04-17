<?php
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];

header('Location: nueva1.php?nombre='.$nombre);

//header('Location: contactanos1.php?nombre='.$nombre);

//$color=$_POST['color'];

//header('Location: nueva1.php?color='.$color);


?>