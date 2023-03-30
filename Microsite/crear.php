<!DOCTYPE html>
<html>
<head>
	<title>Crear</title>
</head>
<body>
	<h1>Crud - Create - Crear</h1>
	<?php
	if (!empty($_POST['name']) && !empty($_POST['apellido'])) {
		include 'conn.php';
		$nombre = $_POST['name'];
		$correo = $_POST['correo'];
    $mensaje = $_POST['mensaje'];
		$insert_data = $dbh->prepare("INSERT INTO usuarios (nombre, correo, mensaje VALUES ('$nombre', '$correo', '$mensaje')");
		$insert_data->execute();
	}
	?>
	<form action="" method="POST">
		Escriba su nombre:
		<br>
		<input type="text" name="name" placeholder="Escriba su nombre" required>
		<br>
		Escriba su correo:
		<br>
		<input type="text" name="correo" placeholder="Escriba su correo" required>
		<br>
    Escriba un mensaje:
		<br>
		<input type="text" name="mensaje" placeholder="Escriba un mensaje" required>
		<br>
		<input type="submit" value="Crear usuario">
	</form>
</body>
</html>