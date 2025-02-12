<?php
$dsn = 'mysql:dbname=dbname;host=db:3306'; //nombre Base datos y dónde está la BD
$usuario = 'test';
$contrasena = 'test';

try {

$conexion = new PDO($dsn, $usuario, $contrasena);
$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}
catch (PDOException $e) { //en caso de detectar un error lo muestra
echo 'Falló la conexión: ' . $e->getMessage();
}

?>