<?php 
if(isset($_GET['email'] )){
    $email = $_GET['email'] ;
   
}else{
    header('Location: ./index.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar Cuenta</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="style1.css">

</head>
<body>
    
    <!DOCTYPE html>
<html>
<head>
	<title>Verificar cuenta</title>
	<style>
		body {
			background-color: #673ab7; /* Color morado */
			font-family: Arial, sans-serif;
			color: #673ab7;
			text-align: center;
			padding-top: 100px;
		}

		h1 {
			font-size: 48px;
			margin-bottom: 50px;
		    color: #fff;

		}

		form {
			display: inline-block;
			background-color: #fff;
			padding: 50px;
			border-radius: 5px;
			text-align: left;
		}

		label {
			display: block;
			margin-bottom: 20px;
			font-size: 24px;
		}

		input {
			display: block;
			width: 100%;
			padding: 10px;
			font-size: 18px;
			border: none;
			border-radius: 5px;
			margin-bottom: 20px;
		}

		button {
			background-color: #6A5ACD;
			border: none;
			color: #fff;
			padding: 15px 30px;
			font-size: 24px;
			border-radius: 5px;
			cursor: pointer;
		}

		button:hover {
			background-color: #ccc;
		}
	</style>
</head>
<body>
	<h1>Verificar cuenta</h1>
	<form method="POST" action="verificar.php">
		<label for="c">Ingresa tu código de verificación:</label>
		<input type="number" id="c" name="codigo" required>
		<input type="hidden" class="form-control" id="email" name="email" value="<?php echo $email;?>">

		<button type="submit">Verificar</button>
	</form>
</body>
</html>

    
   