<?php
ob_start();
include "conexion.php";
    if (isset($_POST["Editar"])) {

    $id = $_POST["id"] ;                 //los valores que queremos cambiar
    $nombre = $_POST["nombre"] ;         //si NO recibe ningún valor del POST, asigna valor por defecto "Julio"
    $fecha = $_POST["fecha"] ;
    $numero = $_POST["numero"] ;
    
    echo $id;
    echo $nombre;
    echo $fecha;
    echo $numero;

    $sql = "UPDATE tabla2 SET nombre=:nombre, fecha=:fecha, numero=:numero WHERE id=:id";   

    $sentencia = $conexion->prepare($sql);
    $sentencia->bindParam(':id', $id);
    $sentencia->bindParam(':nombre',$nombre);
    $sentencia->bindParam(':fecha',$fecha);
    $sentencia->bindParam(':numero',$numero);
    $isOk = $sentencia -> execute();             //borra los valores

    $cantidadAfectada = $sentencia->rowCount(); //Devuelve el número de filas afectadas por la última sentencia SQL
    echo $cantidadAfectada;
    }
    if (isset($_POST['id'])) {

        $id = $_POST['id'];
    
        $sql = "SELECT * FROM tabla2 WHERE id = :id";   
        $sentencia = $conexion->prepare($sql);    
        $sentencia->setFetchMode(PDO::FETCH_ASSOC);
        $sentencia->bindParam(":id", $id);
        $sentencia->execute();
    
        $fila = $sentencia->fetch();
    }    

?>
<form action="" method="post">
<input type="text" name="nombre" value="<?php echo $fila['nombre']?>"></td>
<input type="date" name="fecha" value="<?php echo $fila['fecha']?>"></td>
<input type="text" name="numero" value="<?php echo $fila['numero']?>"></td>
<input type="hid" name="id" value="<?php echo $id = $_POST["id"] ; ?>"></td>
<input type="submit" name="Editar" value="Editar">
</form>
<form action="./mostrardb.php" method="post">
    <input type="submit" value="Volver">
</form>