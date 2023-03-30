<?php
try {
  ## Creamos la variable $dbh que es la conexión completa a la base de datos, pasándole
  # los parámetros de conexión del host, la base de datos, el usuario y la contraseña
    $dbh = new PDO("mysql:host=127.0.0.1;dbname=pagina", "root", "");
} catch (PDOException $e){
    $dbh = $e->getMessage();
}
?>