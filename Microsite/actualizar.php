<!DOCTYPE html>
<html>
<head>
	<title>Actualizar</title>
</head>
<body>
	<h1>crUd - Update - Actualizar</h1>
	<?php
	include 'conn.php';
	if(!empty($_POST['nombre']) && !empty($_POST['correo']) && !empty($_POST['mensaje'])){

		$id = $_GET['ID'];
		$name = $_POST['nombre'];
		$correo = $_POST['correo'];
    $mensaje = $_POST['mensaje'];

		$get_all = $dbh->prepare("UPDATE usuarios SET nombre = '$name', correo = '$correo' mensaje = '$mensaje' WHERE ID = '$id'");
		$get_all->execute();

		header('Location: http://localhost/Microsite/update.php');

	}else if (!empty($_GET['ID'])) {
		$id = $_GET['ID'];
		echo "<form action='' method='POST'>";
		$get_all = $dbh->prepare("SELECT * FROM usuarios WHERE ID = '$id'");
		$get_all->execute();
		while($fila = $get_all->fetch(PDO::FETCH_OBJ)){
			echo "Nombre a modificar: <input type='text' value='$fila->nombre' name='nombre'><br>Correo a modificar: <input type='text' value='$fila->correo' name='correo'>";
		}
		echo "<br><input type='submit' value='Actualizar datos'></form>";
	}else{
		echo "<table>
		<tr>
			<th>ID</th>
			<th>Nombre</th>
			<th>Correo</th>
      <th>Mensaje</th>
			<th>Actualizar</th>
		</tr>";
	
		$get_all = $dbh->prepare("SELECT * FROM usuarios");
		$get_all->execute();
		while($fila = $get_all->fetch(PDO::FETCH_OBJ)){
			echo "<tr><td>$fila->ID</td><td>$fila->nombre</td><td>$fila->correo</td><td>$fila->mensaje</td><td><button id='boton' onclick='prueba($fila->ID);'>Actualizar</button></td></tr>";
		}
		echo "</table>";
		}
		?>
	<script type="text/javascript">
		function prueba(ID){
			window.location.replace("http://localhost/Microsite/update.php?id="+ID);
		}
	</script>
</body>
</html>