<?php
include("conexion.php");

$nombre = $_POST['nombre'];
$paterno = $_POST['ap-paterno'];
$materno = $_POST['ap-materno'];
$ci = $_POST['ci'];
$fecha = $_POST['fecha-nac'];
$password = $_POST['password'];
$tipousuario = $_POST['tipoUsuario'];

//$query = mysqli_query($conn,"INSERT INTO usuario('nombre', 'apPaterno', 'apMaterno', 'contrasenia', 'ci', 'fechaNac') VALUES ('".$nombre."','".$paterno."','".$materno."','".$ci."','".$fecha."','".$password."')");
//$nr = mysqli_num_rows($query);
//echo $nr;
$consulta="insert into usuario (nombre, apPaterno, apMaterno, contrasenia, ci, fechaNac) 
    values ('$nombre','$paterno','$materno','$ci','$fecha','$password')";
    
    $res=mysqli_query($conn,$consulta);
    if($res){
        
        echo "
            <script>
                alert('Datos Registrados');
            </script> 
         ";
         include("iniciar.php");
    }else{
        echo "error";
    }

    if(isset($_POST['enviar'])){
        $nombre = $_POST['nombre'];
        $paterno = $_POST['ap-paterno'];
        $materno = $_POST['ap-materno'];
        $email=$_POST['email'];
        $msg="Hola";
        $asunto="que tal";
        $ci = $_POST['ci'];
        $fecha = $_POST['fecha-nac'];
        $password = $_POST['password'];
    
        $header = "From: noreply@example.com" . "\r\n";
        $header.= "Reply-To: noreply@example.com" . "\r\n";
        $header.= "X-Mailer: PHP/". phpversion();
        $mail=@mail($email,$asunto,$msg,$header);
        echo "$header";
        echo "$mail";
        echo "nnn";
        echo "\n si entre";
        if($mail){
            echo "<h4>Mail enviado exitosamente</h4>";
        }else{
            echo "<h1>no pasa nADA</h1>";
        }
    ?>