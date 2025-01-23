<?php
    include "conexion.php";
?>
<form action="" method="post">
    <input type="text" name="nombre"><br>
    <input type="email" name="email"><br>
    <input type="password" name="password"><br>
    <input type="submit" value="crear">
</form>
<form action="/bd+php/mostrardb.php" method="post">
    <input type="submit" value="Volver">
</form>
<?php
    if (isset($_POST["nombre"]) && isset($_POST["fecha"]) && isset($_POST["numero"])) {
    $nombre = $_POST["nombre"] ;         //si NO recibe ningún valor del POST, asigna valor por defecto "Julio"
    $fecha = $_POST["fecha"] ;
    $numero = $_POST["numero"] ;
    
    $sql = "INSERT INTO login(nombre, email, contraseña) VALUES (:nombre, :email, :contraseña)";
    
    $sentencia = $conexion -> prepare($sql);
    $sentencia->bindParam(":nombre", $nombre);
    $sentencia->bindParam(":email", $email);
    $sentencia->bindParam(":contraseña", $contraseña);
    $isOk = $sentencia -> execute();                        // ejecuta la sentencia y devuelve comprobación que todo es ok
    
    $idGenerado = $conexion->lastInsertId();      //devuelve el último campo en miTabla
    echo $idGenerado;
}
?>   