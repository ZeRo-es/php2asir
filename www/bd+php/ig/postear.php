<?php
    session_start();
    ob_start();
    include "conexion.php";
        if (isset($_POST["mensaje"]) && isset($_POST["fotopost"])) {
            $id=$_SESSION["id"];
            $mensaje = $_POST["mensaje"] ;         //si NO recibe ningún valor del POST, asigna valor por defecto "Julio"
            $fotopost = $_POST["fotopost"] ;
            

            $sql = "INSERT INTO postsig(mensaje,foto,id_usuario) VALUES (:mensaje,:foto,:idValor)";
            
            $sentencia = $conexion -> prepare($sql);
            $sentencia->bindParam(":mensaje", $mensaje);
            $sentencia->bindParam(":foto", $fotopost);
            $sentencia->bindParam(":idValor", $id);
            $isOk = $sentencia -> execute();
            $idGenerado = $conexion->lastInsertId();
            echo $idGenerado;
            header("Location: ./index.php");
        }

?>   
