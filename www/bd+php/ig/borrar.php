<?php
session_start();
ob_start();
include "conexion.php";
//Una vez le de a borrar, cogerá el id del post a borrar y borrará el contenido (foto) del servidor y también los datos en la base de datos
if (isset($_POST['borrar'])) {

    $id = $_POST['borrar'];

    $sql = "SELECT * FROM postsig WHERE id = :id";   
    $sentencia = $conexion->prepare($sql);    
    $sentencia->setFetchMode(PDO::FETCH_ASSOC);
    $sentencia->bindParam(":id", $id);
    $sentencia->execute();

    $fila = $sentencia->fetch();
    $foto = $fila['foto'];

    if ($foto) {
        $ruta = "./fotospost/" . $foto;
        unlink("$ruta"); // Elimina la foto del servidor
    }

    $id = $_POST["borrar"];
    $sql = "DELETE FROM postsig WHERE id = :idValor;";
    $sentencia = $conexion->prepare($sql);
    $sentencia->bindParam(":idValor", $id); // Asocia el $id a :idValor
    $isOk = $sentencia->execute(); // Borra los valores de la base de datos
    header("Location: ./index.php"); // Redirige al index
}  
?>
