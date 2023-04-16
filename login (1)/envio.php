<?php
#include "conexion.php";
if(isset($_POST['enviar'])){
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email=$_POST['email'];
    $password = $_POST['password'];
    $usuario = $_POST['opcion'];



    $codigo= rand(1000,9999);

    $msg="Gracias por Registrarte " . $nombre ."tu codigo de verificacion es:" ."\r\n". $codigo . "\r\n" ;
    $asunto="Verificacion de cuenta para " . $usuario;

    $header = "From: lexcorp@educate.com" . "\r\n";
    $header.= "Reply-To: lexcorp@educate.com" . "\r\n";
    $header.= "X-Mailer: PHP/". phpversion();
    $mail=@mail($email,$asunto,$msg,$header);
    $envio = false;

    if($mail){
        echo "<script>alert('Codigo enviado su correo')</script>";
        $envio= true;  
    }else{
        echo "<script>alert('Correo invalido')</script>";
    }
    

}


?>