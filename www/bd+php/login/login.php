<?php
    include "conexion.php";
    if (isset($_POST["nombre"]) && isset($_POST["fecha"]) && isset($_POST["numero"])) {
        $nombre = $_POST["nombre"] ;         //si NO recibe ningún valor del POST, asigna valor por defecto "Julio"
        $email = $_POST["Email"] ;
        $contraseña = $_POST["password"];
        
    if ($password == $confirmar) {
        $passwordEncriptado = password_hash($_POST["password"], PASSWORD_BCRYPT);


        $sql = "INSERT INTO usuarios(nombre, email, contrasenya) VALUES (:nombre, :email, :contrasenya)";
        
        $sentencia = $conexion -> prepare($sql);
        $sentencia->bindParam(":nombre", $nombre);
        $sentencia->bindParam(":email", $email);
        $sentencia->bindParam(":contraseña", $passwordEncriptado);
        $isOk = $sentencia -> execute();                        // ejecuta la sentencia y devuelve comprobación que todo es ok
        
        $idGenerado = $conexion->lastInsertId();      //devuelve el último campo en miTabla
        echo $idGenerado;
        header("Location: ./index.php");
    }

    }
?>   
<form action="" method="post">
    <input type="email" name="email" placeholder="Email" required><br>
    <input type="password" name="password" placeholder="Contraseña" required><br>
    <input type="submit" value="iniciar sesion">
</form>
<form action="./index.php" method="post">
    <input type="submit" value="Volver">
</form>