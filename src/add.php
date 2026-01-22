<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Altas</title>
</head>
<body>
<div>
	<header>
		<h1>APLICACION CRUD PHP</h1>
	</header>
	<main>				
	<h2>Alta</h2>
<!--FORMULARIO DE ALTA. Al hacer click en el botón Agregar, llama a la página: add.php (form action="add.php")
La página: add.php se encargará de proceder a la inserción del registro en la tabla de empleados
-->

	<form action="add_action.php" method="post">
		<div>
			<label for="name">Nombre</label>
			<input type="text" name="name" id="name" placeholder="nombre" required>
		</div>

		<div>
			<label for="surname">Apellido</label>
			<input type="text" name="surname" id="surname" placeholder="apellido" required>
		</div>

		<div>
			<label for="age">Edad</label>
			<input type="number" name="age" id="age" placeholder="edad" required>
		</div>

		<div>
			<label for="job">Puesto</label>
			<select name="job" id="job" placeholder="puesto" required>
				<option value="" disabled selected>Seleccione un puesto</option>
				<option value="administrativo">Administrativo</option>
				<option value="contable">Contable</option>
				<option value="dependiente">Dependiente</option>
				<option value="empleado">Empleado</option>
				<option value="gerente">Gerente</option>
				<option value="repartidor">Repartidor</option>
			</select>	
		</div>

		<div>
			<button type="submit" name="inserta" value="si">Aceptar</button>
			<button type="button" onclick="location.href='index.php'">Cancelar</button>
			<button type="reset">Limpiar</button>
		</div>
	</form>
	
	</main>	
	<footer>
	<p><a href="index.php">Volver</a></p>	
	Created by the IES Miguel Herrero team &copy; 2026
  	</footer>
</div>
</body>
</html>