<?php
/*Incluye parámetros de conexión a la base de datos: 
DB_HOST: Nombre o dirección del gestor de BD MariaDB
DB_NAME: Nombre de la BD
DB_USER: Usuario de la BD
DB_PASSWORD: Contraseña del usuario de la BD
*/
include_once("config.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<title>CRUD PHP</title>
</head>
<body>
<div>
	<header>
		<h1>APLICACION CRUD PHP</h1>
	</header>
  <?php
  session_start();
  #Asigna a la variable $error:
  #el valor de $_SESSION['login_error'] si existe y no es null
  #o una cadena vacía '' si no existe

  $error = $_SESSION['login_error'] ?? '';
  unset($_SESSION['login_error']);
  ?>

  <?php if ($error !== ""): ?>
    <p style="color:#b00020;"><?php echo $error;?></p>
  <?php endif; ?>

  <form method="post" action="login_action.php">
    Correo electrónico<br>
    <input type="email" name="email" placeholder="Correo electrónico" required><br>
    Contraseña<br>
    <input type="password" name="contrasena" placeholder="Contraseña" required><br>
    <button type="submit" name="inicia" value="si">Iniciar sesión</button>
  </form>

  <p><a href="add.php">Crear una cuenta</a></p>
  <p><a href="index.php">Volver</a></p>


	</main>
	<footer>
    	Created by the IES Miguel Herrero team &copy; 2026
  	</footer>
</div>
</body>
</html>
