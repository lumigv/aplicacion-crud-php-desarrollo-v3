<?php
//Incluye fichero con parámetros de conexión a la base de datos
include_once("config.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<title>Inicio</title>
</head>
<body>
<div>
	<header>
		<h1>APLICACION CRUD PHP</h1>
	</header>
	<main>				
	<?php
	session_start();
	if(isset($_POST['inicia'])) {
		$email = $mysqli->real_escape_string($_POST['email']);
		$password = $mysqli->real_escape_string($_POST['contrasena']);

		if (empty($email) || empty($password)) {
			$_SESSION['login_error'] = ' Completa email y contraseña';
			header("Location: login.php");
			exit();
		} //fin si
		else //Se comprueba si los datos son correctos 
		{
			$resultado = $mysqli->query("SELECT id, emp_id, contrasena, email, apellido, nombre FROM empleados WHERE email = '$email'");
			if ($resultado->num_rows === 0) {
				$_SESSION['login_error'] = 'Usuario incorrecto';
				header("Location: login.php");
				exit();
			} //fin si
			else
			{
				$fila = $resultado->fetch_array();
				if ($password === $fila['contrasena']) {
					//Datos correctos
					$_SESSION['id'] = $fila['id'];
					$_SESSION['emp_id'] = $fila['emp_id'];
					$_SESSION['nombre'] = $fila['nombre'];
					$_SESSION['apellido'] = $fila['apellido'];
					header("Location: home.php");
					exit();
				} //fin si
				else {
					//Contraseña incorrecta
					$_SESSION['login_error'] = 'Contraseña incorrecta';
					header("Location: login.php");
					exit();
				} //fin sino
			} //fin sino
		}
		//Se cierra la conexión de base de datos
		$mysqli->close();
	} //fin si
	?>
	</main>	
</div>
</body>
</html>
