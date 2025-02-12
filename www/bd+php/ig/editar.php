<?php
ob_start();
include "conexion.php";
    if (isset($_POST['editar'])) {

        $id = $_POST['editar'];
    
        $sql = "SELECT * FROM postsig WHERE id = :id";   
        $sentencia = $conexion->prepare($sql);    
        $sentencia->setFetchMode(PDO::FETCH_ASSOC);
        $sentencia->bindParam(":id", $id);
        $sentencia->execute();
    
        $fila = $sentencia->fetch();
        $foto= $fila['foto'];
    }    

?>
<form action="" method="post">
<input type="text" name="mensaje" value="<?php echo $fila['mensaje']?>"></td>
<input type="file" name="foto" value="<?php echo $foto ?>"></td>
<input type="text" name="id" value="<?php echo $id; ?>"></td>
<input type="submit" name="Editar" value="Editar">
</form>
<form action="./index.php" method="post">
    <input type="submit" value="Volver">
</form>
<?php
if (isset($_POST["Editar"])) {

    $id = $_POST["id"] ;                 //los valores que queremos cambiar
    $mensaje = $_POST["mensaje"] ; 
    $foto = $_POST["foto"] ; 

    if (empty($_POST['foto'])) {
        $sql = "UPDATE postsig SET mensaje=:mensaje WHERE id=:id";
        $sentencia = $conexion->prepare($sql);
        $sentencia->bindParam(':id', $id);
        $sentencia->bindParam(':mensaje',$mensaje);
        $isOk = $sentencia -> execute();             //borra los valores
        $cantidadAfectada = $sentencia->rowCount(); //Devuelve el número de filas afectadas por la última sentencia SQL
        header("Location: ./index.php");   
    }else {
        $sql = "UPDATE postsig SET mensaje=:mensaje, foto=:foto WHERE id=:id";
        $sentencia = $conexion->prepare($sql);
        $sentencia->bindParam(':id', $id);
        $sentencia->bindParam(':mensaje',$mensaje);
        $sentencia->bindParam(':foto',$foto);
        $isOk = $sentencia -> execute();             //borra los valores
        $cantidadAfectada = $sentencia->rowCount(); //Devuelve el número de filas afectadas por la última sentencia SQL
        header("Location: ./index.php"); 
    }
}
print_r($foto);
?>