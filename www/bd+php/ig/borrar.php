<?php
session_start();
ob_start();
include "conexion.php";
if (isset($_POST['borrar'])) {

        $id = $_POST['borrar'];
    
        $sql = "SELECT * FROM postsig WHERE id = :id";   
        $sentencia = $conexion->prepare($sql);    
        $sentencia->setFetchMode(PDO::FETCH_ASSOC);
        $sentencia->bindParam(":id", $id);
        $sentencia->execute();
    
        $fila = $sentencia->fetch();
        $foto= $fila['foto'];
  
        if ($foto) {
                $ruta = "./fotospost/" . $foto;
                #echo $ruta_imagen;
                unlink("$ruta");
                
        }
        $id=$_POST["borrar"];
        $sql = "DELETE FROM postsig WHERE id = :idValor;";
        $sentencia = $conexion->prepare($sql);
        $sentencia->bindParam(":idValor", $id); //asocia el $identicador a :idValor
        $isOk = $sentencia->execute(); //borra los valores
        header("Location: ./index.php");
}  
?>
