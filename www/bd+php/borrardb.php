<?php
ob_start();
include "conexion.php";

    $identificador = $_POST["id"] ?? 0; //si No recibe ningún valor del $_GET asigna 0.


    $sql = "DELETE FROM tabla2 WHERE id = :idValor";

    $sentencia = $conexion->prepare($sql);
    $sentencia->bindParam(":idValor", $identificador); //asocia el $identicador a :idValor
    $isOk = $sentencia->execute(); //borra los valores

    $cantidadAfectada = $sentencia->rowCount(); //Devuelve el número de filas afectadas por la última sentencia SQL
    echo $cantidadAfectada;
    
?>
<form action="/bd+php/mostrardb.php" method="post">
    <input type="submit" value="Volver">
</form>