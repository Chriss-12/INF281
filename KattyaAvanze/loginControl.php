<?php
// Conexión a la base de datos
include 'conexion.php';

// Obtener los datos del formulario de inicio de sesión
$username = $_POST['nombreUsuario'];
$password = $_POST['contrasenia'];

// Consulta para verificar las credenciales del usuario
$consulta = "SELECT * FROM usuario WHERE nombreUsuario='$username' AND contrasenia='$password'";
$resultado = mysqli_query($con, $consulta);

// Verificar si el usuario existe y tiene el tipo de usuario adecuado
if (mysqli_num_rows($resultado) >= 1) {
	$usuario = mysqli_fetch_assoc($resultado);
	if ($usuario['tipoUsuario'] == 'administrador') {
		// Redirigir al administrador a la página de administración
		header('Location: ../modificaciones_usuario.php');
	} 
	elseif ($usuario['tipoUsuario'] == 'participante') {
		// Redirigir al usuario a la página de usuario
		header('Location: usuario.php');
	} 
	elseif ($usuario['tipoUsuario'] == 'control') {
		// Redirigir al usuario a la página de usuario
		header('Location: ../control.php');
	} 
	elseif ($usuario['tipoUsuario'] == 'expositor') {
		// Redirigir al usuario a la página de usuario
		header('Location: usuario.php');
	} 
	else {
		// Si el tipo de usuario no está definido correctamente, mostrar un error
		
		header('Location: login.php');
	}
} else {
	// Si el usuario no existe o las credenciales son incorrectas, mostrar un error
	
	header('Location: login.php');
}
?>
