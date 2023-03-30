<!DOCTYPE html>
<html>
<head>
	<title>Borrar</title>
</head>
<body>
	<?php
	include 'conn.php';
	

	if(!empty($_GET['ID'])){
		$id = $_GET['ID'];

		$get_all = $dbh->prepare("DELETE FROM usuarios WHERE ID = '$id'");
		$get_all->execute();

		header('Location: http://localhost/Microsite/delete.php');



	}

	?>
	<h1>cruD - Delete - Borrar</h1>
	<table>
		<tr>
			<th>ID</th>
			<th>Nombre</th>
			<th>Correo</th>
			<th>Mensaje</th>
			<th>Borrar</th>
		</tr>
	<?php
			$get_all = $dbh->prepare("SELECT * FROM usuarios");
		$get_all->execute();
		while($fila = $get_all->fetch(PDO::FETCH_OBJ)){
			echo "<tr><td>$fila->ID</td><td>$fila->nombre</td><td>$fila->correo</td><td>$fila->mensaje</td><td><button onclick='borra($fila->ID);'>❌</button></td></tr>";
		}
	?>
	</table>
	<script type="text/javascript">
		function borra(ID){
			window.location.replace("http://localhost/Microsite/delete.php?id="+ID);
		}
	</script>
</body>
</html>