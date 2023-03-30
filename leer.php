<!DOCTYPE html>
<html>
<head>
	<title>Leer</title>
</head>
<body>
	<h1>cRud - Read - Lectura</h1>
	<?php
	include 'conn.php';
	
	?>
	<table>
		<tr>
			<th>ID</th>
			<th>Nombre</th>
			<th>Correo</th>
      <th>Mensaje</th>
		</tr>
	<?php
		$get_all = $dbh->prepare("SELECT * FROM usuarios");
		$get_all->execute();
		while($fila = $get_all->fetch(PDO::FETCH_OBJ)){
			echo "<tr><td>$fila->ID</td><td>$fila->nombre</td><td>$fila->correo</td><td>$fila->mensaje</td></tr>";
		}
	?>
	</table>
</body>
</html>