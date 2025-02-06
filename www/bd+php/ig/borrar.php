<?php
ob_start();
include "conexion.php";
    $id=$_SESSION["id"];


    $sql = "DELETE mensaje,foto,fecha FROM postsig WHERE id_usuario = :idValor";

    $sentencia = $conexion->prepare($sql);
    $sentencia->bindParam(":idValor", $id); //asocia el $identicador a :idValor
    $isOk = $sentencia->execute(); //borra los valores

    $cantidadAfectada = $sentencia->rowCount(); //Devuelve el número de filas afectadas por la última sentencia SQL
    echo $cantidadAfectada;
    
?>
<form action="/bd+php/mostrardb.php" method="post">
    <input type="submit" value="Volver">
</form>