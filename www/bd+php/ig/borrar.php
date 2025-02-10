<?php
session_start();
ob_start();
include "conexion.php";
        $id=$_POST["borrar"];
        $sql = "DELETE FROM postsig WHERE id = :idValor;";
        $sentencia = $conexion->prepare($sql);
        $sentencia->bindParam(":idValor", $id); //asocia el $identicador a :idValor
        $isOk = $sentencia->execute(); //borra los valores
        header("Location: ./index.php");
?>
