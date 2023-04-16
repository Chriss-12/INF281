<?php
    include "conexion.php";
    include "envio.php";
           ;

    if($envio){
         
            $consulta="insert into usuario (nombre, apellido, email, password, usuario, confirmado, codigo) 
            values ('$nombre','$apellido','$email','$password','$usuario','no','$codigo')";
           
            $res=mysqli_query($conexion,$consulta);
            if($res){
                
                echo "
                    <script>
                        alert('Datos Registrados');
                    </script> 
                 ";
            }else{
                echo "error al registrar ";
            }
        include("confirmacion.php");

    }else{
        // echo "No se envio el correo";
    }


?>