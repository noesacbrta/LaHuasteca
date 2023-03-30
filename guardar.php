<?php
// Configuración de la base de datos
$servername = "localhost";
$username = "root";
$password = "sacramento";
$dbname = "pagina";

// Conexión a la base de datos
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Comprobar la conexión
if (!$conn) {
  die("Conexión fallida: " . mysqli_connect_error());
}

// Obtener los datos del formulario
if(isset($_POST['submit'])) {
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];

// Insertar los datos en la tabla
$sql = "INSERT INTO usuarios (nombre, correo, mensaje) VALUES ('$nombre', '$correo', '$mensaje')";
if (mysqli_query($conn, $sql)) {
  echo "Datos guardados correctamente";
} else {
  echo "Error al guardar los datos: " . mysqli_error($conn);
}

// Cerrar la conexión a la base de datos
mysqli_close($conn);
}
?>
